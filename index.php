<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Countdown Timer -->
    <div id="countdown" class="countdown">
        <h2>Countdown &#x23F2; to:</h2>
        <div id="timer"></div>
    </div>

    <!-- Pop-up Message -->
    <div class="popup">
        <h1>&#127881; &#x1F389; HAPPY BIRTHDAY ROJITA MAM &#127881; &#x1F389;</h1>
        <button id="closePopup">Enter</button>
    </div>
    
    <div class="birth">Happy Birthday !!! <p>You're blessing from God, and I know im grateful for <br>Him from all the blessings you bring into this world.<br> Once again, Happy Birthday!</p></div>
    <div class="best">BEST DAY IN THE &#128511;<br> HISTORY OF HUMANITY :<br><span> 20 AUGUST 2006 </span>	&#128175;<audio controls>
    <source src="songs.ro/HAPPYBD.m4a" type="audio/mp4">
</audio>
</div>
    <div class="cake"><img src="images/cake.jpg" alt="cake"></div>
    <nav class="hidden">
        <ul>
            <li><a href="songs.php">Songs</a></li>
            <li><a href="galleries.php">Galleries</a></li>
            <li><a href="wishes.php">Birthday Wishes</a></li>
        </ul>
    </nav>

    <!-- Confetti Canvas -->
    <canvas id="confetti-canvas"></canvas>

    <script src="scripts.js"></script>
</body>
</html>
