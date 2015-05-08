﻿<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admins extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('Excel/PHPExcel');
 }

	function index()
	{
		$this->load->view('homeadmin');
	}
	function importTea()
	{
		$this->load->view('adminimporttea');
	}
	function importTeacher(){
			
			if($_FILES['exc']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'){
				$inputFileName = $_FILES['exc']['tmp_name'];//เปลี่ยนอยู่ช่อง exc ช่องเดียว
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				
				
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}
				$save='';
				for($i=0;$i<count($namedDataArray);$i++){
					
					$tc = $this->Admin->checkTeaCode($namedDataArray[$i]['teaCode']);
						if(!$tc){
							if($namedDataArray[$i]['teaStatus']=='t'){//เช็คว่าค่าที่เข้ามา teaStatus = t หรือไม่
							$this->Teacher->setTeaUsername($namedDataArray[$i]['teaUsername']);
							//รับค่า teaUsername จากหัวไฟล์นำไป setTeaUsername ที่ Model Teacher
							$this->Teacher->setTeaPassword($namedDataArray[$i]['teaPassword']);
							$this->Teacher->setTeaCode($namedDataArray[$i]['teaCode']);
							$this->Teacher->setTeaName($namedDataArray[$i]['teaName']);
							$this->Teacher->setTeaLastname($namedDataArray[$i]['teaLastname']);
							$this->Teacher->setTeaAddress($namedDataArray[$i]['teaAddress']);
							$this->Teacher->setTeaTel($namedDataArray[$i]['teaTel']);
							$this->Teacher->setTeaEmail($namedDataArray[$i]['teaEmail']);
							$this->Teacher->setTeaStatus($namedDataArray[$i]['teaStatus']);
							$this->Teacher->setTeaBraName($namedDataArray[$i]['teaBraName']);
							$this->Teacher->setTeaFacName($namedDataArray[$i]['teaFacName']);
							$this->Teacher->addTea();
							//เรียกใช่ Model Teacher ใน Function addTea
							}
							
						}
						else {
							$save=$save.', '.$namedDataArray[$i]['teaCode'];
							}
				}
				echo "<script>alert('".$save."');</script>";
				$this->load->view('adminimporttea');
			}else {
				echo "<script>alert('กรุณาใส่ไฟล์ที่ถูกต้อง');</script>";
				$this->load->view('adminimporttea');
				}
	}
	
	function importStu()
	{
		$this->load->view('adminimportstu');
	}
	function importStudent(){
			
			if($_FILES['exc']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'){
				$inputFileName = $_FILES['exc']['tmp_name'];//เปลี่ยนอยู่ช่อง exc ช่องเดียว
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				
				
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}
				$save='';

				for($i=0;$i<count($namedDataArray);$i++){
					
					$tc = $this->Admin->checkStuCode($namedDataArray[$i]['stuCode']);
						if(!$tc){

							if($namedDataArray[$i]['stuStatus']=='s'){//เช็คว่าค่าที่เข้ามา teaStatus = s หรือไม่
							$this->Student->setStuUsername($namedDataArray[$i]['stuUsername']);
							//รับค่า stuUsername จากหัวไฟล์นำไป stuUsername ที่ Model Student
							$this->Student->setStuPassword($namedDataArray[$i]['stuPassword']);
							$this->Student->setStuCode($namedDataArray[$i]['stuCode']);
							$this->Student->setStuName($namedDataArray[$i]['stuName']);
							$this->Student->setStuLastname($namedDataArray[$i]['stuLastname']);
							$this->Student->setStuAddress($namedDataArray[$i]['stuAddress']);
							$this->Student->setStuTel($namedDataArray[$i]['stuTel']);
							$this->Student->setStuEmail($namedDataArray[$i]['stuEmail']);
							$this->Student->setStuStatus($namedDataArray[$i]['stuStatus']);
							$this->Student->setStuBraName($namedDataArray[$i]['stuBraName']);
							$this->Student->setStuFacName($namedDataArray[$i]['stuFacName']);
							$this->Student->addStu();
							//เรียกใช่ Model Student ใน Function addStu
							}
							
						}
						else {
							$save=$save.', '.$namedDataArray[$i]['stuCode'];
							}
				}
				echo "<script>alert('".$save."');</script>";
				$this->load->view('adminimportstu');
			}
			else 
			
			{
				echo "<script>alert('กรุณาใส่ไฟล์ที่ถูกต้อง');</script>";
				$this->load->view('adminimportstu');
			}
	}
	
	function mast()
	{
		$data['teainfo'] = $this->Admin->adminGetTeaInfo();//นำค่าจาก Model Admin Function adminGetTeaInfo มาเก็บไว้ใน $data ชื่อ teainfo
		$this->load->view('adminmast',$data);//ส่งค่าขึ้นหน้า View adminmast
	}
	function mastStu()
	{
		$data['stuinfo'] = $this->Admin->adminGetStuInfo();
		$this->load->view('adminmaststu',$data);
	}
}
?>