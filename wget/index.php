<?php
function getPacks() {
  $con=mysqli_connect("192.95.29.92","atlservers","deQdwTvzbw6AZruR","getatlservers");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM modpack");
  
  while($row = mysqli_fetch_array($result)) {
    echo '<div class="row">';
    echo '<div class="col-md-6"><p>'.$row['name'].'</p></div>';
    echo '<div class="col-md-6" align="right" style="line-height: 70px;"><code>wget '.$row['wget'].'</code></center></div>';
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
    <link href="../css/bootstrap.css" rel="stylesheet">
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
            <a class="navbar-brand" href="../">getATLservers</a>
          </div>
          <div class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="../">home</a></li>
              <li><a data-scroll href="../index.php#about">about</a></li>
              <li class="last"><a data-scroll href="../index.php#download">download</a></li>
            </ul>
          </div>
        </div>
         <div id="download">
          <div class="container">
            <h1>Download your server via wget now</h1>
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
                <a href="../"><p>download links</p></a>
              </div>
              <div class="col-md-4">
                <a href="http://witherhost.net" target="_blank"><p>Sponsored by WitherHost</p></a>
              </div>
            </div>
          </div>
         </footer>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51660033-2', 'auto');
  ga('send', 'pageview');

</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
