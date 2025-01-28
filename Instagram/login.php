<?php
    $username = $_POST['name'];
    $password = $_POST['username'];

    $conn = new mysqli('localhost','root','','instagram');
    if($conn->connection_error){
        die('connection failed : ',$conn->connection_error );

    }else{
        $stmt = $conn->prepare("insert into registation(username,password)");
        $stmt->bind_param("ss",username,password);
        $stmt->execute();
        echo "log-in successfull";
        $stmt->close();
        $conn->close();
    }

?>