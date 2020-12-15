<!-- For -->
<?php

session_start();

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$password1 = $_POST['password1'];
$address1 = $_POST['address1'];


if(!empty($Fname) ||empty($Lname) ||empty($mail) || !empty($contact) || !empty($password1)) {
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
           

            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $mail);
            $stmt->execute();
            $stmt->bind_result($mail);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum == 1) {
                $_SESSION["mail"] = $mail;
                $_SESSION["Fname"] = $Fname;
                $_SESSION["Lname"] = $Lname;
                $_SESSION["contact"] = $contact;
                $_SESSION["address1"] = $address1;
                $_SESSION["password1"] = $password1;
                header('location:UserAcc.php');
            } else {
                echo '<script>alert("The Account Does not exist! Please Register")</script>'; 
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