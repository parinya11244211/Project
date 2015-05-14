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
		 
$(document).ready(function(){				
	$('#eventTopicEtc').hide();
	
	$('#eventTopic').change(function(){
		if ($(this).val()=="5")
		{
	$('#eventTopicEtc').show();
		} else {
		$('#eventTopicEtc').hide();
		}
	});
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
#wlecome{
		font-size:24px;
		color:#F09;
		padding:10px;
	}
</style>
<?php 

	$time[1] = "8.00 น.";
	$time[2] = "9.00 น.";
	$time[3] = "10.00 น.";
	$time[4] = "11.00 น.";
	$time[5] = "12.00 น.";
	$time[6] = "13.00 น.";
	$time[7] = "14.00 น.";
	$time[8] = "15.00 น.";
	$time[9] = "16.00 น.";
	
	$timeEnd[1] = "9.00 น.";
	$timeEnd[2] = "10.00 น.";
	$timeEnd[3] = "11.00 น.";
	$timeEnd[4] = "12.00 น.";
	$timeEnd[5] = "13.00 น.";
	$timeEnd[6] = "14.00 น.";
	$timeEnd[7] = "15.00 น.";
	$timeEnd[8] = "16.00 น.";
	$timeEnd[9] = "17.00 น.";

	$date[1] = "จันทร์";
	$date[2] = "อัง‬คาร";
	$date[3] = "พุธ";
	$date[4] = "พฤหัสบดี";
	$date[5] = "ศุกร์";
	
	$color[1] = "tableyellow";
	$color[2] = "tablepink";
	$color[3] = "tablegreen";
	$color[4] = "tableshirts";
	$color[5] = "tableblue";
	
	$topic[1] = "การเรียน";
	$topic[2] = "กิจกรรม";
	$topic[3] = "กยศ";
	$topic[4] = "ครอบครัว";
	$topic[5] = "อื่นๆ";
	
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
            <li><a href='<?php echo base_url();?>index.php/students/showeventwith'>รายการนัดหมายที่มีอยู่</a></li>
            <li><a href='<?php echo base_url();?>index.php/events/infostar'>ให้คะแนน</a></li>
		</ul>
	</div>	
    </div>
    
    <div id="bodyInfo">
<br><br><br>
      <?php foreach($showevent as $e){
		  if($e['teaEventStatus'] == 1){
		  ?>
     <!-- $showevent ได้มาจาก Controller events Function selectTopic แต่กิจกรรมต้องมี status 1 เท่านั้น 1 = สามารถนัดได้ -->
     <form method="post" action="<?php echo base_url();?>index.php/events/updatestatus/<?php echo $e['teaEventId']; ?>" >
     <!-- เก็บค่า teaEventId ไปใช้ใน Controller events Function updatestatus -->
      <table width="50%" height="70" align="center" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0">
		<tr>
        	<td>&nbsp;&nbsp;&nbsp;อาจารย์ที่ปรึกษา</td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $e['teaName'];?>&nbsp;&nbsp;&nbsp;<?php echo $e['teaLastname'];?></td>
        </tr>
        <tr>
        	<td>&nbsp;&nbsp;&nbsp;เลือกหัวข้อ</td>
            <td>&nbsp;
    <select name="eventTopic" id="eventTopic">
		<option value="1" >การเรียน</option>
		<option value="2" >กิจกรรม</option>
		<option value="3" >กยศ.</option>
		<option value="4" >ครอบครัว</option>
        <option value="5" >อื่นๆ</option>
	</select> <br> 
      <input type="text" value="" name="eventTopicEtc" id="eventTopicEtc" />
     </td>
        </tr>
        <tr>
        	<td>&nbsp;&nbsp;&nbsp;วัน</td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $e['teaEventDay'];?></td>
        </tr>
        <tr>
        	<td>&nbsp;&nbsp;&nbsp;เวลาเริ่ม</td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $time[$e['teaEventTime']];?></td>
        </tr>
        <tr>
        	<td>&nbsp;&nbsp;&nbsp;เวลาสิ้นสุด</td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $timeEnd[$e['teaEventTimeEnd']];?></td>
        </tr>
        <tr>
        	<td>&nbsp;&nbsp;&nbsp;ห้อง</td>
            <td>&nbsp;&nbsp;&nbsp;<?php echo $e['teaEventRoom'];?></td>
        </tr>
          <tr>
        	<td>&nbsp;&nbsp;&nbsp;ปรึกษา</td>
            <td align="left">&nbsp;&nbsp;&nbsp;<input type="submit" value="บันทึก" onClick="return confirme()">
    <input name="teaEventDay" type="hidden" value="<?php echo $e['teaEventDay'];?>">
    <input name="teaEventTime" type="hidden" value="<?php echo $e['teaEventTime'];?>">
    <input name="teaEventTimeEnd" type="hidden" value="<?php echo $e['teaEventTimeEnd'];?>">
    <input name="teaEventRoom" type="hidden" value="<?php echo $e['teaEventRoom'];?>">
    <input name="teaEventId" type="hidden" value="<?php echo $e['teaEventId'];?>"></td>
        </tr><?php } }?>
       </table>
         </form>
    </div>
</body>
</html>