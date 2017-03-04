<?php session_start(); ?>
<html>
<head>
    <title></title>
    <style type="text/css">
        body {
            text-align: center;
        }
        .box {
            width: 100px;
            height: 100px;
        }
        .green {
            background-color: green;
            color:white;
            width:140px;
            height:80px;
            padding:30px 10px 70px 40px;
            margin-left:550px;
            margin-bottom:5px;
        }
        .p {
            padding-left:10px;
        }
        .red {
            background-color: red;
            color:white;
            width:120px;
            margin-left:550px;
            margin-bottom:5px;
            padding-top:20px;
            padding-left:40px;
        }
    </style>
</head>
<body>
    <div id="container">
    <div>
        <h2>Welcome to the Great Number Game!</h2>
        <h4>I am thinking of a number between 1 and 100</h4>
        <h4>Take a guess!</h4>
    </div>
<?php 
    // if the value of session is too low, tell user
    if(isset($_SESSION['low']))
    {
        echo $_SESSION['low'];
        unset($_SESSION['low']);
    }
    // if the value of session is too high, tell user
    if(isset($_SESSION['high']))
    {
        echo $_SESSION['high'];
        unset($_SESSION['high']);
    }
    // if value entered is not correct, display the form for a user to guess again
    if(!isset($_SESSION['correct']))
    {
?>      
    <div>
        <form action="process.php" method="post">
          <input type="text" name="guess"><br>
          <input type="submit" value="Submit">
        </form>
    </div>
<?php
    }
    // otherwise, display correct box with the option to play again and reset session.
    else
    {
        echo $_SESSION['correct'];
        unset($_SESSION['correct']);
    }
?>  
  </div>
</body>
</html>