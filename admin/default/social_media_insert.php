<?php
  
  include("../../connection.php");
  ?>
  
  <?php

  if(isset($_POST['submit']))
  {
  extract($_POST);
  $file_name=$_FILES['file']['name'];
  $tmp_name=$_FILES['file']['tmp_name'];
  $location='../../upload/';
  
  $query="insert into social_media(facebook) values('$file_name')";
  mysqli_query($conn,$query);
  
  move_uploaded_file($tmp_name,$location.$file_name);
  echo'<script>
  alert("content has been added successfully");
  </script>';
  header('location:all_social_media.php');
  
  }
 ?>