﻿<?php 
class Event extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $eventId ; ######  ไอดีอีเว้น  ######
    var $eventTopic ; ######  หัวข้อ  ######
    var $eventDay ; ######  วัน  ######
    var $eventTime ; ######  เวลา  ######
    var $eventRoom ; ######  ห้อง  ######
	var $stuId;
	var $teaEventId;
	var $comment;
	var $pointId;
	var $star;
	var $teaId ; ######  ลำดับ  #####
	var $e;
	var $s;
	var $id;
	var $teaEventStatus;
	

###### End Attribute  ###### 
    function setTeaEventStatus($teaEventStatus){
        $this->teaEventStatus = $teaEventStatus; 
     }
###### End SET : $eventId ###### 


###### GET : $eventId ######
    function getTeaEventStatus(){
        return $this->teaEventStatus; 
     }

 ###### SET : $eventId ######
    function setEventId($eventId){
        $this->eventId = $eventId; 
     }
###### End SET : $eventId ###### 


###### GET : $eventId ######
    function getEventId(){
        return $this->eventId; 
     }
###### End GET : $eventId ###### 


 ###### SET : $eventTopic ######
    function setEventTopic($eventTopic){
        $this->eventTopic = $eventTopic; 
     }
###### End SET : $eventTopic ###### 


###### GET : $eventTopic ######
    function getEventTopic(){
        return $this->eventTopic; 
     }
###### End GET : $eventTopic ###### 


 ###### SET : $eventDay ######
    function setEventDay($eventDay){
        $this->eventDay = $eventDay; 
     }
###### End SET : $eventDay ###### 


###### GET : $eventDay ######
    function getEventDay(){
        return $this->eventDay; 
     }
###### End GET : $eventDay ###### 


 ###### SET : $eventTime ######
    function setEventTime($eventTime){
        $this->eventTime = $eventTime; 
     }
###### End SET : $eventTime ###### 


###### GET : $eventTime ######
    function getEventTime(){
        return $this->eventTime; 
     }
