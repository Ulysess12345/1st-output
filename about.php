<?php
require "session_check.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
        }

        .container {
            width: 600px;
            margin: 60px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px #05836e;
            margin-top: 220px;
        }

        h2 {
            text-align: center;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>About Us</h2>

    <p>
        Welcome to our Session Activity System.
    </p>

    <p>
        This page demonstrates PHP sessions, login authentication,
        session checking, and session timeout.
    </p>

    <br>

    <a href="dashboard.php">Back to Dashboard</a>

</div>

</body>
</html>