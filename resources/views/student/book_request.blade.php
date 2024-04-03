@extends('mobile.layout.dashboard.dash_layout')

@section('dash_bookrequest-content')

<div class="d-flex align-items-center mt-3">
    <a href="{{ route('dashboard-college') }}">
        <svg style="color:#661011;" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 512 512">
            <rect width="512" height="512" fill="none" />
            <path fill="currentColor" d="M368 64L144 256l224 192z" />
        </svg>
    </a>
    <span class="fw-bold mx-auto">Book Reservation</span>
</div>
<table class="book_request table table-striped mt-5 ">
    <thead class="table-dark">
        <tr>
            <th class="text-nowrap">Book ID</th>
            <th class="text-nowrap">Book Title</th>
            <th class="text-nowrap">Book Author</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-left">1</td>
            <td class="text-left">Human Anatomy</td>
            <td class="text-left">Tristan Bartiquin</td>
            <td class="fw-bold text-black text-left">Pending</td>
        </tr>
        <tr>
            <td class="text-left">1</td>
            <td class="text-left">Human Anatomy</td>
            <td class="text-left">Tristan Bartiquin</td>
            <td class="fw-bold text-danger text-left">Decline</td>
        </tr>
        <tr>
            <td class="text-left">1</td>
            <td class="text-left">Human Anatomy</td>
            <td class="text-left">Tristan Bartiquin</td>
            <td class="fw-bold text-success text-lef">Approved</td>
        </tr>
    </tbody>
</table>

@endsection