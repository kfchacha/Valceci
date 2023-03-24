<?php 
$username = $_POST['username'];
$password= $_POST['pass'];

//db connection
$user='root';
$pass='';
$dbase='valceci';
$db = mysqli_connect('localhost', $user,$pass, $dbase);


if($db-> connect_error){
    die("Failed to connect: ".$con->connect_error);
}else{
    $stmt=$db->prepare("select * from users where Username = ?");
    $stmt-> bind_param("s",$username);
    $stmt->execute();
    $stmt_result= $stmt->get_result();
    if($stmt_result-> num_rows>0){
        $data=$stmt_result->fetch_assoc();
        if($data['Password']=== $password){
            echo "<script> alert('You are now logged in') </script>";
            header('location: home.php');
        }else{
            echo "<script> alert('Invalid username or password') </script>";
            echo "<h1>invalid username or pass</h1>";
            header('location: login.php');
        }
    }else{
        echo "<script>alert('Invalid username or password')</script>";
        echo "<h1>invalid username or pass</h1>";
        header('location: login.php');
    }
}










?>
