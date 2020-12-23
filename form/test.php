<?php

require_once 'vendor/autoload.php';



$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('115.docx');
 
$templateProcessor->setValue('name', 'taher maamouri');
$templateProcessor->setImageValue('IMAGE_PLACEHOLDER', 'Image1.jpg');


 
$templateProcessor->saveAs('MyWordFile.docx');