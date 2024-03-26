@extends('mobile.layout.dashboard.dash_layout')
@section('dash-viewall-content')
    <div class="view_ee">
        <a href="{{ route('dashboard-college') }}"><i class="fa-solid fa-arrow-left"></i></a>
        <h4>Electrical Engineering</h4>
    </div>
    <div class="list">
        <h5>List of Books</h5>
    </div>
    <div class="my-3">
    @include('mobile.layout.dashboard.dash_search')
    </div>
   
    <!--First layer-->
    <div class="book1">
        <img class="one" src="images/Electronics books/electronics_complete.png" alt="electronics">
        <img class="two"src="images/Electronics books/electronics_dummies.png" alt="dummies">
        <img class="three"src="images/Electronics books/electronics_practical.png" alt="practical">
    </div>
    <div class="view1">
        <button id="button1"><a href="{{ route('reservation') }}">View</a></button>
        <button id="button2">View</button>
        <button id="button3">View</button>
    </div>

    <!--2nd layer-->
    <div class="book2">
        <img class="four" src="images/Electronics books/electronics_practical.png" alt="electronics">
        <img class="five"src="images/Electronics books/electronics_third_edition.png" alt="design">
        <img class="six"src="images/Electrical Books/electrical_engineering_textbook.png" alt="eng">
    </div>
    <div class="view2">
        <button id="button4">View</button>
        <button id="button5">View</button>
        <button id="button6">View</button>
    </div>
    <!--3rd layer-->
    <div class="book3">
        <img class="seven" src="images/Computer Studies books/computer_studies.png" alt="pocket">
        <img class="eight"src="images/Computer Studies books/IT_essentials.png" alt="mechanical">
        <img class="nine"src="images/Computer Studies books/computer_book.png" alt="writing">
    </div>
    <div class="view3">
        <button id="button7">View</button>
        <button id="button8">View</button>
        <button id="button9">View</button>
    </div>
@endsection