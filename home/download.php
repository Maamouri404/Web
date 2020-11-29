<?php
$file = 'Resume A4.docx';

header('Content-Description: File Transfer');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');

header('Content-Disposition: attachment; filename=' . $file);
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: private', false);
header('Pragma: public');
header('Content-Length: ' . filesize($file));
ob_clean();
flush();
readfile('/projet_web/home' . $file);
exit();
