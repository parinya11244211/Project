﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wlecome Student</title>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>js/script.js"></script>
    <script src="<?php echo base_url()?>js/jquery.bxslider.js"></script>
    <script src="<?php echo base_url()?>js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/slideBox.js"></script>
    <link href="<?php echo base_url()?>css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url()?>css/slideBoxy.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
<style>
.myButton {
	-moz-box-shadow: 3px 4px 0px 0px #347327;
	-webkit-box-shadow: 3px 4px 0px 0px #347327;
	box-shadow: 3px 4px 0px 0px #347327;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #59b364), color-stop(1, #459940));
	background:-moz-linear-gradient(top, #59b364 5%, #459940 100%);
	background:-webkit-linear-gradient(top, #59b364 5%, #459940 100%);
	background:-o-linear-gradient(top, #59b364 5%, #459940 100%);
	background:-ms-linear-gradient(top, #59b364 5%, #459940 100%);
	background:linear-gradient(to bottom, #59b364 5%, #459940 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#59b364', 
	endColorstr='#459940',GradientType=0);
	background-color:#59b364;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #298f5e;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:17px;
	font-weight:bold;
	padding:3px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #488a3e;
}

.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #459940), color-stop(1, #59b364));
	background:-moz-linear-gradient(top, #459940 5%, #59b364 100%);
	background:-webkit-linear-gradient(top, #459940 5%, #59b364 100%);
	background:-o-linear-gradient(top, #459940 5%, #59b364 100%);
	background:-ms-linear-gradient(top, #459940 5%, #59b364 100%);
	background:linear-gradient(to bottom, #459940 5%, #59b364 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#459940', 
	endColorstr='#59b364',GradientType=0);
	background-color:#459940;
}

.myButton:active {
	position:relative;
	top:1px;
}

input[type=text]{
	width:200px;
	height:20px;
	background-color:#336600;
	border-radius:5px;
	border:0;
	box-shadow:2px 2px 2px #333333;
	-webkit-transition: all 0.5s; /* Safari 3.1 to 6.0 */
    transition: all 0.5s;
	margin-right:5px;
}

input[type=text]:hover,input[type=text]:focus{
	background-color:#C0E380;
}

.body-side{
	margin-left:-200px;
	margin-right:5%;
}
#logout{
		margin-top:15px;
		margin-left:5px;
	}
</style>

<script>
$(document).ready(function(){				
	imgName = Array(   
	'<?php echo base_url();?>img/ncuview1.jpg',
	'<?php echo base_url();?>img/ncuview2.jpg',
	'<?php echo base_url();?>img/ncuview3.jpg',          
	'<?php echo base_url();?>img/ncuview4.jpg'
	);            
	slideBoxy(imgName,50,399,600,1,'3'); 
	// การเรียกใช้ slideBoxy(  picName  ,  ขนาดลูกศร  ,  ความสูงของรูปทั้งหมด  ,  ความกว้างของรูปทั้งหมด  ,  ขนาดของเฟรม ใส่เป็น เท่า  , วินาทีที่จะเปลี่ยนรูปอัตโนมัติ);
		 });
</script>

</header>
<style type="text/css">
.herderTop{
		height:50px;
		width:100%;
		background-color:#FFF;
		min-width:1100px;
	}
	
body{
		background-image: url(<?php echo base_url();?>img/background.jpg);
		background-attachment: fixed;
		margin-left: 0px;
		margin-top: -13px;
		margin-right: 0px;
		margin-bottom: 0px;
	}
	
#bodyInfo{
		width:80%;
		height:*;
		padding-bottom:30px;
		margin-bottom:30px;
		margin-top:170px;
		margin-left:10%;
		margin-right:10%;
		min-width:1000px;
		background-color:#FFF;
		opacity:0.9;
		border-radius:7px;
	}
	
#herderBody{
		height:120px;
		float:left;
		padding-bottom:10px;
		margin-left:10%;
		margin-right:10%;
		padding-top:10px;
	}
#menu{
		height:100;
		width:*;
	}
#menu ul li{
		float:left;
		list-style:none;
		padding:10px;
		background-color:#CCC;
		margin-left:5px;
	}
#cssmenu{
		margin-top:-70px;
		margin-left:157px;
	}
#wlecome{
		font-size:24px;
		color:#F09;
		padding:10px;
	}
