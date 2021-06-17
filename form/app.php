 <?php 
if(isset($_POST['submit'])) {
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

if(!empty($name) && !empty($email) && !empty($message)) {
     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $from = '$email';
         $to = "jodko.regina@gmail.com";
         $vardas = $name;
         $zinute = htmlspecialchars($message);
         //mail($to, $name, $zinute, $from);
         //echo "<script>alert('We will get back soon!');</script>";
     }
    }
include('db.php');
   
}
?>


