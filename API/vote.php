<?php
  session_start();
  include("connect.php");
  $votes=$_POST['gvotes'];
  $total_votes=$votes+1;
  $gid=$_POST['gid'];
  $uid=$_SESSION['userdata']['id'];
  $update_vote=mysqli_query($connect,"UPDATE users SET votes='$total_votes' WHERE id='$gid'");
  $update_user_status=mysqli_query($connect,"UPDATE users SET status=1 WHERE id='$uid'");
  if($update_vote AND $update_user_status)
  {
      $groups=mysqli_query($connect,"SELECT id,name,votes,photo FROM users WHERE role=2");
      $group=mysqli_query($connect,"SELECT * FROM users WHERE role=1");
      $groupdata=mysqli_fetch_all($group,MYSQLI_ASSOC);
      $_SESSION['userdata']['status']=1;
         $_SESSION['groupdata']=$groupdata;
         echo '<script>
                alert("Voting Successfully");
                window.location="../dashboard.php";
            </script>';
        }
  else
  {
      echo '<script>
                alert("Some error occured");
                window.location="../dashboard.php";
            </script>';
  }
?>