<div class="d-flex justify-content-between align-items-center m-0 p-0">
    <div class="m-0 p-0">
        <h6 class="h1book p-0 m-0">BOOKS</h6>
    </div>
    <div class="d-flex align-items-center gap-3">
        <p class="d-inline-block p-0 m-0">Class Level:</p>
        <select name="college" class="college seniorhigh highschool elementary"  id="education_level" onchange="landRedirectToPage()">
            <option value="" selected>Select Year</option>
            <option value="{{ route('college') }} ">College</option>
            <option value="{{ route('seniorhigh') }}">Senior High</option>
            <option value="{{ route('highschool') }}">High School</option>
            <option value="{{ route('elementary') }}">Elementary</option>
        </select>
    </div>
</div>