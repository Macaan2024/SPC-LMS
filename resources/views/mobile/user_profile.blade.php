@extends('mobile.layout.dashboard.dash_layout')

@section('userprofile-content')
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
    <img class="rounded-circle mx-auto d-block" height="200px" width="220px" src="userimage/lee.jpg" alt="">
</div>
<div class="mt-5">
    <h2 class="text-center">Jesper Ian Barilla</h2>
</div>
    
<div>
<h6 class="text-left mt-5">Information</h6>
<div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 rounded">
    <div class="d-flex flex-column ">
        <p>Lastname : Barilla</p>
        <p>Firstname : Jesper Ian</p>
        <p>Middlename : V</p>
        <p>Gender : Male</p>
        <p>Contact Number : 09514696308</p>
    </div>
    <div class="d-flex flex-column">
        <p>Level : College</p>
        <p>Course : BSIT</p>
        <p>Year Level : 2nd Year</p>
        <p>Usertype : Student</p>
    </div>
</div>
<h6 class="mt-5 text-left">User Transaction Performance</h6>
<div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 rounded">
    <div class="d-flex flex-column ">
        <p>Number of Borrowed Books : 15</p>
        <p class="text-success fw-bold">Successfully Return : 11</p>
        <p class="text-warning fw-bold">Delay Return Return : 2</p>
        <p class="text-danger fw-bold">Fail to Return (Lostbook) : 2</p>
    </div>
    <div class="d-flex flex-column">
    </div>
</div>
<div class="mt-3">
    <h6 class="text-danger fw-bolder">Total Balance : P20 </h6>
</div>
@endsection