<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="stylesheet" href="stylesmp.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="nav-bar">
        <a href="index.php" class="back-button">&#8249; Back</a>
        <h1>Music Player</h1>
    </nav>

    <!-- Playlists Section -->
    <div class="playlists">
        <div class="playlist">
            <h2>Rojita's Playlist</h2>
            <ul>
                <li><button onclick="playSong('songs.ro/I Like You So Much , You\'ll know it.mp3')">I like you so much, you'll know it.</button></li>
                <li><button onclick="playSong('songs.ro/Dandelions.aac')">Dandelions</button></li>
                <li><button onclick="playSong('songs.ro/Helplessly.aac')">Helplessly</button></li>
                <li><button onclick="playSong('songs.ro/Roji-Imagination.mp3')">Roji-Imagination</button></li>
                <li><button onclick="playSong('songs.ro/TMS.aac')">Timi Sangai</button></li>
                <li><button onclick="playSong('songs.ro/Timi Sangai.aac')">Timi sangai</button></li>
            </ul>
        </div>

        <div class="playlist">
            <h2>Rumit's Playlist</h2>
            <ul>
                <li><button onclick="playSong('songs.ru/8 letters.m4a')">8 letters</button></li>
                <li><button onclick="playSong('songs.ru/Anil Emre Daldal - M_rm.wav')">Anil Emre Daldal - M/button></li>
                <li><button onclick="playSong('songs.ru/Anil Emre Daldal - M.mp3')">Anil Emre Daldal - M_rm</button></li>
                <li><button onclick="playSong('songs.ru/Bistarai.m4a')">Bistarai</button></li>
                <li><button onclick="playSong('songs.ru/Dandelions.mp3')">Dandelions</button></li>
                <li><button onclick="playSong('songs.ru/Doraemon_op.m4a')">Doraemon_op</button></li>
                <li><button onclick="playSong('songs.ru/Ek muskan_rm.wav')">Ek muskan</button></li>
                <li><button onclick="playSong('songs.ru/Emptiness.m4a')">Emptiness</button></li>
                <li><button onclick="playSong('songs.ru/Hex.m4a')">Hex</button></li>
                <li><button onclick="playSong('songs.ru/How you do it.m4a')">How you do it</button></li>
                <li><button onclick="playSong('songs.ru/Imagination.m4a')">Imagination</button></li>
                <li><button onclick="playSong('songs.ru/Sure Thing_rm.m4a')">Sure Thing</button></li>
                <li><button onclick="playSong('songs.ru/Teenage Dreams_rm.wav')">Teenage dreams</button></li>
                <li><button onclick="playSong('songs.ru/Timi Sangai.m4a')">Timi Sangai</button></li>
                <li><button onclick="playSong('songs.ru/Voice 005-1.m4a')">Shy</button></li>
            </ul>
        </div>
    </div>

    <!-- Audio Player -->
    <div class="music-player">
        <audio id="audioPlayer" controls>
            Your browser does not support the audio element.
        </audio>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
