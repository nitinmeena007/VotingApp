<?php
  session_start();
  if(!isset($_SESSION['userdata']))
  {
    //   header("Location:login.php");
  }

  $userdata=$_SESSION['userdata'];
  $groupsdata=$_SESSION['groupdata'];
  if($_SESSION['userdata']['status']==0)
  {
    $status='<b style="color:red">Not Voted</b>';
  }
  else
  {
    $status='<b style="color:green">Voted</b>';
  }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vote</title>
</head>

<style>

    @media screen and (max-height: 640px){
        .data{
            display:flex;
            flex-direction: row;
        }

        .infos img{
            margin-top: 20px;
            margin-bottom: 30px;
        }
        
    }



    body {
        margin: 0px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .navbar1 {
        display: inline;
        list-style: none;
        margin: 0px;
    }


    ul {
        list-style-type: none;
        margin: 0;
        padding: 0px;
        overflow: hidden;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 30px 30px;
        text-decoration: none;
    }

    .btn {
        border: 1px solid black;
        padding: 10px;
        margin-top: 30px;
        width: 100px;
    }

    .data {
        /* padding: 30px; */
        margin: 30px;
        padding: 80px;
        /* box-shadow: 0 0px 0px 0 rgb(0 0 0 / 20%), 0 5px 20px 0 rgb(0 0 0 / 19%); */
        height: auto;
    }

    .back {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;

    }

    .back>button {
        cursor: pointer;
        padding: 10px;
        width: 90px;
    }

    .infos img {
        box-shadow: 0 0px 0px 0 rgb(0 0 0 / 20%), 0 5px 20px 0 rgb(0 0 0 / 19%);
    }



    .sidebar {
        height: 100%;
        width: 0px;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        margin: 0px;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;

    }

    .sidebar a {

        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 15px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    .sidebar>div {
        padding: 30px;
        margin-top: 190px;
    }

    .openbtn {

        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
    }

    .openbtn:hover {
        background-color: #444;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
    }


    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }

    strong {
        color: white;
        margin: 10px;
    }

    .butn {
        border: 1px solid black;
        padding: 10px;
        margin-top: 40px;
        width: 100px;
        cursor: pointer;
    }

    .bun {
        border: 1px solid rgb(0, 0, 0);
        background-color: green;
        color: white;
        /* display: flex; */
        flex-direction: row;
        margin-top: 20px;
        padding: 10px;
        width: 100px;
    }

    .donebtn {
        border: 1px solid rgb(0, 0, 0);
        background-color: green;
        color: white;
        /* display: flex; */
        flex-direction: row;
        margin-top: 20px;
        padding: 10px;
        width: 100px;
    }

    .infos>div {
        margin-bottom: 10px;

    }

    .userimg{
        border-radius: 5px;
        align-items: center;
        height: 150px;
        width: 150px;
        justify-content: center;
    }


</style>


<body>

    <div class="navbar1">
        <ul>
            <li><a style="color:black; font-size: 30px;">Votelt</a></li>
            <li style="float: right">

                <div id="mySidebar" class="sidebar">
                    <div>
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>

                        <div class="center"><img class="userimg" src="images/<?php echo $userdata['photo']; ?>"></div>
                        <br>
                        <div><strong>Name:
                                <?php echo $userdata['name']; ?>
                            </strong></div>
                        <br>
                        <div><strong>Mobile:
                                <?php echo $userdata['mobile']; ?>
                            </strong></div>
                        <br>
                        <div><strong>Address:
                                <?php echo $userdata['address']; ?>
                            </strong></div><br>
                        <div><strong>Email:
                                <?php echo $userdata['email']; ?>
                            </strong></div><br>
                        <div><strong>Status:
                                <?php echo $status; ?>
                            </strong></div><br>
                        <a href="API/logout.php"><button type="submit" class="butn">Log out</button></a>
                    </div>
                </div>


                <div id="main">
                    <button class="openbtn" onclick="openNav()">☰</button>
                </div>
            </li>
        </ul>
    </div>


    <!-- <div class="alert alert-danger" role="alert">
        You can only give vote to only one person. After voted voting button will be disabled. And you will no longer to
        change vote.
    </div> -->



    <div class="data">
        <div id="group">
            <?php
           if($_SESSION['groupdata'])
           {
              for($i=0;$i<count($groupsdata);$i++)
              {
                ?>
            <div class="infos">
                <img style="float:right;" src="images/<?php echo $groupsdata[$i]['photo']; ?>" height="150" width="150">
                <div><b>Group Name -</b></div>
                <?php echo $groupsdata[$i]['name']; ?><br>
                <div><b>Votes -</b></div>
                <?php echo $groupsdata[$i]['votes']; ?><br>
                <form action="API/vote.php" method="post">
                    <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']; ?>">
                    <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']; ?>">
                    <?php
                         if($_SESSION['userdata']['status']==0)
                         {
                         ?>
                    <button class="bun" type="submit" name="votebtn">Vote</button>
                    <?php
                         }
                         else{
                           ?>
                    <button disabled type="button" name="votebtn" value="vote" id="voted" class="donebtn">Voted</button>
                    <?php
                         }
                         ?>
                </form>
            </div>
            <hr>
            <?php
              }
           }
           else 
           {
                     
           }
         ?>
        </div>
    </div>


    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "300px";
            document.getElementById("main").style.marginLeft = "300px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>

</body>

</html>