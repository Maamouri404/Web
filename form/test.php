<?php

require_once 'vendor/autoload.php';



$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('115.docx');
 



if (!empty($_POST['submit'])) {


    $name = $_POST['last_name']. " ".$_POST['first_name'];
    $templateProcessor->setValue('name', strtoupper($name));

    $birth_date=$_POST['birth_date'];
    $templateProcessor->setValue('birthdate', $birth_date);
  
    $imgg = $_FILES['myimge']['tmp_name'];
    $templateProcessor->setImageValue('IMAGE_PLACEHOLDER', $imgg);

    $profile=$_POST['profile'];
    $templateProcessor->setValue('profile', $profile);

    $work=$_POST['work'];
    $templateProcessor->setValue('work', $work);

    $education=$_POST['education'];
    $templateProcessor->setValue('education', $education);

    $email=$_POST['email'];
    $templateProcessor->setValue('email', $email);

    $linkedin=$_POST['linkedin'];
    $templateProcessor->setValue('linkedin', $linkedin);

    $phone=$_POST['phone'];
    $templateProcessor->setValue('phone', $phone);

     $address = ucfirst($_POST['country']). ", ".ucfirst($_POST['city']);
    
    
    


$templateProcessor->setValue('address', $address);


$templateProcessor->saveAs('result.docx');
$fileurl = './result.docx';
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment; filename=' . $fileurl);
readfile( $fileurl );
unlink($fileurl);
}