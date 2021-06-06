<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pain.css" media="screen" />
    <script src="functions.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="card_stuff/skull.png"/>
    <title>Nightcall</title>
</head>
<body>
<h1>Nightcall</h1>
<div id="loginpage">
    <form action="" method="POST">      
        <ul class="flex-outer">
            <li>
                <label for="username">Username</label>
                <input type="text" name="username">
            </li>
            <br>
            <li>
                <label for="passwo">Password</label>
                <input type="password" name="passwo_log" placeholder="Password" id="ps_log">
            </li>
            <br>
            <li>
                <input  type="checkbox" name="checkpass" onclick="visible_log()">
                <label for="checkpass">Show Password</label>
            </li>
            <br>
            <li>
                <button id="login" type="submit" name="submit">Log in</button>
            </li>
        </ul>
    </form>
    <button id="register" onclick="window.location.href='create.php'">Create an account</button>
    <?php 
    require('db.php');
    session_start();
    if(isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($link,$username);
        $password = stripslashes($_REQUEST['passwo_log']);
        $password = mysqli_real_escape_string($link,$password);
        $query = "SELECT * FROM `game` WHERE username='$username' and password='$password'";
        $result = mysqli_query($link, $query) ;
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: index.php");
        } else{
            echo "<div id='loginpage'>
            <p>Username/password is incorrect.</p>";
        }
    }
    ?>
</div>
</body>
</html>