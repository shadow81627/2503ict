@extends('layouts.master')

@section('post')
<?php
    //randomly generates a number between 1 and 10
    $num = rand(1, 10);
    //the array containg all the of the data for the post
    $posts = array(
        array('date' => '10/6/3', 'message' => "post 1", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '1/6/5', 'message' => "post 2", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '2/6/4', 'message' => "post 3", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '3/6/6', 'message' => "post 4", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '4/6/11', 'message' => "post 5", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '5/6/6', 'message' => "post 6", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '6/6/7', 'message' => "post 7", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '7/6/2', 'message' => "post 8", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '8/6/9', 'message' => "post 9", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
        array('date' => '9/6/12', 'message' => "post 10", 'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png'),
    );
?>
<?php 
echo "<br>$num<br>";

for($i = 0; $i < $num; $i++){
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
@stop

@section('content')
        <a href="index.php">PAGE1</a>
@stop