</style>
<?php 
	$date[1] = "จันทร์";
	$date[2] = "อัง‬คาร";
	$date[3] = "พุธ";
	$date[4] = "พฤหัสบดี";
	$date[5] = "ศุกร์";
	
	$status[1] = "สามารถนัดได้";
	$status[2] = "รอการตอบรับ";
	$status[3] = "รอคำแนะนำ";
	$status[4] = "ยกเลิกนัด";
	$status[5] = "รอคะแนน";
	$status[6] = "เสร็จสิ้น";
	
	$color[1] = "tableyellow";
	$color[2] = "tablepink";
	$color[3] = "tablegreen";
	$color[4] = "tableshirts";
	$color[5] = "tableblue";
	
	 ?>

<body>
    <div class="herderTop">
	<div id="innerTop">
         <a href="<?php echo base_url();?>index.php/home/logout"> <input id="logout" name="" type="Button" value="Logout" class="myButton"> </a>
    &nbsp;&nbsp;&nbsp;&nbsp;<?php
	$loginData=$this->session->userdata('loginData');
	echo "ยินดีต้อนรับนักศึกษา&nbsp;&nbsp;&nbsp;";
	 echo $loginData['name']; ?>
	&nbsp;&nbsp;&nbsp;&nbsp;<?php if( $loginData['status']=='s'){
	echo "สถานะ&nbsp;&nbsp;&nbsp;";
		echo 'Student';
		} ?></div>
	</div>
    <div id="herderBody">	
        <img src="<?php echo base_url();?>img/ncuIcon2.png">
    <div id='cssmenu'>
		<ul>
       		<li><a href='<?php echo base_url();?>index.php/students'>หน้าแรก</a></li>
			<li><a href='<?php echo base_url();?>index.php/students/stuinfo'>ข้อมูลส่วนตัว</a></li>
			<li><a href='<?php echo base_url();?>index.php/students/stuinfomatch'>ข้อมูลอาจารย์ที่ปรึกษา</a></li>
			<li><a href='<?php echo base_url();?>index.php/students/stuevent'>ทำรายการการนัดหมาย</a></li>
            <li><a href='<?php echo base_url();?>index.php/events/infostar'>ให้คะแนน</a></li>
		</ul>
	</div>	
    </div>
    
    <div id="bodyInfo">
    <br><br><br>
    <table class="" width="71%" height="63" align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0">
  <tr>
    <th align="center" nowrap="nowrap">ชื่ออาจารย์ที่ปรึกษา</th>
    <th align="center" nowrap="nowrap">นามสกุลอาจารย์ที่ปรึกษา</th>
  </tr>
<?php $i = 1; foreach($teaEventDay as $e){  
  if($i==1){
?>
<!-- $teaEventDay มาจาก Controller students Function stuEvent $i คือให้แสดงค่าที่ซำ้กันออกมาเพียงค่าเดียว -->
    <tr>
    <td align="center"><?php echo $e['teaName'];?></td>
    <td align="center"><?php echo $e['teaLastname'];?></td>
 <?php }$i++; }?>
</table>
<br>
<form method="post" > 
<table class="" width="71%" height="63" align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0">
  <tr>
    <th align="center" nowrap="nowrap">วัน</th>
    <th align="center" nowrap="nowrap">เวลา</th>
    <th align="center" nowrap="nowrap">ห้อง</th>
    <th align="center" nowrap="nowrap">สถานะ</th>
    <th align="center" nowrap="nowrap">เลือกหัวข้อปรึกษา</th>
  </tr>
<?php foreach($teaEventDay as $e){
	if($e['teaEventStatus'] == 1){
	?>
    <tr>
    <td align="center"><?php echo $e['teaEventDay'];?></td>
    <td align="center"><?php echo $e['teaEventTime'];?></td>
    <td align="center"><?php echo $e['teaEventRoom'];?></td>
    <td align="center"><?php echo $status[$e['teaEventStatus']];?></td>
    <td align="center"><a href='<?php echo base_url();?>index.php/events/selecttopic/<?php echo $e['teaEventId'] ?>'>ดูหัวข้อปรึกษา</a></td>
    </tr><?php } }?>
    <!-- เรียกใช้ Controller events Function selecttopic และเก็บค่า teaEventId ไปด้วย -->
</table>
</form>
    </div>
</body>
</html>
