<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>

</head>

<body>
  <div>
    <div class="topnav">
      <a style="font-size: 40px; font-weight: 500; margin-top: 5px;">VoteIt</a>
      <div id="info">
        <a>
          <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" type="submit">LOG
            IN</button>
        </a>
        <a>
          <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" type="submit">SIGN
            UP</button>
        </a>
      </div>
    </div>


    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Moda l">&times;</span>
      <form class="modal-content animate" action="API/enterlogin.php" method="post" enctype="multipart/form-data"
        id='signupform'>
        <div class="container">
          <strong>Please fill in this form to create an account.</strong>
          <hr>
          <label for="uname"><a>Username</a></label>
          <input type="text" placeholder="Enter Username" name="name" required>
          <!-- <label for="number"><a>Mobile Number</a></label>
          <input type="text" placeholder="Enter Mobile" name="mobile" required>
          <label for="email"><a>Email</a></label>
          <input type="email" placeholder="Enter Email" name="email" required> -->
          <label for="psw"><a>Password</a></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <label>

            <div id="type-1">
              <div>
                <input class="form-check-input" type="radio" name="role" id="adioDefault2" value="2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  <a>Voter</a>
                </label>
              </div>

              <div>
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                  <a>Admin</a>
                </label>
              </div>

            </div>
            <button type="submit" class="btn">Login</button>
            <input type="checkbox" checked="checked" name="remember">
            <a>Remember me</a>
          </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>



    <div id="id02" class="modal1">
      <span onclick="document.getElementById('id02').style.display='none'" class="close1"
        title="Close Modal">&times;</span>
      <form class="modal-content1 animate" action="API/registration.php" method='post' enctype="multipart/form-data"
        id='signupform'>
        <div class="container1">
          <a style="color: #000; font-size: 50px; margin-bottom: 30px;">Sign Up</a>
          <strong>Please fill in this form to create an account.</strong>
          <hr>
          <label for="name"><a>Enter Your Name</a></label>
          <input type="text" name="name" class="form-control" placeholder="Enter Name">
          <label for="mobile"><a>Enter Your Mobile</a></label>
          <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile">
          <label for="psw"><a>Enter a Password</a></label>
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
          <label for="pwd"><a>Confirm Password</a></label>
          <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          <input type="file" name="image" id="inputGroupFile01">

          <!-- <label for="address"><a>Address</a></label>
          <input type="text" name="address" class="form-control" placeholder="Enter Address"> -->
          
          <label for="email"><a>Email</a></label>
          <input type="text" name="email" class="form-control" placeholder="Enter Email">


          <div id="type-1">
            <div>
              <input class="form-check-input" type="radio" name="role" id="adioDefault2" value="2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                <a>Voter</a>
              </label>
            </div>

            <div>
              <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="1">
              <label class="form-check-label" for="flexRadioDefault1">
                <a>Admin</a>
              </label>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"><a>Remember me
            </a></label>


          <div class="clearfix1">
            <button type="submit" class="signupbutton"><a>Sign Up</a></button>
            <button type="button" onclick="document.getElementById('id02').style.display='none'"
              class="cancelbutton"><a>Cancel</a></button>

          </div>
        </div>
      </form>
    </div>

  </div>
  </div>



  <div class="gridcontent">
    <div class="details">
      <h1>VoteIt - Web Application</h1>
      <a>Public opinion is necessary. Through this web application, voting is easy and just a click away ! Easy to
        usse GUI and safe and secure login will keep your vote confidential and voting will become convenient.</a>
    </div>

    <div>
      <img src="vote image.png" alt="no_image">
    </div>
  </div>


  <script>

    var modal = document.getElementById('id01');
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }


    var modal = document.getElementById('id02');
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

  </script>



</body>

</html>