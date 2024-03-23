@extends('mobile.layout.dashboard.dash_layout')

@section('dash-borrow-content')
<div class="row p-0 m-0">
    <div class="button col-6 p-0 m-0">
      <a href="{{ route('borrow-transaction') }}"><button href="" class="borrow-button rounded-start-pill  border-end-0" style="background-color:#661011;color:white;">Borrow</button></a>
    </div>
    <div class="button col-6 p-0 m-0">
      <a href="{{ route('return-transaction') }}"><button class="return-button rounded-end-pill  border-start-0">Return</button></a>
    </div>
</div>

<div class="d-flex gap-3 mt-3 p-0 m-0">
  <div class="p-0 m-0 bg-primary">
    <img style="width:170px; height:100%" class="img-fluid" src="images/Electronics books/electronics_complete.png" alt="electronics">
  </div>
  <div class="d-flex flex-column gap-3 p-0 m-0">
    <span>ACCESSION NUMBER: 13,001</span>
    <span>ISN: 978358017269</span>
    <span>DURATION: 9 Hours</span>
    <span>BORROW DAY: March 19 2024</span>
    <span>BORROW TIME: 5:00pm</span>
    <span>RETURN DAY: March 20 2024</span>
    <span>RETURN TIME: 9:00 AM</span>
  </div>
</div>
<div class="view-book1 mt-2">
  <a class="form-control text-center text-white text-decoration-none" href="{{ route('mob-viewbook') }}" style="background-color:#661011;">View Book</a>
</div>

<div class="d-flex gap-3 mt-3 p-0 m-0">
  <div class="p-0 m-0 bg-primary">
    <img style="width:170px; height:100%" class="img-fluid" src="images/Electronics books/electronics_complete.png" alt="electronics">
  </div>
  <div class="d-flex flex-column gap-3 p-0 m-0">
    <span>ACCESSION NUMBER: 13,001</span>
    <span>ISN: 978358017269</span>
    <span>DURATION: 9 Hours</span>
    <span>BORROW DAY: March 19 2024</span>
    <span>BORROW TIME: 5:00pm</span>
    <span>RETURN DAY: March 20 2024</span>
    <span>RETURN TIME: 9:00 AM</span>
  </div>
</div>
<div class="view-book1 mt-2">
  <a class="form-control text-center text-white text-decoration-none" href="{{ route('mob-viewbook') }}" style="background-color:#661011;">View Book</a>
</div>
<div class="d-flex gap-3 mt-3 p-0 m-0">
  <div class="p-0 m-0 bg-primary">
    <img style="width:170px; height:100%" class="img-fluid" src="images/Electronics books/electronics_complete.png" alt="electronics">
  </div>
  <div class="d-flex flex-column gap-3 p-0 m-0">
    <span>ACCESSION NUMBER: 13,001</span>
    <span>ISN: 978358017269</span>
    <span>DURATION: 9 Hours</span>
    <span>BORROW DAY: March 19 2024</span>
    <span>BORROW TIME: 5:00pm</span>
    <span>RETURN DAY: March 20 2024</span>
    <span>RETURN TIME: 9:00 AM</span>
  </div>
</div>
<div class="view-book1 mt-2">
  <a class="form-control text-center text-white text-decoration-none" href="{{ route('mob-viewbook') }}" style="background-color:#661011;">View Book</a>
</div>
@endsection