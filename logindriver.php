<html>
<head>
<!--<link rel="Stylesheet" type="text/css" href="homemain.css" >-->
<style> 
body {
	background-image:url('complaint.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;position: relative;
	 position: relative;
	 background-blend-mode:lighten;
	 font:"MS Serif", "New York", serif;
	 margin:0px;
   
	 
}
        .bg_img{
            color: white;
            box-sizing: border-box;
            background-color:rgba(0,0,0,0.5);
            border-radius: 20px;
            max-width: 300px;
            height:50%;
            padding: 20px;
            border: none;
            outline: none;
			float: right;
			margin-right:20%;
			
        }
        
        .message_box{
            color: white;
            box-sizing: border-box;
            background-color:rgba(0,0,0,0.5);
            border-radius: 20px;
            max-width: 500px;
			height:100%;
            
            padding: 20px;
            border: none;
            outline: none;
			float: left;
			margin-left:100px;
        }
		.topnav {
  overflow: hidden;
  background-color: #696969;
}

.topnav a {
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

.topnav a:hover {
  background-color:rgba(0,0,0,0.5);
  color:white ;
}

.topnav a.active {
  background-color:rgba(0,0,0,0.5);
  color: white;
}
        input[type=text], input[type=password],select[id="who_are_you"],input[type="number"],input[type="date"]
        {
            background-color: antiquewhite;
            border-radius: 10px;
            outline: none;
            background-color: #f1f1f1;
            border: none;
            width: calc(100%);
            text-align: center;
        }
        .button_design{
            background-color:#90EE90;
            color: #696969;
            border: none;
            cursor: pointer;
            opacity: 0.9;
            outline: none !important;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: none;
            outline: none;
            width: 70px;
			padding:1%;
			font-size:16px;
        }
        .button_design:hover{
            background-color: black;
			color:white;
        }
        .button_design_sign_up{
            background-color:#90EE90;
            color: white;
            border: none;
            cursor: pointer;
            opacity: 0.9;s
            outline: none !important;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: none;
            outline: none;
            width: 70px;
        }
        input[type=text]:focus, input[type=password]:focus,select[id="who_are_you"]:focus{
            background-color: #ddd;
            outline: none;
        }
        .login_text{
            color: white;
            background-color:#90EE90;
            border-radius: 10px;
			padding:5px;
			font-size:18px;
			font:"MS Serif", "New York", serif;

        }
		.heading{
			background-color:#90EE90;
			color: #696969;
			width:100%;
			/*height:70px;*/
			/*margin-top:-15px;
			margin-left:10px;
			margin-right:10px;*/
			padding-top:5px;
			font:"MS Serif", "New York", serif;
			font-size:xx-large;
			text-align:center;
		
			
		}
		.gandhi_photo{
			
			float:left;
			
			
		}
		.letter{
			text-align:center;
			postion:relative;
			top:-20px;
		}
		.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:rgba(0,0,0,0.5);
  color:white;
  text-align: center;
}
.container-fluid{
    margin-top:10px;
}


</style>
</head>
<body style="">

<!---<div class="container-fuild heading" >
<p class="letter">E Waste Vellore</p>
</div> -->
 <?php
 
 include "nav.php"
 
 ?>
 <div class="container-fluid">
     <div class="row">
<div class="container-fluid col bg_img" style="margin-top:5%;" >
<center><p class="login_text">Driver login</p></center>
<form method="post" action="login.inc.php">
    <label for="username">Mobile no. : </label>
    <input id="username" type="number" name="number">
    <label for="pass">Password : </label>
    <input for="pass" type="password" name="password">
    
   <center><button name="submit" type="submit" class="button_design">Login</button></center>
</form>
    
</div> 

<div class="container-fluid col message_box">
<h3><strong>DUTIES OF TRUCK DRIVERS</strong></h3>
<p>Garbage Truck Drivers are responsible for operating the truck that collects and disposes garbage.
:Their duties include emptying dumpsters<BR> :Storing trucks and equipment safely <BR>:Maintaining pick-up records <BR> :Performing truck cleaning <BR> :Reporting repair requirements<BR> :Identifying malfunctions<BR>:Following a scheduled route.</p>
<BR><BR>
<center>
 <img src="truckdrive.jpg" alt="clean India" style=" width:65%; height:35% !important; border-radius:10px"></center>
 
   </div>
   </div>
    </div>       
    <div class="footer">
  <p> Clean India Better India</p>
</div>

</body>    
</html>
