<?php
require_once ('Classes/PHPExcel.php');
$filename="Lista de vistas";
$table=$_GET["data"];
$tmpfile=  tmpfile(sys_get_temp_dir().html);
file_put_contents($tmpfile,$table);

$objPHPExcel = new PHPExcel();
$excelHTMLReader=  PHPExcel_IOFactory::createReader('HTML');
$excelHTMLReader->loadIntoExisting($tmpfile,$objPHPExcel);
$objPHPExcel->getActiveSheet()->setTitle('Visitas');
unlink($tmpfile);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename='.$filename.'xlsx');
header('Cache-control: max-age=0');

$writer = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$writer ->save('php://output');
exit;
?> 
