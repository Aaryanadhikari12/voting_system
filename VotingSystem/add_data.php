<?php
include 'db.php';

if(isset($_POST['done'])){
    $vote = $_POST['vote'];
    ?>
<a href="index.php">Return to HomePage</a>
<?php
    $q = "INSERT INTO votes( vote ) VALUES ('$vote')";
    $query = mysqli_query($con, $q);

    if(!$query){
        echo "
        <script> alert('Vote is not counted!'); </script>
        ";
    }
    else{
        echo "
        <script> alert('Vote is counted successfully!'); </script>
        ";
        header('location:index.php');
    }
}


?>