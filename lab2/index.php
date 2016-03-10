<?php
    $num = rand(1, 10);
    $posts = array();
    for($i = 0; $i < $num; $i++){
        $posts[] = array('date' => '6/6/6', 'message' => "post$i", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Social Netwrok</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Social Network</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="./">Photos </a></li>
              <li><a href="../navbar-static-top/">Friends</a></li>
              <li><a href="../navbar-fixed-top/">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main body -->
      <div class="row">
          <div class="col-xs-4"> 
              <form>
                  Name: <br>
                  <input type="text" name="name"> <br>
                  <textarea rows="4" cols="10">Enter your post</textarea> <br>
                  <button>Post</button>
              </form>
          </div>
          <div class="col-xs-8">
              Firstname LastName
              <?php 
                echo "<br>$num<br>";
                
                for($i = 0; $i < count($posts); $i++){
                  $image = $posts[$i]['image'];
                  $date = $posts[$i]['date'];
                  $message = $posts[$i]['message'];
                  echo "<div class ='post'>";
                  echo "<img class='photo' src='$image' alt='Griffith University Logo'>";
                  echo "Date:  $date <br>";
                  echo "Message: $message";
                  echo "</div>";
                }
              ?>
              <!--<div class="post"> //old post
                  <img class="photo" src="https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png" alt="Griffith University Logo">
                  Date: 12/12/12 <br>
                  Message: hello1
              </div> -->
          </div>
      </div>

    </div> <!-- /container -->
  </body>
</html>
