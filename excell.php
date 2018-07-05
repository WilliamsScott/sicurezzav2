<?php
require 'Classes/PHPExcel.php';
$objPHPExcel= new PHPExcel();

$objPHPExcel->getProperties()
        ->setCreator('williams')
        ->setTitle('Excel en php')
        ->setDescription('test')
        ->setKeywords('excel phpexcel php')
        ->setCategory('ejemplos');

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('Hoja');
$objPHPExcel->getActiveSheet()->setCellValue('A1','PHPExcel');
$objPHPExcel->getActiveSheet()->setCellValue('A2',12123);
$objPHPExcel->getActiveSheet()->setCellValue('A3',true);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Excel.xlsx"');
header('Cache-Control: max-age=0');
$objWriter= PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');

?>