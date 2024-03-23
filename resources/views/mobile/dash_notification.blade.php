@extends('mobile.layout.dashboard.dash_layout')
@section('notification-content')
<div class="d-flex justify-content-between align-items-center mt-3">
    <a href="{{ route('dashboard-college') }}">
        <svg style="color:#661011;" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 512 512">
            <rect width="512" height="512" fill="none" />
            <path fill="currentColor" d="M368 64L144 256l224 192z" />
        </svg>
    </a>
    <span class="fw-bold">Notification</span>
    <svg class="toggle-delete" style="color:#661011; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024">
        <rect width="1024" height="1024" fill="none" />
        <path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64zm64 0h192v-64H416zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32m192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32" />
    </svg>
</div>
<div class="border-bottom my-3"></div>
<div class="notif-item px-2 py-2 bg-dark" style="color:white; border-radius:5px;">
    <p class="text-danger fw-bold">Alert!</p>
    <p class="custom-paragraph">Dear Student, You need to return the book entitled The Computer Book before 9:00am. Otherwise, you will be penalty 10 pesos per hour. Thank you! Godbless.</p>
    <div class="d-flex justify-content-between">
        <button class="btn btn-success">View</button>
        <button class="btn btn-danger delete-btn" style="display: none;">Delete</button>
    </div>
</div>
<div class="notif-item px-2 py-2 mt-3 bg-dark" style="color:white; border-radius:5px;">
    <p class="text-success fw-bold">Book Borrow Approve!</p>
    <p class="custom-paragraph">Dear Student, You may borrow the book today on 5:00pm, please be sure to come don't be late. Otherwise, your request reservation will be decline in 15 minutes</p>
    <div class="d-flex justify-content-between">
        <button class="btn btn-success">View</button>
        <button class="btn btn-danger delete-btn" style="display: none;">Delete</button>
    </div>
</div>
<div class="notif-item px-2 py-2 mt-3 bg-dark" style="color:white; border-radius:5px;">
    <p class="text-danger fw-bold">Alert!</p>
    <p class="custom-paragraph">Dear Student, You need to return the book entitled The Computer Book before 9:00am. Otherwise, you will be penalty 10 pesos per hour. Thank you! Godbless.</p>
    <div class="d-flex justify-content-between">
        <button class="btn btn-success">View</button>
        <button class="btn btn-danger delete-btn" style="display: none;">Delete</button>
    </div>
</div>
<div class="notif-item px-2 py-2 mt-3 bg-dark" style="color:white; border-radius:5px;">
    <p class="text-success fw-bold">Book Borrow Approve!</p>
    <p class="custom-paragraph">Dear Student, You may borrow the book today on 5:00pm, please be sure to come don't be late. Otherwise, your request reservation will be decline in 15 minutes</p>
    <div class="d-flex justify-content-between">
        <button class="btn btn-success">View</button>
        <button class="btn btn-danger delete-btn" style="display: none;">Delete</button>
    </div>
</div>
<div class="notif-item px-2 py-2 mt-3 bg-dark" style="color:white; border-radius:5px;">
    <p class="text-success fw-bold">Book Borrow Approve!</p>
    <p class="custom-paragraph">Dear Student, You may borrow the book today on 5:00pm, please be sure to come don't be late. Otherwise, your request reservation will be decline in 15 minutes</p>
    <div class="d-flex justify-content-between">
        <button class="btn btn-success">View</button>
        <button class="btn btn-danger delete-btn" style="display: none;">Delete</button>
    </div>
</div>
@endsection