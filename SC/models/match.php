﻿<?php 
class Match extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $teaId ; ######  ลำดับ  ######
    var $stuId ; ######  ชื่อเข้าระบบ  ######
    var $matchId ; ######  รหัสเข้าระบบ  ######
###### End Attribute  ###### 

 ###### SET : $teaId ######
    function setTeaId($teaId){
        $this->teaId = $teaId; 
     }
###### End SET : $teaId ###### 


###### GET : $teaId ######
    function getTeaId(){
        return $this->teaId; 
     }
###### End GET : $teaId ###### 


 ###### SET : $teaUsername ######
    function setStuId($stuId){
        $this->stuId = $stuId; 
     }
###### End SET : $teaUsername ###### 


###### GET : $teaUsername ######
    function getStuId(){
        return $this->stuId; 
     }
###### End GET : $teaUsername ###### 


 ###### SET : $teaPassword ######
    function setMatchId($matchId){
        $this->matchId = $matchId; 
     }
###### End SET : $teaPassword ###### 


###### GET : $teaPassword ######
    function getMatchId(){
        return $this->matchId; 
     }
###### End GET : $teaPassword ###### 

	function addMatch(){
		$data = array(
		'teaId' => $this->getTeaId(),//นำค่่า TeaId ไป get ใส่ teaId
		'stuId' => $this->getStuId()//นำค่่า StuId ไป get ใส่ stuId
		);

		$this->db->insert('match',$data);//นำข้อมูลไปเพิ่มใน tabel match
	}
	
}
?>