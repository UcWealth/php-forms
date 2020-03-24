<?php 

if($_POST && isset($_POST['submit'], $_POST['name'], $_POST['email'], $_POST['message'],$_POST['department'], $_POST['gender'], $_POST['terms'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $terms = $_POST['terms'];
    $content = "Name: " .$name. "," . "\r\n" ."Email: ".$email. ",\r\n"."Message: " .$message. ",\r\n" ."Department: " .$department. ",\r\n"."Gender: " .$gender. ",\r\n"."Terms: " .$terms. "\r\n"."\r\n" ;

    $fileName = $name.".txt";
    $storageFile = fopen($fileName, "a+");
    fwrite($storageFile, $content);
    fclose($storageFile);
    
    echo '<h3>Form Submitted Successfully!</h3>';

}

