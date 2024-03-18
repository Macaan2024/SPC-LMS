// FILEPATH: /C:/xampp/htdocs/SPC-LMS/resources/views/mobile_dashboard_seniorhigh.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="/css/mobilecss/seniorhigh.css">
    <script src="js/mobilejs/dashboard_shs.js"></script>
    

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
     <!--STEM BOOKS-->
    <div class="view1">
        <h4>STEM</h4>
        <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
    </div>
    <div class="stem">
        <img src="images/Stem books/practical research.gif" alt="practical research">
        <img src="images/Stem books/body science.jpg" alt="body science">
        <img src="images/Stem books/home education.jpg" alt="home education">
        <img src="images/Stem books/human body.gif" alt="human body">
    </div>
    <div class="stem-text">
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
    <!--HUMSS BOOKS-->
    <div class="view2">
        <h4>HUMSS</h4>
        <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
    </div>
    <div class="humss">
        <img src="images/Humss books/humanities.jpg" alt="humanities">
        <img src="images/Humss books/sciences.jpg" alt="sciences">
        <img src="images/Humss books/social.jpg" alt="social">
        <img src="images/Humss books/understanding.jpg" alt="understanding">
    </div>
    <div class="humss-text">
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
    <!--ABM BOOKS-->
    <div class="view3">
        <h4>ABM</h4>
        <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
    </div>
    <div class="abm">
        <img src="images/Abm books/abm.gif" alt="abm">
        <img src="images/Abm books/b2b.jpg" alt="b2b">
        <img src="images/Abm books/abm.gif" alt="abm">
        <img src="images/Abm books/b2b.jpg" alt="b2b">
    </div>
    <div class="abm-text">
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
    <!--GAS BOOKS-->
    <div class="view4">
        <h4>GAS</h4>
        <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
    </div>
    <div class="gas">
        <img src="images/Gas books/gas.jpg" alt="gas">
        <img src="images/Gas books/combustion.jpg" alt="combustion">
        <img src="images/Gas books/gas.jpg" alt="gas">
        <img src="images/Gas books/combustion.jpg" alt="combustion">
    </div>
    <div class="gas-text">
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
    <!--ARTS-->
    <div class="view5">
        <h4>Arts</h4>
        <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
    </div>
    <div class="arts">
        <img src="images/Arts books/teaching.png" alt="teaching">
        <img src="images/Arts books/writing.png" alt="writing">
        <img src="images/Arts books/human.png" alt="human">
        <img src="images/Arts books/build.png" alt="build">
    </div>
    <div class="arts-text">
        <p id="name17">Name 17</p>
        <p id="name18">Name 18</p>
        <p id="name19">Name 19</p>
        <p id="name20">Name 20</p>
    </div>
    <div class="available-text">
        <p id="available17">Available</p>
        <p id="available18">Available</p>
        <p id="available19">Available</p>
        <p id="available20">Available</p>
    </div>
    

</body>
</html>