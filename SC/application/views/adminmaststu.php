﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wlecome Admin</title>
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
		 
function confirme(){
	var x = confirm("คุณต้องการลบหรือไม่");
	return x;
}
	

		 
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
#logout{
		margin-top:15px;
		margin-left:5px;
	}
#wlecome{
		font-size:24px;
		color:#F09;
		padding:10px;
	}
</style>

<body>
    <div class="herderTop">
	<div id="innerTop">
         <a href="<?php echo base_url();?>index.php/home/logout"> <input id="logout" name="" type="Button" value="Logout" class="myButton"> </a>
    &nbsp;&nbsp;&nbsp;&nbsp;<?php
	$loginData=$this->session->userdata('loginData');
	 echo "ยินดีต้อนรับคุณ&nbsp;&nbsp;&nbsp;";
	 echo $loginData['name']; ?>
	&nbsp;&nbsp;&nbsp;&nbsp;<?php 
		echo "สถานะ&nbsp;&nbsp;&nbsp;";
	if( $loginData['status']=='a'){
		echo 'Admin';
		} ?></div>
	</div>

    <div id="herderBody">	
        <img src="<?php echo base_url();?>img/ncuIcon2.png">
    <div id='cssmenu'>
		<ul>
       		<li><a href='<?php echo base_url();?>index.php/admins'>หน้าแรก</a></li>
            <!-- เมนูสั่งไป Controller admins -->
			<li><a href='<?php echo base_url();?>index.php/admins/importtea'>นำเข้าข้อมูลอาจารน์ที่ปรึษา</a></li>
            <!-- เมนูสั่งไป Controller admins ใน Function importtea -->
			<li><a href='<?php echo base_url();?>index.php/admins/importstu'>นำเข้าข้อมูลนักศึกษา</a></li>
            <!-- เมนูสั่งไป Controller admins ใน Function importstu -->
			<li><a href='<?php echo base_url();?>index.php/admins/mast'>กำหนดนักศึกษาให้อาจารย์ที่ปรึกษา</a></li>
            <!-- เมนูสั่งไป Controller admins ใน Function mast -->
		</ul>
	</div>	
    </div>
    
<div id="bodyInfo">
    <div id="bodyteainfo">
    <hr>
   <h2 align="center"> อาจารย์ที่เลือก</h2>
   <br>
      <table width="1000" align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center"><strong>รหัสอาจารย์ที่ปรึกษา</strong></td>
            <td align="center"><strong>ชื่ออาจารย์ที่ปรึกษา</strong></td>
            <td align="center"><strong>นามสกุลอาจารย์ที่ปรึกษา</strong></td>
            <td align="center"><strong>เบอร์โทรศัพท์อาจารย์ที่ปรึกษา</strong></td>
            <td align="center"><strong>อีเมล์อาจารย์ที่ปรึกษา</strong></td>
        </tr>
        <?php foreach($teacher as $t){?>
        <!-- ค่า $teacher มาจาก Controller match Function matching แสดงอาจารย์ที่ปรึกษาที่เลือกมาจากหน้า View adminmast -->
        <tr>
          <td align="center"><br><?php echo $t['teaCode']?></td>
    	  <td align="center"><br><?php echo $t['teaName']?></td>
          <td align="center"><br><?php echo $t['teaLastname']?></td>
          <td align="center"><br><?php echo $t['teaTel']?></td>
          <td align="center"><a href="mailto:"><br><?php echo $t['teaEmail']?></td>
        </tr>
        <?php }?>
      </table>
      <br>
      <h2 align="center">นักศึกษาปัจจุบัน</h2><br>
         <table width="60%" height="63" align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" >
  <tr>
    <td align="center"><strong>รหัสนักษา</strong></td>
    <td align="center"><strong>ชื่อนักศึกษา</strong></td>
     <td align="center"><strong>นามสกุลนักศึกษา</strong></td>
     <td align="center"><strong>ยกเลิกการเป็นที่ปรึกษา</strong></td>
  </tr>
  <?php
  
   foreach($student2 as $s){?>
   <!-- ค่า $teacher2 มาจาก Controller match Function matching แสดงนักศึกษาที่ match แล้ว -->
  <tr>
  	<td align="center"><br><?php echo $s['stuCode']?></td>
    <td align="center"><br><?php echo $s['stuName']?></td>
    <td align="center"><br><?php echo $s['stuLastname']?></td>
   <td align="center"><a onClick="return confirme()" href="<?php echo base_url();?>index.php/matchs/delstu/<?php echo $teacher[0]['teaId'];?>/<?php echo $s['matchId']?>">ยกเลิก</a> </td><!-- เมื่อกดปุ่ม ยกเลิก ให้เก็บค่า TeaId และ matchId ไป Controller matchs Function delstu -->
  </tr>
  <?php }?>
</table>
      <br>
      <h2 align="center">เลือกนักศึกษา</h2>
      <br>
      <table width="60%" height="63" align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0" >
  <tr>
    <td align="center"><strong>รหัสนักษา</strong></td>
    <td align="center"><strong>ชื่อนักศึกษา</strong></td>
     <td align="center"><strong>นามสกุลนักศึกษา</strong></td>
     <td align="center"><strong>เลือกนักศึกษา</strong></td>
  </tr>
  <?php foreach($student as $s){?><!-- ค่า $student มาจาก Controller match Function matching แสดงค่านักศึกษาทั้งหมดที่ยังไม่ได้ทำการ Match -->
  <tr>
  	<td align="center"><br><?php echo $s['stuCode']?></td>
    <td align="center"><br><?php echo $s['stuName']?></td>
    <td align="center"><br><?php echo $s['stuLastname']?></td>
   <td align="center"><a href="<?php echo base_url();?>index.php/matchs/matchstutotea/<?php echo $teacher[0]['teaId'];?>/<?php echo $s['stuId']?>">เลือก</a> </td><!-- เมื่อกดปุ่มเลือก เก็บค่า stuId นำไปใช้ใน Controller matchs Function matchstutotea เริ่มเก็บจาก Array ตัวที่ 0 -->
  </tr>
  <?php }?>
</table>
</div>
    </div>
</body>
</html>