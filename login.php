<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Login</title>
</head>



<body>

<section>
    <div class="container vh-100 vw-100" style="background-image: url('assets/images/sgp.png');">
      <div class="row bg-transparent">
        <div class="col-12 col-sm-7 col-md-6 m-auto bg-transparent">
          <div class="card border-0 shadow bg-transparent" style="margin-top: 200px;">
            <div class="card-body">

              <form method="post">
                <input type="text" name="uEmail" id="" class="form-control my-4 py-2" placeholder="Email"  />
                <input type="password" name="uPass" id="" class="form-control my-4 py-2" placeholder="Password" />
                <p id="warn" class="text-light"></p>
                 
                <div class="text-center mt-3">
                  <input type="submit" name="submit" id="login" value="Sign in" class=" btn btn-warning"></input>
                  <a href="register.html" class="nav-link text-light text-lg-center">Register account</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>

<?php

  if (isset($_POST['submit'])) {

    include 'connection.php';
    $email = $_POST['uEmail'];
   
    //Query statement with placeholder
    $query = "SELECT * FROM user WHERE email = '$email'";

   

    // Execute it
    try {
      $stmt = $link->prepare($query);
      $result = $stmt->execute();
      $stmt->store_result();
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }

    if ($stmt->num_rows == 0) {
      
      echo "<script>document.getElementById('warn').innerText = 'User doesn\'t exist'</script>";
      
    } else {
      include 'class.php';
      include 'session.php';
      $resultu = mysqli_query($link, $query);
      $row = mysqli_fetch_array($resultu);

      if($row['pass'] == $_POST['uPass']){
        
        print_r($row);
        $user = new user();
        
        $user->email = $email;
        $user->name = $row['Name'];
        $user->id = $row['Id'];
        $user->mobile = $row['Mobile'];
        $user->pass = $row['pass'];
        $user->path = $row['path'];
        $user->address = $row['Address'];
        $_SESSION['userName'] = $user->name;
        $_SESSION['userAddress'] = $user->address;
        $_SESSION['userMobile'] = $user->mobile;
        $_SESSION['userEmail'] = $user->email;
        $_SESSION['userPath'] = $user->path;
        print_r($user);
        $_SESSION['log'] = 'on';
        header("Location:index.php");
        

      }else{
        echo "<script>
        
        document.getElementById('warn').innerText = 'Incorrect password'</script>";
      

      }


    }
  }





  ?>



