<?php include("auth.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <link rel="shortcut icon" type="image/jpg" href="card_stuff/skull.png"/>
    <title>Nightcall</title>
    <script src="game.js"  async></script>
   
</head>

<body>
    <h1 class="title">Welcome <?php echo $login_session; ?></h1>
    <!-- <h2><a href = "logout.php">Log Out</a></h2>  need to modify this -->
    <button id="log_but"  onclick="window.location.href='logout.php'">Log Out</button>
    <div class="overlay-text visible">Start</div>
    <div id="game-over-text" class="overlay-text">
        GAME OVER
        <span class="overlay-text-small">Restart</span>
    </div>
    <div id="victory-text" class="overlay-text">
        VICTORY
        <span class="overlay-text-small">Restart</span>
    </div>
    <div class="game_container">
        <div class="game_info_container">
            <div class="game_info">
                Time <span id="time_remaining">150</span>
            </div>
            <div class="game_info">
                Flips <span id="flips">0</span>
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/ghOST.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/ghOST.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/batt.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/batt.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/bone.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/bone.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/scream.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/scream.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/potion.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/potion.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/monster.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/monster.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/eye.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/eye.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/boom.png">
            </div>
        </div>
        <div class="card">
            <div class="card_back card_face">

                <img class="skull" src="card_stuff/skull.png">
            </div>
            <div class="card_front card_face">
                <img class="soul soul-top-left" src="card_stuff/soul.png">
                <img class="soul soul-top-right" src="card_stuff/soul.png">
                <img class="soul soul-bottom-left" src="card_stuff/soul.png">
                <img class="soul soul-bottom-right" src="card_stuff/soul.png">
                <img class="card_value" src="card_stuff/boom.png">
            </div>
        </div>
    </div>
</body>

</html>