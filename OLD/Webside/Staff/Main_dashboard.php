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
      background-color: azure; 
      border: 1px solid #ccc; 
      padding: 1px 15px; 
      text-align: center;
      display: inline-block; 
      border-radius: 5px; 
    }
    .button:hover {
      background-color: #e0f7fa; /* Slightly darker on hover */
    }

    .navbar {
        display: flex;
        justify-content: center;
        background-color: #4e4d4d;
        padding: 10px;
    }
    .navbar a {
        color: white;
        text-decoration: none;
        padding: 14px 20px;
        text-align: center;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 15px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }   
    
  </style>

</head>
<body>
<div class="header">
  <div class="titleName"><a href="./index.html">  Smile & Sunsine Toy</a></div>

  <div class="right">

    <a href="login.php" class="button">Logout</a>
  </div>
</div>
<div>
    
    <div class="navbar">
      <a href="Main_dashboard.html">Home</a>
      <a href="Product_dashboard.html">Product Dashboard</a>
      <a href="Material_dashboard.html">Material Dashboard</a>
      <a href="Order_dashboard.html">Order Dashboard</a>
      <a href="Report_dashboard.html">Report Dashboard</a>
    </div>
</div>
<div>
  <img src="./img/main.jpg" alt="" class="main-image" style="width: 100%; height: auto; margin-top: 20px;">

</div>


</body>
</html>
