<?php 

include("../../connection.php");

    $name=$_POST['name'];
    $designation=$_POST['designation'];
    
   
    $file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="../../upload/";
    move_uploaded_file($file_loc,$folder.$file);
    

    $sql =  "INSERT INTO team(name,designation,image) VALUES('$name','$designation','$file')";

     if(mysqli_query($conn,$sql)){
        echo '<script language="javascript">';
        echo 'alert("Your content successfully Upload");';
        echo '</script>';
             }
             else
             {       
        echo '<script language="javascript">';
        echo 'alert("Your content Failed To Upload");';
        echo '</script>';
     }

     header("location:all_team.php");
?>