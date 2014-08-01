<?php
function getPacks() {
  $con=mysqli_connect("192.95.29.92","atlservers","deQdwTvzbw6AZruR","getatlservers");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM modpack");
  
  while($row = mysqli_fetch_array($result)) {
    echo '<div class="row">';
    echo '<div class="col-md-2"><img src="'.$row['logo'].'"/></div>';
    echo '<div class="col-md-6"><p>'.$row['name'].'</p></div>';
    echo '<div class="col-md-2 col-md-offset-2"><center><a href="'.$row['dl'].'" class="btn btn-primary btn-outline btn-md">download</a></center></div>';
    echo '</div>';
    echo '<hr>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <title>getATLservers</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/scroll.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
      <div class="navbar navbar-inverse " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">getATLservers</a>
          </div>
          <div class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#home">home</a></li>
              <li><a data-scroll href="#about">about</a></li>
              <li class="last"><a data-scroll href="#download">download</a></li>
            </ul>
          </div>
        </div>
         <div id="hello">
          <h1>ATLauncher<br><span>Direct server downloads</span></h1>
            <center><a data-scroll href="#about" class="btn btn-circle page-scroll">
               <i class="fa fa-angle-double-down animated"></i>
            </a></center>
         </div>
         <div id="about">
          <div class="container">
            <p>Once upon a time there was a Minecraft launcher with over 180 adventure filled modpacks for players to enjoy. As awesome as this seems, there was no easy way to download the server files required to run awesome servers for these awesome modpacks... <br><br><span>UNTIL NOW</span><br><br>This is where we come in! We’re the FIRST easy-to-use ATLauncher server download tool allowing server owners and hosts alike to easily download their preferred ATLauncher server through either this site or our easy to use WGET compataible download links.</p>
          </div>
         </div>
         <div id="download">
          <div class="container">
            <h1>Download your server now</h1>
            <?php getPacks(); ?>
          </div>
         </div>
         <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <p>Not Affiliated With ATLauncher</p>
              </div>
              <div class="col-md-4">
                <a href="wget/"><p>wget links</p></a>
              </div>
              <div class="col-md-4">
                <a href="http://witherhost.net" target="_blank"><p>Sponsored by WitherHost</p></a>
              </div>
            </div>
          </div>
         </footer>

    <script>
      smoothScroll.init({
      speed: 1000,
      easing: 'easeInOutCubic',
      updateURL: false
      });
    </script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51660033-2', 'auto');
  ga('send', 'pageview');

</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
