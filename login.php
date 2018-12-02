<?php

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) || !empty($password)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "Violater06!";
    $dbname = "register";
        
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT username From register Where username = ? Limit 1"; 
        $SELECT = "SELECT password From register Where password = ? Limit 1"; 
        //$INSERT = "INSERT Into register (username, password) values (?, ?)";
        
        //prepare statement
        $stmt = $conn-> prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->bind_param("s", $password);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->bind_result($password);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if ($rnum == 0){
            $stmt->close();
            
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $username);
            $stmt->bind_param("s", $password);
            $stmt->execute();
            echo "Invalid username and/or password";
        } else{
            header( 'Location: http://localhost/my-account.html');
        }
        //$stmt->close();
        $conn->close();
    }
    } else {
    echo "All fields are required";
    die();
}

?>
