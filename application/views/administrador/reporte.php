<?php

require 'Classes/PHPExcel.php';
require 'application/config/database.php';

$sql="SELECT rut, nombre FROM persona";
$resultado=$mysqli->query($sql);

$fila=2;
$objPHPExcel=new PHPExcel();
$objPHPExcel->getProperties()
        ->setCreator('williams')
        ->setTitle('Excel en php')
        ->setDescription('test')
        ;
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("visitas");

$objPHPExcel->getActiveSheet()->setCellValue('A1','RUT');
$objPHPExcel->getActiveSheet()->setCellValue('B1','NOMBRE');

while ($row=$resultado->fetch_assoc()){
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila,$row['rut']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila,$row['nombre']);
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Visitas.xlsx"');
header('Cache-Control: max-age=0');


$objWriter= new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('php://output');
?>

