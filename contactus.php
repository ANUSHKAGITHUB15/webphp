		
<?php
// session_start();

// if (!isset($_SESSION['uname'])) {
//     header("Location: login.html");
    
// }else{
//     header("Location:contactus.php");
// }
require_once 'db_config.php';

$name = $_POST["name"];
$phoneno = $_POST["phoneno"];
$uemail = $_POST["uemail"];
$message = $_POST["message"];

session_start();

// $_SESSION["uname"]=$uname;










$sql = "INSERT INTO `usersmessage` (`id`, `name`, `phoneno`, `email`, `message`, `replay`) VALUES (NULL, '$name', '$phoneno', '$uemail', '$message', 'Null');";
// if (!isset($_SESSION['uname'])) {
//     header("Location: login.html");}


if (!isset($_SESSION['uname'])) {
    header("Location: login.html");
}else{
if (mysqli_query($conn,$sql)) {
    # code... 
    header("Location: contact.html");
} else {
    # code...
    echo "something went worng";
}
}
mysqli_close($conn);


?>