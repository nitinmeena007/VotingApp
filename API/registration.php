<?php
 include("link.php");
 include("connect.php");
 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
//  $address=$_POST['address'];
 $email=$_POST['email'];
 $role=$_POST['role'];
  
 if($password==$cpassword)
 {
     //  file name with random number so that similar dont get replaced
  $pname=rand(100,10000)."_".$_FILES["image"]["name"];
  //   temporary file name to store file
  $tname=$_FILES["image"]["tmp_name"];
  //   upload directory path
  $upload_dir="../images";
  //   to move the uploaded file to specific location
  move_uploaded_file($tname,$upload_dir.'/'.$pname);
  $query="INSERT INTO users(name,mobile,password,address,email,photo,role,status,votes) VALUES('$name','$mobile','$password','$address','$email','$pname','$role',0,0)";
  $insert=mysqli_query($connect,$query);
  if($insert)
  {
    echo '<script>
                alert("Registration Successfully");
                window.location="../index.php";
           </script>';
  }
  else
 {
     echo '<script>
                alert("Some error occured");
                window.location="../index.php";
           </script>';
 }

}
 else
 {
     echo '<script>
                alert("Password is wrong");
                window.location="../index.php";
           </script>';
 }
 
?>