<?php 

if(isset($_GET['to']) && isset($_GET['from'])){

$to = $_GET['to'];
$from = $_GET['from'];
$subject = $_GET['subject'];
$message = $_GET['message'];

 $isDone = mail($to , $subject , $message , $from);

if($isDone){
	echo json_encode('success');
}
else{
	echo json_encode('unsuccess');
}



}


?>