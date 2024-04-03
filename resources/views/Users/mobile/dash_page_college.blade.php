@extends('mobile.layout.dashboard.dash_layout')

<div class="m-0 mt-3 px-2 py-3">
    @include('mobile.layout.landing_page.landing_book_search')
</div>
<div class="px-2 py-4">
    @include('mobile/layout/dashboard/dash_select_year_level')
</div>



@section('dashboard-college')
<!--ELECTRICAL ENGINEERING BOOKS-->
<div class=" d-flex justify-content-between align-items-center p-0 m-0">
    <h6 class="p-0 m-0 d-inline-block">Electrical</h6>
    <a class="py-1 px-1 m-0 text-decoration-none color-black bg-white fs-6" style="border: 1px solid black; color:black;" href="{{ route('viewElectrical') }}">View All</a>
</div>
<div class="d-flex m-0 p-0 mt-3 gap-2 justify-content-between">
    <div class="d-flex flex-column gap-2 align-items-center">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Electrical Books/electrical_engineering_fundamentals.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div> 
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;" src="images/Electrical Books/electrical_engineering_principles.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Electrical Books/electrical_engineering_standards.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0 img-fluid" style="height:100%; width: 100%;" src="images/Electrical Books/electrical_engineering_textbook.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-justify">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>         
</div>
<!--ELECTRONICS BOOKS-->
<div class=" d-flex justify-content-between align-items-center p-0 m-0">
    <h6 class="p-0 m-0 d-inline-block">Electronics</h6>
    <a class="py-1 px-1 m-0 text-decoration-none color-black bg-white fs-6" style="border: 1px solid black; color:black;" href="{{ route('viewElectrical') }}">View All</a>
</div>
<div class="d-flex m-0 p-0 mt-3 gap-2 justify-content-between">
    <div class="d-flex flex-column gap-2 align-items-center">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Electrical Books/electrical_engineering_fundamentals.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div> 
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;" src="images/Electronics books/electronics_third_edition.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Electronics books/electronics_complete.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0 img-fluid" style="height:100%; width: 100%;" src="images/Electronics books/electronics_dummies.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-justify">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>         
</div>
<!--MECHANICAL ENGINEERING BOOKS-->
<div class=" d-flex justify-content-between align-items-center p-0 m-0">
    <h6 class="p-0 m-0 d-inline-block">Mechanical</h6>
    <a class="py-1 px-1 m-0 text-decoration-none color-black bg-white fs-6" style="border: 1px solid black; color:black;" href="{{ route('viewElectrical') }}">View All</a>
</div>
<div class="d-flex m-0 p-0 mt-3 gap-2 justify-content-between">
    <div class="d-flex flex-column gap-2 align-items-center">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Mechanical books/mechanical_eng_design.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div> 
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;" src="images/Mechanical books/mechanical.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Mechanical books/mechanical_pocket.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0 img-fluid" style="height:100%; width: 100%;" src="images/Mechanical books/mechanical_design.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-justify">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>         
</div>
<!--COMPUTER STUDIES BOOKS-->
<div class=" d-flex justify-content-between align-items-center p-0 m-0">
    <h6 class="p-0 m-0 d-inline-block">Mechanical</h6>
    <a class="py-1 px-1 m-0 text-decoration-none color-black bg-white fs-6" style="border: 1px solid black; color:black;" href="{{ route('viewElectrical') }}">View All</a>
</div>
<div class="d-flex m-0 p-0 mt-3 gap-2 justify-content-between">
    <div class="d-flex flex-column gap-2 align-items-center">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Computer Studies books/computer_bible.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div> 
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;" src="images/Computer Studies books/computer_book.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Computer Studies books/IT_essentials.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0 img-fluid" style="height:100%; width: 100%;" src="images/Computer Studies books/computer_studies.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-justify">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>         
</div>
<!--ARTS-->
<div class=" d-flex justify-content-between align-items-center p-0 m-0">
    <h6 class="p-0 m-0 d-inline-block">Mechanical</h6>
    <a class="py-1 px-1 m-0 text-decoration-none color-black bg-white fs-6" style="border: 1px solid black; color:black;" href="{{ route('viewElectrical') }}">View All</a>
</div>
<div class="d-flex m-0 p-0 mt-3 gap-2 justify-content-between">
    <div class="d-flex flex-column gap-2 align-items-center">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Arts books/build.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div> 
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;" src="images/Arts books/human.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0" style="height:100%; width: 100%;"  src="images/Arts books/writing.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-center">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>
    <div class="d-flex flex-column gap-2">
        <div style="height:139.11px; width: 97.69px;">
            <img class="p-0 m-0 img-fluid" style="height:100%; width: 100%;" src="images/Arts books/teaching.png" alt="electrical_engineering_principles">
        </div>
        <div>
            <h6 class="text-justify">The New Art and Sciences of Teaching 1</h6>
        </div>
        <div>
            <p class="text-center text-success fw-bold">Available</p>
        </div>
        
    </div>         
</div>
@endsection
