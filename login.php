<?php
include_once 'config.php';
function checkUserData($email,$password){
    global $db;
    $selectQuery = "SELECT password FROM user_information WHERE email = '".$email."'";
    $res = $db->query( $selectQuery );
    if ($res->rowcount()>0){
        foreach($res as $row){
            if ($row['password']==$password){
                echo "Welcome: $email<br>";
                echo '<a href="index.html"><button style="background-color:green">Home</button></a>';
            }
            else{
                echo "Your email or password is incorrect<br>";
                echo '<a href="login.html"><button style="background-color:red">Login</button></a>';
            }
        }
    }
    else{
        echo "This email is not found!<br>";
        echo '<a href="login.html"><button style="background-color:red">Login</button></a>';
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) and isset($_POST['password'])) {
        if (!empty($_POST['email']) and !empty($_POST['password'])) {
            $password=md5($_POST['password']);
            checkUserData($_POST['email'],$password);
        }
        else{
            echo "Please fill all fields<br>";
            echo '<a href="login.html"><button style="background-color:red">Login</button></a>';
        }
    }
}
?>