###### End GET : $eventTime ###### 


 ###### SET : $eventRoom ######
    function setEventRoom($eventRoom){
        $this->eventRoom = $eventRoom; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getEventRoom(){
        return $this->eventRoom; 
     }
###### End GET : $eventRoom ###### 

 ###### SET : $eventRoom ######
    function setStuId($stuId){
        $this->stuId = $stuId; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getStuId(){
        return $this->stuId; 
     }
###### End GET : $eventRoom ###### 

 ###### SET : $eventRoom ######
    function setTeaEventId($teaEventId){
        $this->teaEventId = $teaEventId; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getTeaEventId(){
        return $this->teaEventId; 
     }
###### End GET : $eventRoom ###### 
 ###### SET : $eventRoom ######
    function setComment($comment){
        $this->comment = $comment; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getComment(){
        return $this->comment; 
     }
###### End GET : $eventRoom ###### 
 ###### SET : $eventRoom ######
    function setPointId($pointId){
        $this->pointId = $pointId; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getPointId(){
        return $this->pointId; 
     }
###### End GET : $eventRoom ###### 
 ###### SET : $eventRoom ######
    function setStar($star){
        $this->star = $star; 
     }
###### End SET : $eventRoom ###### 


###### GET : $eventRoom ######
    function getStar(){
        return $this->star; 
     }
###### End GET : $eventRoom ###### 
###### SET : $teaId ######
    function setTeaId($teaId){
        $this->teaId = $teaId; 
     }
###### End SET : $teaId ###### 

###### GET : $eventRoom ######
    function getE(){
        return $this->e; 
     }
###### End GET : $eventRoom ###### 
###### SET : $teaId ######
    function setE($e){
        $this->e = $e; 
     }
###### End SET : $teaId ###### 

###### GET : $eventRoom ######
    function getS(){
        return $this->s; 
     }
###### End GET : $eventRoom ###### 
###### SET : $teaId ######
    function setS($s){
        $this->s = $s; 
     }
###### End SET : $teaId ###### 
###### GET : $eventRoom ######
    function getId(){
        return $this->id; 
     }
###### End GET : $eventRoom ###### 
###### SET : $teaId ######
    function setId($id){
        $this->id = $id; 
     }
###### End SET : $teaId ###### 

    function getTeaId(){
        return $this->teaId; 
     }

	function addEvent(){
		$data = array(
		'eventTopic' => $this->getEventTopic(),
		'eventTime' => $this->getEventTime(),
		'eventRoom' => $this->getEventRoom(),
		'stuId' => $this->getStuId(),
		'teaEventId' => $this->getTeaEventId());
		//นำค่าที่รับมาเทียบกับฟิวว่าตรงกันหรือไม่ ถ้าตรงก็เพิ่มเข้า table event
		$this->db->insert('event',$data);
		
	}
	
	function getByPk(){
		
		$this->db->join('teacher','teacher.teaId = teaevent.teaId');
		$this->db->where('teaEventId',$this->getTeaEventId());
		$data = $this->db->get('teaevent')->result_array();
		return $data;
		//เรียกใช้ table teaevent join table teacher เพื่อนำค่าไปใช้ แต่ค่าต้องมาจาก อาจารย์ที่ที่มีกิจกรรม table teacher
	}
	function showEvent(){
		
		$datalogin = $this->session->userdata('loginData');
		
		$this->db->join('student','student.stuId = event.stuId');
		$this->db->join('match','match.stuId = student.stuId');
		$this->db->join('teacher','teacher.teaId = match.teaId');
		$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
		$this->db->group_by('event.teaEventId');//เอาค่าที่ซ้ำกันไม่แสดง ตามหัวข้อ ในตาราง point
		$this->db->where('teacher.teaId',$datalogin['id']); 
		return $this->db->get('event')->result_array();
	}
	
	function getByPkEvent(){
			
			$this->db->join('student','student.stuId = event.stuId');
			$this->db->join('match','match.stuId = student.stuId');
			$this->db->join('teacher','teacher.teaId = match.teaId');//join เพื่อเรียกใช้ค่าจาก table นั้นๆ
			$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
			$this->db->where('event.eventId ',$this->getEventId()); //โดยยึด eventId เป็นหลัก จาก table event
			$data = $this->db->get('event')->result_array();
			return $data;		
	}
	function getEventAll()
	{
			$datalogin = $this->session->userdata('loginData');
			$this->db->join('student','student.stuId = event.stuId');
			$this->db->join('match','match.stuId = student.stuId');
			$this->db->join('teacher','teacher.teaId = match.teaId');//join เพื่อเรียกใช้ค่าจาก table นั้นๆ
			$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
			
			$this->db->group_by('event.teaEventId');//เอาค่าที่ซ้ำกันไม่แสดง ตามหัวข้อ ในตาราง point
			$this->db->where('teacher.teaId',$datalogin['id']); 
			$this->db->where('teaevent.teaEventStatus',3); //โดยยึด teaEventStatus เป็นหลัก จาก table teaevent
			return $this->db->get('event')->result_array();
	}
	function comment()
	{
			$this->db->join('student','student.stuId = event.stuId');
			$this->db->join('match','match.stuId = student.stuId');
			$this->db->join('teacher','teacher.teaId = match.teaId');
			$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
			$this->db->group_by('event.teaEventId');//เอาค่าที่ซ้ำกันไม่แสดง ตามหัวข้อ ในตาราง point
			$this->db->where('event.eventId ',$this->getEventId());
			$data = $this->db->get('event')->result_array();
			return $data;
	}
	function addComment(){
		$data = array(
		'comment' => $this->getComment(),
		'teaEventId' => $this->getTeaEventId());
		$this->db->insert('point',$data);//เอาค่าที่รับมาจากหน้า Controller events addComment ไปเพิ่มลงใน table point
	}
	function getEventStu()
	{
			$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
			$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		
			return $this->db->get('point')->result_array();
			//ดึงข้อมูลจาก table point , event , teaevent มาใช้งาน
	}
	function showStar()
	{
			$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
			$this->db->join('event','event.teaEventId = teaevent.teaEventId');
			$this->db->where('point.pointId',$this->getPointId());
			return $this->db->get('point')->result_array();
			//ดึงข้อมูลจาก table point , event , teaevent มาใช้งาน แต่กิจกรรมที่ออกมาต้องตรงกับไอดีที่รับมา
	}
	function addStar(){
		
		$data = array(
			'star' => $this->getStar(),
			'stuId' => $this->getStuId($loginData['id']));
			
		$this->db->where('point.teaEventId',$this->getTeaEventId());
		$this->db->update('point',$data);
		//นำค่ามา updata ที่ table point โดยยึด teaEventId เป็นหลัก
	}
	function showReport()
	{
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->order_by('eventTopic','ASC');
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	
	function showAll()//คำนวนหาคะแนนตามหัวข้อ
	{
		$datalogin = $this->session->userdata('loginData');
		$teaId = $datalogin['id'];//เอา id อาจารย์ที่เข้าสู่ระบบ เป็นค่า $teaId
			
		$this->db->select('*, count(point.teaEventId) AS countsum, sum(point.star) AS sumpoints, sum(point.star)/count(point.teaEventId) AS divde');
		//count = นับ table point เฉพาะ teaEventId เดียวกัน ค่าที่ได้ออกมาใช้ชื่อ countsum
		//sum = ผมรวมคะแนน table point ที่นับมา ค่าที่ได้มาชื่อ sumpoints
		//นำค่า sum มาหารกับค่า count ค่าที่ได้ชิ่อ divde
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('teaId',$teaId);//เก็บค่าไว้ที่ teaId นั้นๆ
		$this->db->group_by('event.eventTopic');//เอาค่าที่ซ้ำกันไม่แสดง ตามหัวข้อ ในตาราง point
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	
		function showAllStar()//คำนวนหาคะแนนทั้งหมด
	{
		$datalogin = $this->session->userdata('loginData');
		$teaId = $datalogin['id'];//เอา id อาจารย์ที่เข้าสู่ระบบ เป็นค่า $teaId
		$this->db->select('*, count(point.teaEventId) AS countsum, sum(point.star) AS sumpoints, sum(point.star)/count(point.teaEventId) AS divde');
		//count = นับ table point เฉพาะ teaEventId เดียวกัน ค่าที่ได้ออกมาใช้ชื่อ countsum
		//sum = ผมรวมคะแนน table point ที่นับมา ค่าที่ได้มาชื่อ sumpoints
		//นำค่า sum มาหารกับค่า count ค่าที่ได้ชิ่อ divde
		$this->db->join('teaevent','teaevent.teaEventId = point.teaEventId');
		$this->db->join('event','event.teaEventId = teaevent.teaEventId');
		$this->db->where('teaId',$teaId);//เก็บค่าไว้ที่ teaId นั้นๆ
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	
	function showReportLearning()
	{
		$datalogin = $this->session->userdata('loginData');
		$teaId = $datalogin['id'];//เอา id อาจารย์ที่เข้าสู่ระบบ เป็นค่า $teaId
		$this->db->join('event','event.teaEventId = point.teaEventId');
		$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->where('teaId',$teaId);//ใช้งานเฉพาะ teaId นั้นๆ
		$this->db->where('eventTopic',1);//ใช้งานเฉาะหัวข้อที่มีค่า 1 เท่านั้น 1 = การเรียน
		$this->db->order_by('teaEventDay','ASC');//เรียงจากวันน้อยไปวันมาก
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showReportEvent()
	{
		$datalogin = $this->session->userdata('loginData');
		$teaId = $datalogin['id'];//เอา id อาจารย์ที่เข้าสู่ระบบ เป็นค่า $teaId
		$this->db->join('event','event.teaEventId = point.teaEventId');
		$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->where('teaId',$teaId);//ใช้งานเฉพาะ teaId นั้นๆ
		$this->db->where('eventTopic',2);//ใช้งานเฉาะหัวข้อที่มีค่า 2 เท่านั้น 2 = หัวข้อกิจกรรม
		$this->db->order_by('teaEventDay','ASC');//เรียงจากวันน้อยไปวันมาก
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showReportRecover()
	{
		$datalogin = $this->session->userdata('loginData');
		$teaId = $datalogin['id'];//เอา id อาจารย์ที่เข้าสู่ระบบ เป็นค่า $teaId
		$this->db->join('event','event.teaEventId = point.teaEventId');
		$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->where('teaId',$teaId);//ใช้งานเฉพาะ teaId นั้นๆ
		$this->db->where('eventTopic',3);//ใช้งานเฉาะหัวข้อที่มีค่า 3 เท่านั้น 3 = กยศ.
		$this->db->order_by('teaEventDay','ASC');//เรียงจากวันน้อยไปวันมาก
		$data = $this->db->get('point')->result_array();
		return $data;
	}
	function showReportFamily()
	{
		$datalogin = $this->session->userdata('loginData');
		$teaId = $datalogin['id'];//เอา id อาจารย์ที่เข้าสู่ระบบ เป็นค่า $teaId
		$this->db->join('event','event.teaEventId = point.teaEventId');
		$this->db->join('teaevent','teaevent.teaEventId = event.teaEventId');
		$this->db->join('student','student.stuId = point.stuId');
		$this->db->where('teaId',$teaId);//ใช้งานเฉพาะ teaId นั้นๆ
		$this->db->where('eventTopic',4);//ใช้งานเฉาะหัวข้อที่มีค่า 4 เท่านั้น 4 = ครอบครัว
		$this->db->order_by('teaEventDay','ASC');//เรียงจากวันน้อยไปวันมาก
		$data = $this->db->get('point')->result_array();
		return $data;
	}
		function getPkStatus(){
		
		$data = array(
			'teaEventStatus' => 2);
			
		$this->db->where('teaEventId',$this->getE());	
		$this->db->update('teaevent',$data);
		//update status จาก table teaevent จาก teaEventId เท่านั้น
	}
		
	function updateStatusWait(){
		
		$data = array(
			'teaEventStatus' => 3);
			
		$this->db->where('teaevent.teaEventId',$this->getTeaEventId());//update status จาก table teaevent จาก teaEventId เท่านั้น
		$this->db->update('teaevent',$data);

	}
	function updateStatusWaitPoint(){
	
		$data = array(
			'teaEventStatus' => 5);
			
		$this->db->where('teaevent.teaEventId',$this->getTeaEventId());//update status จาก table teaevent จาก teaEventId เท่านั้น
		$this->db->update('teaevent',$data);

	}
	function updateStatusFinish(){

		$data = array(
			'teaEventStatus' => 6);
			
		$this->db->where('teaevent.teaEventId',$this->getTeaEventId());
		$this->db->update('teaevent',$data);

	}
}
?>