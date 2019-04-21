<?php session_start(); /* Starts the session */
$_SESSION['login_user']= $usernamee;  // Initializing Session with value of PHP Variable
$_SESSION['login_psw']= $passwordd;
/* Check Login form submitted */
if(isset($_POST['Submit'])){
/* Define username and associated password array */
$logins = array('admin' => '123456','username1' => 'password1','employee' => '112233');

/* Check and assign submitted Username and Password to new variable */



/* Check Username and Password existence in defined array */
if (isset($logins[$Usernamee]) && $logins[$Username1] == $Passwordd){
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['UserData']['Username']=$Username;
header("location:index.php");
exit;
}
else{ header("location:login.php");} 
}
?>