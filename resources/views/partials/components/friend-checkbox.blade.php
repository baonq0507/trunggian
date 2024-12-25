<!-- Card -->
<div class="card border-0 mt-5">
    <div class="card-body">

        <div class="row align-items-center gx-5">
            <div class="col-auto">
                <div class="avatar @@online">
                    @if (context.avatar != "") {
                        <img class="avatar-img" src="@@avatar" alt="">
                    }
                    @if (context.abbr != "") {
                        <span class="avatar-text">@@abbr</span>
                    }
                </div>
            </div>
            <div class="col">
                <h5>@@name</h5>
                <p>@@status</p>
            </div>
            <div class="col-auto">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="id-member-@@id">
                    <label class="form-check-label" for="id-member-@@id"></label>
                </div>
            </div>
        </div>
        <label class="stretched-label" for="id-member-@@id"></label>
    </div>
</div>
<!-- Card -->