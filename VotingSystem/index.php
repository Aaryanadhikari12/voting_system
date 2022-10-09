<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Voting System</title>
    <style>
        h3{
            padding-left:20px;
            padding-right:20px;
        }
        form{
            width:80%;
            margin-left:10%;
        }
        option:first {
    color: #999;
}
select {
    color: #999;
}
.btn1{
    margin-left:10%;s
}

    </style>
</head>
<body>

   <h1 align="center"><u>Voting System</u></h1> 
   <h3 align="center">Welcome to the voting site. Here you have to select the option in which you want to vote and click on the vote now option.</h3>
   <br>
   <form action="add_data.php" method = "post">
   <select class="form-select" required name = "vote" aria-label="Default select example">
   <option value="">Click here to select the option...</option> 
  <option value="rose">Rose</option>
  <option value="lily">Lily</option>
  <option value="lotus">Lotus</option>
  <option value="marigold">Marigold</option>
</select>
<br>
  <input type="submit" name = "done" class="btn btn-success" value="Vote Now">
   </form>

   <br><br>
   <a type="button" class="btn btn1 btn-danger" href="result.php">Check Votes</a>
</body>
</html>