<?php
$firstName =    $_POST['firstName'];
$lastName  =   $_POST['lastName'];
$email =       $_POST['email'];

$error= [
    'firstNameError'=>'',
    'lastNameError'=>'',
    'emailError'=>''
];

if(isset($_POST['submit'])){


if(empty($firstName)){
    $error['firstNameError'] ='FN is empty, Please enter first name';
}if(empty($lastName)){
    $error['lastNameError'] =' Please enter last name';}
    if(empty($email)){
        $error['emailError'] =' Please enter email';
    } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error['emailError'] = ' Please writ the correct email ';} 

        if(!array_filter($error)){
            $firstName =   mysqli_real_escape_string($con,$_POST['firstName']);
            $lastName  =   mysqli_real_escape_string($con, $_POST['lastName']);
              $email =      mysqli_real_escape_string ($con,$_POST['email']);

         $sql = " INSERT INTO users( firstName , lastName ,email) VALUE ('$firstName', '$lastName' , '$email')";

if(mysqli_query($con,$sql )){
    header('Location:' .  $_SERVER['PHP_SELF']);
    }else{
        echo 'error : ' . mysqli_error($con);
        }
}

}


?>