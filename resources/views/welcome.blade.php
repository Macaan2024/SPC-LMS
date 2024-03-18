<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mobile dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
        <link rel="stylesheet" href="style.css">
        <style>
            /* Add responsive styles here */
            @media only screen and (max-width: 600px) {
                /* Adjust styles for small screens */
                .header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 10px;
                }
                .header p {
                    margin: 0;
                }
                .header i {
                    font-size: 20px;
                }
                .line1 {
                    margin: 10px 0;
                }
                .login {
                    text-align: center;
                    margin: 20px 0;
                }
                .button {
                    display: block;
                    margin: 10px auto;
                }
                .searched {
                    text-align: center;
                    margin: 20px 0;
                }
                .search {
                    display: block;
                    margin: 10px auto;
                }
                table {
                    width: 100%;
                    margin: 20px 0;
                }
                .books {
                    text-align: center;
                    margin: 20px 0;
                }
                .h1book {
                    margin: 0;
                }
                .level {
                    margin: 10px 0;
                }
                .college {
                    display: block;
                    margin: 10px auto;
                }
                .view1,
                .view2,
                .view3,
                .view4,
                .view5 {
                    text-align: center;
                    margin: 20px 0;
                }
                .stem,
                .humss,
                .abm,
                .gas,
                .arts {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 10px;
                    margin-bottom: 20px;
                }
                .stem img,
                .humss img,
                .abm img,
                .gas img,
                .arts img {
                    width: 100%;
                    max-width: 200px;
                    height: auto;
                }
                .stem-text,
                .humss-text,
                .abm-text,
                .gas-text,
                .arts-text {
                    text-align: center;
                    margin-bottom: 20px;
                }
                .available-text {
                    text-align: center;
                    margin-bottom: 20px;
                }
            }
            /* Add missing styles for buttons */
            .button {
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <button type="submit">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>
        
        <div class="header">
            <i id="lock" class="fa-solid fa-lock"></i>
            <p class="spclms">spclms.edu.ph</p>
            <i id="rotate" class="fa-solid fa-rotate-right"></i>
        </div>
        <hr class="line1"> 
        <div class="login">
            <h1 class="lms">SPC LMS</h1>
            <button class="button" onclick="login()">Log in</button>
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
            </select>
        </div>
        <!--STEM BOOKS-->
        <div class="view-all-container" id="view-all-stem">
            <h4>STEM</h4>
            <button class="button">View All</button>
        </div>
        <div class="stem">
            <img src="Stem books/practical research.gif" alt="practical research">
            <img src="Stem books/body science.jpg" alt="body science">
            <img src="Stem books/home education.jpg" alt="home education">
            <img src="Stem books/human body.gif" alt="human body">
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
        <div class="view-all-container" id="view-all-stem">
            <h4>HUMSS</h4>
            <button class="button">View All</button>
        </div>
        <div class="humss">
            <img src="Humss books/humanities.jpg" alt="humanities">
            <img src="Humss books/sciences.jpg" alt="sciences">
            <img src="Humss books/social.jpg" alt="social">
            <img src="Humss books/understanding.jpg" alt="understanding">
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
        <div class="view-all-container" id="view-all-stem">
            <h4>ABM</h4>
            <button class="button">View All</button>
        </div>
        <div class="abm">
            <img src="Abm books/abm.gif" alt="abm">
            <img src="Abm books/b2b.jpg" alt="b2b">
            <img src="Abm books/abm.gif" alt="abm">
            <img src="Abm books/b2b.jpg" alt="b2b">
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
        <div class="view-all-container" id="view-all-stem">
            <h4>STEM</h4>
            <button class="button">View All</button>
        </div>
        </div>
        <div class="gas">
            <img src="Gas books/gas.jpg" alt="gas">
            <img src="Gas books/combustion.jpg" alt="combustion">
            <img src="Gas books/gas.jpg" alt="gas">
            <img src="Gas books/combustion.jpg" alt="combustion">
        </div>
        <div class="gas-text">
            <p id="name13">Name 13</p>
            <p id="name14">Name 14</p>
            <p id="name15">Name 15</p>
            <p id="name16">Name 16</p>
        </div>
        <!--ARTS-->
        <div class="view-all-container" id="view-all-stem">
            <h4>ARTS</h4>
            <button class="button">View All</button>
        </div>
        <div class="arts">
            <img src="Arts books/teaching.png" alt="teaching">
            <img src="Arts books/writing.png" alt="writing">
            <img src="Arts books/human.png" alt="human">
            <img src="Arts books/build.png" alt="build">
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
    <script>
    function login(email, password) {
        const loginUrl = 'https://ffcc-app.herokuapp.com/user/login';

        fetch(loginUrl, {
            method: "POST",
            headers: {
                Accept: "application/json, text/plain, */*",
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                email: email,
                password: password,
            }),
        })
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                // Handle successful login, e.g., redirect to a dashboard
            })
            .catch((err) => {
                console.log(err);
                // Handle login error, e.g., show an error message
            });
        }


        document.addEventListener('DOMContentLoaded', function() {
            function viewAllStem() {
    // Code to display all STEM books
    console.log("View all STEM books");
}

function viewAllHumss() {
    // Code to display all HUMSS books
    console.log("View all HUMSS books");
}

function viewAllAbm() {
    // Code to display all ABM books
    console.log("View all ABM books");
}

function viewAllGas() {
    // Code to display all GAS books
    console.log("View all GAS books");
}

function viewAllArts() {
    // 
    console.log("View all Arts books");
}

document.addEventListener('DOMContentLoaded', function() {
    // STEM Books
    document.getElementById('view-all-stem').addEventListener('click', viewAllStem);

    // HUMSS Books
    document.getElementById('view-all-humss').addEventListener('click', viewAllHumss);

    // ABM Books
    document.getElementById('view-all-abm').addEventListener('click', viewAllAbm);

    // GAS Books
    document.getElementById('view-all-gas').addEventListener('click', viewAllGas);

    // Arts Books
    document.getElementById('view-all-arts').addEventListener('click', viewAllArts);
});
});
        </script>
    </body>

    </html>