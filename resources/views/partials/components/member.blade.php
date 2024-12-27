<div class="row align-items-center gx-5">
    <div class="col-auto">
        <div class="avatar @@online">
            <img class="avatar-img" src="{{ auth()->user()->avatar }}" alt="">
            <span class="avatar-text">{{ auth()->user()->name }}</span>
        </div>
    </div>
    <div class="col">
        <h5>{{ auth()->user()->name }}</h5>
        <p>{{ auth()->user()->status }}</p>
    </div>
    <div class="col-auto">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-@@id">
            <label class="form-check-label" for="id-add-user-user-@@id"></label>
        </div>
    </div>
</div>
<label class="stretched-label" for="id-add-user-user-@@id"></label>