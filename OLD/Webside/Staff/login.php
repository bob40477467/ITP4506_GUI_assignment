<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simle & Sunsine Toy</title>

  <style>
    body{
      margin: 0 ;
    }
    .header{
      overflow: hidden;
      background-color: antiquewhite;
      font-size: 30PX;
      padding: 12px 15px;

    }

    .titleName{
      float: left;
      display: inline;


    }
    .titleName a{
      text-decoration: none;
      color: black;
    }


    .header .right{
      float: right;
      text-decoration: none;


    }
    .header .right a{
      text-decoration: none;
      color: black;

    }
    .button {
      background-color: azure; /* Light blue background */
      border: 1px solid #ccc; /* Adds a subtle border */
      padding: 1px 15px; /* Adds padding for button-like appearance */
      text-align: center;
      display: inline-block; /* Ensures proper button sizing */
      border-radius: 5px; /* Rounds the corners */
      text-decoration: none;
      color: #333;
    }
    .button:hover {
      background-color: #e0f7fa; /* Slightly darker on hover */
  
    }
    .button a{

      color: black;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
    }

    form {
      width: 300px;
      text-emphasis: center;
      margin: 0 auto;
      margin-top: 20px;
      font-size: 18px;
      font-family: Arial, sans-serif;
      
      padding: 20px 35px;
      border: 5px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
   
    .main {
      text-align: center;
      margin-top: 50px;
    
    }
    .main h1 {
      font-size: 2em;
      color: #333;
    }
    .main p {
      font-size: 1.2em;
      color: #666;
    }


  </style>

</head>
<body>
  
<div class="header">
  <div class="titleName"><a href="./index.html">  Simle & Sunsine Toy</a></div>

  <div class="right">
    <a href="/Staff/login.html" class="button">Login</a>
  </div>
</div>

<div class="main">
  <h1>Smile & Sunshine Toy</h1> 
  
    <h1>Staff Login</h1>


    <form action="login.php" method="POST">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login" class="button">
        <input type="reset" value="Reset" class="button">
    
    </form>
 
</div>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here you would typically check the credentials against a database
    // For demonstration purposes, we'll just check against hardcoded values
    if ($username === 'admin' && $password === 'password') {
        // Redirect to the dashboard or another page on successful login
        header("Location: Main_dashboard.php");
        exit();
    } else {
        // Display an error message for invalid credentials
        echo "<p style='color: red; text-align: center;'>Invalid username or password.</p>";
    }
}


?>
</body>
</html>
