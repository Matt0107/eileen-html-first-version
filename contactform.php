<?php
if(isset($_POST['submit'])){
$name = $_POST['submit'];
$number = $_POST['number'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "info@eileenbaum.de";
$headers = "From : ".$mailFrom;
$txt = "Du hast eine Nachricht von".$name.".\n\n.".$message;

mail($mailTo, $number, $txt, $headers);
header("Location : index.php?mailsend");
}
