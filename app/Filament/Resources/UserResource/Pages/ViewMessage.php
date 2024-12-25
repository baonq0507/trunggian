<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ViewRecord;

class ViewMessage extends ViewRecord
{
    protected static string $resource = UserResource::class;

    public function getTitle(): string
    {
        return 'Xem tin nhắn';
    }

    //return view
    public function getViewData(): array
    {
        return [
            'record' => $this->record,
        ];
    }
}
