<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mobile dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
        <link rel="stylesheet" href="css/mobilecss/elementary.css">
        <script src="js/mobilejs/dashboard_elementary.js"></script>
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
        <!--grade 1 BOOKS-->
        <div class="view1">
            <h4>Grade 1</h4>
            <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
        </div>
        <div class="e-engineering">
            <img src="images/Electrical Books/electrical_engineering_fundamentals.png" alt="electrical_engineering_fundamentals">
            <img src="images/Electrical Books/electrical_engineering_principles.png" alt="electrical_engineering_principles">
            <img src="images/Electrical Books/electrical_engineering_standards.png" alt="electrical_engineering_standards">
            <img src="images/Electrical Books/electrical_engineering_textbook.png" alt="electrical_engineering_textbook">
        </div>
        <div class="electrical-text">
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
        <!--grade 2 BOOKS-->
        <div class="view2">
            <h4>Grade 2</h4>
            <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
        </div>
        <div class="el-engineering">
            <img src="images/Electronics books/electronics_practical.png" alt="electronics_practical">
            <img src="images/Electronics books/electronics_third_edition.png" alt="electronics_third_edition">
            <img src="images/Electronics books/electronics_complete.png" alt="electronics_complete">
            <img src="images/Electronics books/electronics_dummies.png" alt="electronics_dummies">
        </div>
        <div class="electronic-text">
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
        <!--Grade 3 BOOKS-->
        <div class="view3">
            <h4>Grade 3</h4>
            <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
        </div>
        <div class="m-engineering">
            <img src="images/Mechanical books/mechanical_design.png" alt="mechanical_design">
            <img src="images/Mechanical books/mechanical_pocket.png" alt="mechanical_pocket">
            <img src="images/Mechanical books/mechanical.png" alt="mechanical">
            <img src="images/Mechanical books/mechanical_eng_design.png" alt="mechanical_eng_design">
        </div>
        <div class="mechanical-text">
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
        <!--Grade 4 BOOKS-->
        <div class="view4">
            <h4>Grade 4</h4>
            <button onclick="window.location.href=`{{ route('viewAll')}}`">View All</button>
        </div>
        <div class="computer_studies">
            <img src="images/Computer Studies books/computer_studies.png" alt="computer_studies">
            <img src="images/Computer Studies books/IT_essentials.png" alt="IT_essentials">
            <img src="images/Computer Studies books/computer_book.png" alt="computer_book">
            <img src="images/Computer Studies books/computer_bible.png" alt="computer_bible">
        </div>
        <div class="computer-text">
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
        <!--Grade 5-->
        <div class="view5">
            <h4>Grade 5</h4>
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