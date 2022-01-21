<?php
include_once 'config.php';
function ValidateEmail($email){
    $pattern="/^[^@]{1,20}@[^@]{1,20}\.[a-z]{3}$/";
    return preg_match($pattern, $email);
    }
function ValidatePassword($password){
    $pattern="/^[^a-z0-9]{1}.{7,31}$/";
    return preg_match($pattern, $password);
    }
function insertUserData($email, $password){
    global $db;
    $sql = "INSERT INTO user_information(email, password) VALUES (:email, :password)";
    $stmt = $db->prepare($sql);
    $stmt->execute([':email' => $email, ':password' => $password]);
    return $stmt->rowCount();
}
$flag=0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) and isset($_POST['password']) and isset($_POST['email-conf']) and isset($_POST['password-conf'])) {
        if (!empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['email-conf']) and !empty($_POST['password-conf'])) {
            if ($_POST['email']==$_POST['email-conf'] and $_POST['password']==$_POST['password-conf']){
                $ve=ValidateEmail($_POST['email']);
                $vp=ValidatePassword($_POST['password']);
                if ($ve and $vp){
                    $password=md5($_POST['password']);
                    $selectQuery = "SELECT * FROM user_information WHERE email = '".$_POST["email"]."'";
                    $res = $db->query( $selectQuery );
                    if ($res->rowcount()<=0){
                        insertUserData($_POST['email'], $password);
                    }
                    else{
                        echo "This email has already taken<br>";
                        $flag=1;
                    }
                }
                else{
                    $flag=1;
                }
            }
            else{
                $flag=1;
            }
        }
        else{
            $flag=1;
        }
    }
    else{
        $flag=1;
    }
}
else{
    $flag=1;
}
if($flag==1){
    echo "Registration Failed!!!<br>";
    echo '<a href="register.html"><button style="background-color:red">Register</button></a>';
}
else{
    echo "Registration done!<br>";
    echo '<a href="login.html"><button style="background-color:green">Login</button></a>';
    exit;
}
?>