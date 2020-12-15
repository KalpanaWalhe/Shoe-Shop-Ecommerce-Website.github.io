<?php

session_start();


$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$address1 = $_POST['address1'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if(!empty($Fname) ||($Lname) ||($mail) || !empty($contact) || !empty($address1) || !empty($password1) || !empty($password2)) {
        $host = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbname = 'register';
       
     
        

        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if(mysqli_connect_error()) {
            die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
           

            $SELECT = "SELECT mail from register Where mail = ? Limit 1";
            $INSERT = "INSERT Into register (Fname ,Lname ,mail, contact, address1, password1, password2) values(? ,? ,?, ?, ?, ?, ?)";
            

            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $mail);
            $stmt->execute();
            $stmt->bind_result($mail);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            

            if($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssisss", $Fname, $Lname, $mail, $contact, $address1, $password1, $password2);
                $stmt->execute();
                echo "alert('New record inserted sucessfully')";
                header('location:Login1.php');
              
                
            } else {
                echo "<script>alert('Someone is already register using this email');</script>";
                header('location:Register.php');
                             
            }
            $stmt->close();
            $conn->close();
        }
} else {
    echo "All field is requierd";
    die();
}
?>