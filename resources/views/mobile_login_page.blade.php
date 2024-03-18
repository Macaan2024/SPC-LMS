<!DOCTYPE html>
<html>
<head>
    <title>Mobile Login Page</title>
    <style>
        body {
            background-color: maroon;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        input[type="submit"] {
            background-color: white;
            color: maroon;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="">Select...</option>
                <option value="student">Student</option>
                <option value="faculty">Faculty</option>
                <option value="staff">Staff</option>
            </select>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>

