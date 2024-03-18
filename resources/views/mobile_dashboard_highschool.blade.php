<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Dashboard High School</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="/css/mobilecss/highschool.css">
    
</head>
<body>
    <div class="login">
        <h1 class="lms">SPC LMS</h1>
        <button class="button">Log in</button>
    </div>
    <hr class="line2">
    <div class="searched">
        <select name="names" id="names">
          <option>Select</option>
        </select>
        <input class="search" type="search" placeholder="Search Book Access Number" name="search">
      </div>
    <table>
        <tr>
            <th>Accession Number</th>
            <th>Title</th>
            <th>Availability</th>
        </tr>
        <tr>
            <td>13758</td>
            <td>HTML 1</td>
            <td>Available</td>
        </tr>
    </table>
    <div class="books">
        <h1 class="h1book">BOOKS</h1>
        <p class="level">Class Level:</p>
        <select name="college" id="college">
            <option>College</option>
            <option>Senior High</option>
            <option>High School</option>
            <option>Elementary</option>
        </select>
    </div>
     <!--Grade 7 BOOKS-->
    <div class="view1">
        <h4>Grade 7</h4>
        <button onclick="window.location.href = '{{ route('viewAll') }}'">View All</button>
    </div>
    <div class="grade7">
        <img src="images/grade 7/arts.jpg" alt="arts">
        <img src="images/grade 7/math.jpg" alt="math">
        <img src="images/grade 7/reading.jpg" alt="reading">
        <img src="images/grade 7/science.jpg" alt="science">
    </div>
    <div class="grade7-text">
        <p id="name1">Name 1</p>
        <p id="name2">Name 2</p>
        <p id="name3">Name 3</p>
        <p id="name4">Name 4</p>
    </div>
    <div class="available-text">
        <p id="available1">Available</p>
        <p id="available2">Available</p>
        <p id="available3">Available</p>
        <p id="available4">Available</p>
    </div>
    <!--Grade 8 BOOKS-->
    <div class="view2">
        <h4>Grade 8</h4>
        <button onclick="window.location.href = '{{ route('viewAll') }}'">View All</button>
    </div>
    <div class="grade8">
        <img src="images/grade 8/language.jpg" alt="language">
        <img src="images/grade 8/reading.jpg" alt="reading">
        <img src="images/grade 8/science.jpg" alt="science">
        <img src="images/grade 8/writing.jpg" alt="writing">
    </div>
    <div class="grade8-text">
        <p id="name5">Name 5</p>
        <p id="name6">Name 6</p>
        <p id="name7">Name 7</p>
        <p id="name8">Name 8</p>
    </div>
    <div class="available-text">
        <p id="available5">Available</p>
        <p id="available6">Available</p>
        <p id="available7">Available</p>
        <p id="available8">Available</p>
    </div>
    <!--Grade 9 BOOKS-->
    <div class="view3">
        <h4>Grade 9</h4>
        <button onclick="window.location.href = '{{ route('viewAll') }}'">View All</button>
    </div>
    <div class="grade9">
        <img src="images/grade 7/arts.jpg" alt="arts">
        <img src="images/grade 7/math.jpg" alt="math">
        <img src="images/grade 7/reading.jpg" alt="reading">
        <img src="images/grade 7/science.jpg" alt="science">
    </div>
    <div class="grade9-text">
        <p id="name9">Name 9</p>
        <p id="name10">Name 10</p>
        <p id="name11">Name 11</p>
        <p id="name12">Name 12</p>
    </div>
    <div class="available-text">
        <p id="available9">Available</p>
        <p id="available10">Available</p>
        <p id="available11">Available</p>
        <p id="available12">Available</p>
    </div>
    <!--Grade 10 BOOKS-->
    <div class="view4">
        <h4>Grade 10</h4>
        <button onclick="window.location.href = '{{ route('viewAll') }}'">View All</button>
    </div>
    <div class="grade10">
    <img src="images/grade 8/language.jpg" alt="language">
        <img src="images/grade 8/reading.jpg" alt="reading">
        <img src="images/grade 8/science.jpg" alt="science">
        <img src="images/grade 8/writing.jpg" alt="writing">
    </div>
    <div class="grade10-text">
        <p id="name13">Name 13</p>
        <p id="name14">Name 14</p>
        <p id="name15">Name 15</p>
        <p id="name16">Name 16</p>
    </div>
    <div class="available-text">
        <p id="available13">Available</p>
        <p id="available14">Available</p>
        <p id="available15">Available</p>
        <p id="available16">Available</p>
    </div>
    <script src="js/mobilejs/dashboard_highschool.js"></script>
</body>
</html>