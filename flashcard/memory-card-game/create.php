<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="functions.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="card_stuff/skull.png" />
    <link rel="stylesheet" type="text/css" href="pain.css" media="screen" />

    <title>Nightcall</title>
</head>

<body>
    <h1>Nightcall</h1>
    <div id="registerpage">
        <form action="create.php" method="POST">
            <ul class="flex-outer">
                <li>
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                </li>
                <br>
                <li>
                    <label for="passwo">Password</label>
                    <input type="password" name="passwo" placeholder="Password" id="ps1" onChange="validate()" required>
                </li>
                <br>
                <li>
                    <label for="passwc">Confirm Password</label>
                    <input type="password" name="passwc" placeholder="Retype Password" id="ps2" onkeyup="validate()" required>
                </li>
                <br>
                <li>
                    <input  type="checkbox" name="checkpass" onclick="visible()">
                    <label for="checkpass">Show Password</label>
                </li>
                <br>
                <li>
                    <button id=register type="submit" name="submit" >Create an account</button>
                </li>
            </ul>
        </form>
        <button id="login" onclick="window.location.href='login.php'">Log in</button> 
    </div>

    <?php
    require('db.php');
    if(isset($_POST['submit']))
    {

        $username = mysqli_real_escape_string($link, $_REQUEST['username']);
        $password = mysqli_real_escape_string($link, $_REQUEST['passwo']);

        $sql = "INSERT INTO game (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($link, $sql)) {
            echo "Records added successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        mysqli_close($link);
    }
    ?>
</body>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</html>