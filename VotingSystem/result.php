<?php
include 'db.php';
 $q = "SELECT * FROM votes";
 $query = mysqli_query($con, $q);
 $num = mysqli_num_rows($query);

 $q1 = "SELECT * FROM `votes` WHERE vote = 'rose'";
 $query1 = mysqli_query($con, $q1);
$rose = mysqli_num_rows($query1);

$q2 = "SELECT * FROM `votes` WHERE vote = 'lily'";
$query2 = mysqli_query($con, $q2);
$lily = mysqli_num_rows($query2);

$q3 = "SELECT * FROM `votes` WHERE vote = 'lotus'";
$query3 = mysqli_query($con, $q3);
$lotus = mysqli_num_rows($query3);

$q4 = "SELECT * FROM `votes` WHERE vote = 'marigold'";
$query4 = mysqli_query($con, $q4);
$marigold = mysqli_num_rows($query4);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Result of the voting</title>
    <style>
        .main{
            display:flex;
            flex-direction: column;
            margin:10%;
        }
        .main h1{
            border:2px solid red;
            background-color: lightskyblue;
        }
        span{
            color:red;
        }
        #result{
            display:none;
        }
        form{
            width:80%;
            margin-left:10%;
        }
    </style>
</head>
<body>
<br>
<div id="login">
    <h1 align="center"><u>Login Now</u></h1><br>
    <form method="post" >
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" required name="user" class="form-control" id="staticEmail">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" required name="pass" class="form-control" id="inputPassword">
    </div>
  </div>
  <input type="submit"  class="btn btn-primary" name="login"value = "Login">
    </form>
</div>
<div class="result" id="result">
    <h1 align="center"><u>Result of the voting.</u></h1>
<div class="main">
    <div class="rose">
 <h1 align="center"><u>Rose</u></h1>
 <h3>Total Votes: <span><?php echo $rose; ?></span></h3>
 <br><br>
    </div>
    <div class="lily">
 <h1 align="center"><u>Lily</u></h1>
 <h3>Total Votes: <span><?php echo $lily; ?></span></h3>
 <br><br>
 </div>
 <div class="lotus">
 <h1 align="center"><u>Lotus</u></h1>
 <h3>Total Votes: <span><?php echo $lotus; ?></span></h3>
 <br><br>
 </div>
 <div class="marigold">
 <h1 align="center"><u>Marigold</u></h1>
 <h3>Total Votes: <span><?php echo $marigold; ?></span></h3>
 <br><br>
 </div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $cuser = "master";
    $cpass = "result";

    if($user == $cuser && $pass == $cpass){
       echo "
       <script> 
       var show = true;
       console.log(hello);
       </script>
       ";
    }
    else{
        echo "Login failed";
       
    }
}
?>
<script>
if(show === true){
    const main = document.getElementById('result');
    const login = document.getElementById('login');
    main.style.display = "block";
    login.style.display = "none";

}

</script>
