<?php
  $connect = mysqli_connect('localhost', 'root', 'root', 'schooldb');
  
  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  }