<?php
include 'config.php';
if(isset($_POST['banner1']))
{   
     

 $file_name=$_FILES['file']['name'];
 $file_tmp = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
  $file_name = 'banner01.jpg';
 $folder="home/banner/".$file_name;
   

 $new_size = $file_size/10024;  
 $final_file=str_replace(' ','-',$file_name);


 move_uploaded_file($file_tmp,$folder);
 header('location: homepage.php');
    // $title=$_POST['title'];
    // $description=$_POST['description'];
    // $sql="INSERT INTO bannerimg (title,description) VALUES ('$title','$description')";
    
    // $query=mysqli_query($conn,$sql);
    // if(!$query){
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);  
    // } else{
    //     echo "Records inserted successfully.";
    //     // header('location:homepage.php');
    // }
    
}
//____________
if(isset($_POST['banner2']))
{   
     
 
 $file_name=$_FILES['file']['name'];
 $file_tmp = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
$file_name ='banner02.jpg';
 $folder="home/banner/".$file_name;
 
 
 $new_size = $file_size/10024;  

 $final_file=str_replace(' ','-',$file_name);

 move_uploaded_file($file_tmp,$folder);
 header('location: homepage.php');
    // $title=$_POST['title'];
    // $description=$_POST['description'];
    // $sql="INSERT INTO bannerimg (title,description) VALUES ('$title','$description')";
    
    // $query=mysqli_query($conn,$sql);
    // if(!$query){
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);  
    // } else{
    //     echo "Records inserted successfully.";
    //     header('location: homepage.php');
    // }
    
}

//____________
if(isset($_POST['banner3']))
{   
     

 $file_name=$_FILES['file']['name'];
 $file_tmp = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
  $file_name = 'banner03.jpg';
 $folder="home/banner/".$file_name;
 
 
 $new_size = $file_size/10024;  

 
 $final_file=str_replace(' ','-',$file_name);

 move_uploaded_file($file_tmp,$folder);
 header('location: homepage.php');
    // $title=$_POST['title'];
    // $description=$_POST['description'];
    // $sql="INSERT INTO bannerimg (title,description) VALUES ('$title','$description')";
    
    // $query=mysqli_query($conn,$sql);
    // if(!$query){
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);  
    // } else{
    //     echo "Records inserted successfully.";
    //     header('location: homepage.php');
    // }
    
}

?>