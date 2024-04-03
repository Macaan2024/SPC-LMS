@extends ('mobile.layout.dashboard.dash_layout')

@section('mob-viewbookreturn')
<div class="d-flex align-items-center mt-3">
    <a href="{{ route('dashboard-college') }}">
        <svg style="color:#661011;" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 512 512">
            <rect width="512" height="512" fill="none" />
            <path fill="currentColor" d="M368 64L144 256l224 192z" />
        </svg>
    </a>
    <span class="fw-bold mx-auto">My Profile</span>
</div>
<div class="d-block mt-3">
    <img class="rounded mx-auto d-block" height="200px" width="220px" src="images/Electronics books/electronics_complete.png" alt="">
</div>
<div class="d-flex justify-content-between mt-5">
    <span class="fs-6 fw-bold">Aceesion Number : 13,599</span>
    <span class="fs-6 text-success fw-bold">Remaining Stock: 2</span>
</div>
<div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 rounded">
    <div class="d-flex flex-column ">
        <p>Book ISN:<br> 978-3-16-148410-0</p>
        <p>Book Title:<br> Shannon Montebonks</p>
        <p>Book Published Year:<br> 1999</p>
        <p>Book Publication Address:<br> Tubod, Iligan City</p>
        <p>Book Category:<br> Science</p>
    </div>
    <div class="d-flex flex-column">
        <p>Book Quantity:<br> 7</p>
        <p>Book Level:<br> College</p>
        <p>Book Edition:<br> 5th Edition</p>
        <p>Book Language:<br> English</p>
    </div>
</div>
<div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 rounded">
    <div class="d-flex flex-column ">
        <p>Borrow Day: 3/23/2024</p>
        <p>Borrow Time: 5:00 PM</p>
    </div>
    <div class="d-flex flex-column">
        <p>Return Day: 4/24/2024</p>
        <p>Book Level: 9:00 AM</p>
    </div>
    <br>
</div>
<div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 rounded">
    <div class="d-flex flex-column">
        <p>Duration: 17hours</p>
        <p class="text-warning">Status: Delay</p>
    </div>
    <div class="d-flex flex-column">
        <p>Hours Delay : 1hr</p>
        <p>Penalty : P10</p>
    </div>
</div>

@endsection