<?PHP
require_once "../../class/Authentication.php";

$postData = $_POST;
$USER = 1;

$login = (new Authentication())->log_in($postData['username'], $postData['password']);

if($login){
    if($login == "user"){ 
        header('location: ../../index.php?s=home');
    }else{        
        header('location: ../index.php?s=dashboard');
    }
    
}else{
    header('location: ../../index.php?s=login');
}