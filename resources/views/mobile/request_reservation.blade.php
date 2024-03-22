<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Reservation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/mobilecss/reservation.css">    
</head>
<body>
    <div class="header">
        <i class="fa-solid fa-bars"></i>
        <span>SPC LMS</span>
        <a href="{{ route('notifications') }}"><i class="fa-solid fa-bell" style="color: #660809;"></i></a>
        <i class="fa-solid fa-circle-user"></i>
    </div>
    <hr>
    <div class="arrow">
        <a href="{{ route('viewElectrical') }}"><i class="fa-solid fa-arrow-left" style="color: #660809;"></i></a>
        <img src="images/Electronics books/electronics_complete.png">
    </div>
    <div class="accession">
        <h3>ACCESSION NUMBER:</h3>
        <h4>Remaining Stock: 2</h4>
    </div>
    <hr class="hr">
    <div class="book-info">
        <p>Book Accession Number: <br><br>
            Book ISN: 978-3-16-148410-0 <br><br>
            Book Title: Shannon Montebonks <br><br>
            Book Published Year: 1999 <br><br>
            Book Publication Address: Tubod, Iligan City <br><br>
            Book Category: Science <br><br>
            Book Quantity: 7<br><br>
            Book Level: College<br><br>
            Book Edition: 5th Edition<br><br>
            Book Language: English
        </p>
    </div>
    <div class="request">
        <button>Request Reservation</button>
    </div>
    <script src="/js/mobilejs/reservation.js"></script>
</body>
</html>