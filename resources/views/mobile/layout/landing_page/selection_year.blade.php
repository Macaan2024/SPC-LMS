<div class="books">
    <h1 class="h1book">BOOKS</h1>
    <p class="level">Class Level:</p>
    <select name="college" class="college seniorhigh highschool elementary"  id="education_level" onchange="redirectToPage()">
        <option value="" selected>Select Year</option>
        <option value="{{ route('college') }} ">College</option>
        <option value="{{ route('seniorhigh') }}">Senior High</option>
        <option value="{{ route('highschool') }}">High School</option>
        <option value="{{ route('elementary') }}">Elementary</option>
    </select>
</div>