@extends('desktop.layout.layout')                                                                                                                                                                                                                                                                                                                                    
@section('desktop-viewtransaction-content')

<div class="p-5">
    <div class="text-center">
        <h5>View Transaction</h5>
    </div>
    <h5>Patron</h5>
    <div class="border-bottom"></div>
    <div class="d-flex mt-3 gap-4">
        <div>
            <img src="/userimage/lee.jpg" style="height:350px; width:350px;" alt="">
        </div>
        <div class="d-flex flex-column gap-4">
            <h5>Student ID : 2022-00317</h5>
            <h5>Firstname : Casan</h5>
            <h5>Lastname : Macaan</h5>
            <h5>Middlename : Macarandas</h5>
            <h5>Class Level : College</h5>
            <h5>Course : BSIT</h5>
        </div>
        <div class="d-flex flex-column gap-4">
            <h5>Year Level  : 2nd-Year</h5>
        </div>
    </div>
    <h5 class="mt-3">Book</h5>
    <div class="border-bottom"></div>
    <div class="d-flex mt-3 gap-4">
        <div>
            <img src="/images/BSIT/book1.png" style="height:350px; width:350px;" alt="">
        </div>
        <div class="d-flex flex-column gap-4">
            <h5>Student ID : 2022-00317</h5>
            <h5>Firstname : Casan</h5>
            <h5>Lastname : Macaan</h5>
            <h5>Middlename : Macarandas</h5>
            <h5>Class Level : College</h5>
            <h5>Course : BSIT</h5>
        </div>
        <div class="d-flex flex-column gap-4">
            <h5>Year Level  : 2nd-Year</h5>
        </div>
    </div>
    <h5 class="mt-4">Transaction Details</h5>
    <div class="border-bottom"></div>
    <div class="d-flex mt-3 gap-4">
        <div class="d-flex flex-column gap-4">
            <h5>Borrow Day : 2022-00317</h5>
            <h5>Borrow Time : Casan</h5>
            <h5>Return Day : Macaan</h5>
            <h5>Return Time : Macarandas</h5>
            <h5>Status : On use </h5>
        </div>
        <div class="d-flex flex-column gap-4">
            <h5>Year Level  : 2nd-Year</h5>
        </div>
    </div>
    <div class="border-bottom my-3"></div>
    <div class="d-flex justify-content-between">
        <div class="d-flex gap-4">
            <button class="btn btn-success">Return Successfully</button>
            <button class="btn btn-warning" id="returnDelayBtn">Return Delay</button>
            <button class="btn btn-danger">Lost Book</button>
        </div>
        <div class="d-flex gap-4">
            <div id="delaySection" style="display: none">
                <label for="delayInput">Delay:</label>
                <input type="text" id="delayInput">
            </div>
        </div>
        <div id="penaltySection" style="display: none">
            <label for="penaltyInput">Penalty:</label>
            <input type="text" id="penaltyInput">
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const returnDelayBtn = document.getElementById('returnDelayBtn');
    const delaySection = document.getElementById('delaySection');
    const penaltySection = document.getElementById('penaltySection');

    returnDelayBtn.addEventListener('click', function() {
        delaySection.style.display = 'block'; // Show the delay section
        penaltySection.style.display = 'block'; // Show the penalty section
    });
});
</script>
@endsection