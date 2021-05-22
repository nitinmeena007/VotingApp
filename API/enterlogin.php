<?php
    session_start();
    include("connect.php");
    $name=$_POST['name'];
    // $mobile=$_POST['mobile'];
    // $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    // $query="SELECT * FROM users WHERE name='$name' AND mobile='$mobile' AND email='$email' AND password='$password' AND role='$role'";
        $query="SELECT * FROM users WHERE name='$name' AND password='$password' AND role='$role'";

    $check=mysqli_query($connect,$query);
    if(mysqli_num_rows($check)>0)
     {
         $userdata=mysqli_fetch_array($check);
         $group=mysqli_query($connect,"SELECT * FROM users WHERE role=1");
         $groupdata=mysqli_fetch_all($group,MYSQLI_ASSOC);
         $_SESSION['userdata']=$userdata;
         $_SESSION['groupdata']=$groupdata;
         echo '<script>
                  alert("Login Successfuly");
                  window.location="../dashboard.php";
              </script>';
     }
    else
    {
        echo '<script>
                  alert("Invalid Credentials");
                  window.location="../index.php";
              </script>';
    }
?>