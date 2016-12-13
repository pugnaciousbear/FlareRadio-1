<!DOCTYPE html>
<html>
    <head>
        <link href="assets/style.css" rel="stylesheet">
        <title>FlareRadio</title>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
            function setVolume() {
                document.getElementById("radioplayer").volume
                = document.getElementById('volume').value;
            }
        </script>
    </head>
    <body>
        <img src="assets/logo.png" alt="Logo" width="409" height="76">
                <ul>
            <li class="border"><a href="default.asp">Instagram</a></li>
            <li class="border"><a href="http://twitter.com/FlareRadio">Twitter</a></li>
            <li class="border"><a href="http://flarefm.cu.cc/forum">Forums</a></li>
            <li><a href="http://flarefm.cu.cc/">Home</a></li>
        </ul>
        <div class="container1">
            <div class="song container">
                <h1 class="song" id="songinfo">N/A</h1>
                <br>
                <h1 class="song">Presenter: </h1>
                <h1 class="song" id="presenterinfo">AutoDJ</h1>
                <br>
                <br>
                <audio id="radioplayer" src="http://flarefm.cu.cc:8000/stream" autoplay></audio><input id="volume" name="volume" min="0" max="1" step="0.01" type="range" onchange="setVolume()"/>
            </div>
        </div>
                <script>
         $(function() 
         {
            getTrackName();
            setInterval(getTrackName,16000);
         });
         function getTrackName() 
         {
            $.ajax(
            {
               url: "http://lukehallett.space/song.php"
            }).done(function(data) 
            {
               $("#songinfo").text( data );
            });
         }
      </script>
        <script>
         $(function() 
         {
            getPresenterName();
            setInterval(getPresenterName,16000);
         });
         function getPresenterName() 
         {
            $.ajax(
            {
               url: "http://lukehallett.space/presenter.php"
            }).done(function(data) 
            {
               $("#presenterinfo").text( data );
            });
         }
      </script>
    </body>
    <footer>
        <h2>&copy; FlareRadio 2016 - All Rights Reserved</h2>
    </footer>
</html>
