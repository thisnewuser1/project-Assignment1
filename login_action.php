<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "test");
    if (!$conn)
        die("No Connect : ".mysqli_connect_error());

    $user = $_POST['user_id'];
    $pass = $_POST['pass'];

    $query = mysqli_query($conn,"select * from tbl_images where Email = '".$user."' and Password = '".$pass."'");
    $nr = mysqli_num_rows($query);
    if ($nr == 1){
        $row=mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['Name'];
        $_SESSION['img']=$row['Image'];
        $_SESSION['email'] = $user;
        header('location:index.php');
    }
    else{
        echo "<h1>Login Failed</h1>";
        header('locatoin:error.html');
    }
?>