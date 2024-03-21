<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/mobilecss/view_electrical.css">    
</head>
<body>
    <div class="header">
        <i class="fa-solid fa-bars"></i>
        <span>SPC LMS</span>
        <a href="{{ route('notifications') }}"><i class="fa-solid fa-bell" style="color: #660809;"></i></a>
        <i class="fa-solid fa-circle-user"></i>
    </div>
    <hr>
    <div class="view_ee">
        <a href="{{ route('college') }}"><i class="fa-solid fa-arrow-left"></i></a>
        <h4>Electrical Engineering</h4>
    </div>
    <div class="list">
        <h5>List of Books</h5>
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
</body>
</html>