<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Page;
use Filament\Forms\Components\CreateRecord;
use Filament\Notifications\Notification;
use Filament\Forms\Components\Actions;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // nagigation grouo
    protected static ?string $navigationGroup = 'Quản lý';

    // icon
    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Người dùng';

    // label
    protected static ?string $title = 'Người dùng';

    // label
    protected static ?string $label = 'Người dùng';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin người dùng')
                    ->schema([
                        Forms\Components\TextInput::make('name')->required()->unique(ignoreRecord: true)->label('Tên'),
                        Forms\Components\TextInput::make('email')->required()->email()->unique(ignoreRecord: true)->label('Email'),

                        Forms\Components\Select::make('role')
                            ->label('Vai trò')
                            ->options([
                                'admin' => 'Quản trị viên A',
                                'user' => 'Người dùng',
                                'superadmin' => 'Quản trị viên',
                            ]),
                        Forms\Components\Select::make('status')
                            ->label('Trạng thái')
                            ->options([
                                'active' => 'Hoạt động',
                                'inactive' => 'Không hoạt động',
                                'pending' => 'Chờ duyệt',
                            ]),
                    ])->columns(2),
                Section::make('Mật khẩu và số dư')
                    ->schema([
                        Forms\Components\TextInput::make('Mật khẩu')->required(fn(User $user) => is_null($user->id))
                            ->password()
                            ->dehydrateStateUsing(fn($state) => Hash::make($state))
                            ->dehydrated(fn($state) => filled($state)),
                        Forms\Components\TextInput::make('balance')->label('Số dư')->numeric()->prefix('₫')->default(0),
                    ])->columns(2),
                Section::make('Thông tin người dùng')
                    ->relationship('userInfo')
                    ->headerActions([

                        Actions\Action::make('verify')
                            ->label('Xác thực')
                            ->icon('heroicon-o-check')
                            ->color('success')
                            ->action(function (User $record) {
                                $record->userInfo->is_verified = true;
                                $record->userInfo->save();

                                Notification::make()
                                    ->title('Người dùng đã được xác thực')
                                    ->success()
                                    ->send();
                            }),

                        Actions\Action::make('unverify')
                            ->label('Hủy xác thực')
                            ->icon('heroicon-o-x-mark')
                            ->color('danger')
                            ->action(function (User $record) {
                                $record->userInfo->is_verified = false;
                                $record->userInfo->save();

                                Notification::make()
                                    ->title('Người dùng đã được hủy xác thực')
                                    ->success()
                                    ->send();
                            }),
                    ])
                    ->schema([
                        Forms\Components\TextInput::make('cccd')->unique(ignoreRecord: true)->label('Số CCCD'),
                        Forms\Components\TextInput::make('phone')->unique(ignoreRecord: true)->label('Số điện thoại'),
                        Forms\Components\Textarea::make('address')->label('Địa chỉ')->columnSpanFull(),
                        Forms\Components\FileUpload::make('avatar')->label('Ảnh đại diện')->avatar()->directory('users'),
                        Forms\Components\FileUpload::make('cccd_image_front')->label('Ảnh CCCD mặt trước')
                            ->directory('users/cccd_image_front')
                            ->image()->columnSpanFull(),
                        Forms\Components\FileUpload::make('cccd_image_back')->label('Ảnh CCCD mặt sau')
                            ->directory('users/cccd_image_back')
                            ->image()->columnSpanFull(),
                        Forms\Components\DatePicker::make('birthday')->label('Ngày sinh'),
                        Forms\Components\Select::make('gender')->options([
                            'male' => 'Nam',
                            'female' => 'Nữ',
                        ])->label('Giới tính'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->toggleable()->label('Tên')
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable()->toggleable()->label('Email')
                    ->sortable(),
                    Tables\Columns\TextColumn::make('userInfo.phone')->label('Số điện thoại')
                    ->sortable(),
                Tables\Columns\TextColumn::make('balance')->numeric()->prefix('₫')
                    ->sortable()
                    ->label('Số dư')->formatStateUsing(fn($state) => number_format($state, 0, ',', '.')),

                Tables\Columns\TextColumn::make('status')->badge()->color(fn($state) => match ($state) {
                    'active' => 'success',
                    'inactive' => 'danger',
                    'pending' => 'warning',
                })->formatStateUsing(fn($state) => match ($state) {
                    'active' => 'Hoạt động',
                    'inactive' => 'Không hoạt động',
                    'pending' => 'Chờ duyệt',
                })->label('Trạng thái')
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('userInfo.is_verified')->label('Xác thực'),
                Tables\Columns\TextColumn::make('role')->badge()->color(fn($state) => match ($state) {
                    'admin' => 'success',
                    'user' => 'danger',
                    'superadmin' => 'warning',
                })->formatStateUsing(fn($state) => match ($state) {
                    'admin' => 'Quản trị viên A',
                    'user' => 'Người dùng',
                    'superadmin' => 'Quản trị viên',
                })->label('Vai trò')->searchable()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_verified')
                    ->label('Xác thực')
                    ->options([
                        true => 'Đã xác thực',
                        false => 'Chưa xác thực',
                    ])
                    ->default(true)
                    ->query(function($query, $state) {
                        if(is_null($state)) {
                            $query->whereHas('userInfo' , function($q) use ($state) {
                                $q->where('is_verified', $state);
                            });
                        } 
                    }),
                Tables\Filters\SelectFilter::make('role')
                    ->options([
                        'admin' => 'Quản trị viên A',
                        'user' => 'Người dùng',
                        'superadmin' => 'Quản trị viên',
                    ]),
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'active' => 'Hoạt động',
                        'inactive' => 'Không hoạt động',
                    ]),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\Action::make('change_password')
                        ->label('Đổi mật khẩu')
                        ->form([
                            Forms\Components\TextInput::make('password')->required()->password(),
                        ])
                        ->action(function (User $record, array $data) {
                            $record->update(['password' => Hash::make($data['password'])]);
                        })->modalWidth('sm')
                        ->icon('heroicon-o-key')
                        ->color('warning'),
                    //change status
                    Tables\Actions\Action::make('change_status')
                        ->label('Đổi trạng thái')
                        ->form([
                            Forms\Components\Select::make('status')->options([
                                'active' => 'Hoạt động',
                                'inactive' => 'Không hoạt động',
                                'pending' => 'Chờ duyệt',
                            ]),
                        ])->modalWidth('sm')
                        ->icon('heroicon-o-check')
                        ->color('success'),
                    // xem messgae
                    // Tables\Actions\Action::make('view_message')
                    //     ->label('Xem tin nhắn')
                    //     ->url(fn (User $record) => route('filament.resources.users.view_message', $record))
                    //     ->icon('heroicon-o-chat-bubble-left-ellipsis')
                    //     ->color('info'),
                    // add balance
                    Tables\Actions\Action::make('add_balance')
                        ->label('Thêm số dư')
                        ->form([
                            Forms\Components\TextInput::make('balance')->label('Số dư')->numeric()->prefix('₫'),
                        ])
                        ->icon('heroicon-o-plus')
                        ->color('success')
                        ->action(function (User $record, array $data) {
                            $record->balance = $record->balance + $data['balance'];
                            $record->save();

                            Notification::make()
                                ->title('Số dư đã được cập nhật')
                                ->success()
                                ->send();
                        }),
                    // sub balance
                    Tables\Actions\Action::make('sub_balance')
                        ->label('Trừ số dư')
                        ->form([
                            Forms\Components\TextInput::make('balance')->label('Số dư')->numeric()
                                ->prefix('₫')
                        ])->action(function (User $record, array $data) {
                            $record->balance = $record->balance - $data['balance'];
                            $record->save();

                            Notification::make()
                                ->title('Số dư đã được cập nhật')
                                ->success()
                                ->send();
                        })
                        ->icon('heroicon-o-minus')
                        ->color('danger'),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
            // 'view_message' => Pages\ViewMessage::route('/{record}/view_message'),
        ];
    }
}
