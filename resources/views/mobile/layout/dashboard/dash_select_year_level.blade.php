<div class="books">
    <h1 class="h1book">BOOKS</h1>
    <p class="level">Class Level:</p>
    <select name="college" class="college seniorhigh highschool elementary"  id="education_level" onchange="dashRedirectToPage()">
        <option value="" selected>Select Year</option>
        <option value="{{ route('dashboard-college') }} ">College</option>
        <option value="{{ route('dashboard-seniorhigh') }}">Senior High</option>
        <option value="{{ route('dashboard-highschool') }}">High School</option>
        <option value="{{ route('dashboard-elementary') }}">Elementary</option>
    </select>
</div>