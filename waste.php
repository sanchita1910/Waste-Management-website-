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
<body style="background-image:url('back11.jpg');background-position: center;
			background-repeat: no-repeat;
			background-size: cover;">

<div class="container-fuild heading" >
<p class="letter">E Waste Vellore</p>
</div>
 <?php
 
 include "nav.php"
 
 ?>
 <div class="container-fluid">
     <div class="row">
<div class="container-fluid col bg_img">

    <center><p class="login_text" style="color:#696969">Choose the waste you want to dispose</p></center>
    <form method="post" action="waste2.php">
    
    <label for="number">Contact No : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
     <input type="hidden" name="a" value="0">
     <input type="hidden" name="b" value="0">
     <input type="hidden" name="c" value="0">
    <input for="number" type="number" name="number"><br> <br>
    
	<input type="checkbox" name="a" value="1">
	<label for="number">Metallic: </label><br>
    
    <input type="checkbox" name="b" value="1">
	<label for="number">Recyclable: </label><br>
    	
    <input type="checkbox" name="c" value="1"> 
	<label for="number">Biodegradable: </label><br>
     <br>
    
   <center><button name="submit" type="submit" class="button_design">Submit</button></center>
</form>
    
</div> 

<div class="container-fluid col message_box">
<h3>DOMESTIC WASTE</h3>
<p>Domestic wastes are those produced by individual activities. In common with other living organisms, humans discharge waste substances to the environment that in turn re-energize the endless cycle of nature. Human activities are closely associated with ambient environment through accumulation of domestic waste. Such household hazardous waste deposit arise from the discharge of domestic activities in the form of municipal solid waste , night soil. Solid waste in the form of kitchen garbage and other household refuse is collected for landfill disposal or for re-industrialization. Many domestic waste influence indoor air quality in urban and rural areas as for example the fuel used for cooking, modern building materials, insulation, fabrics and furniture, cleaning materials, solvents, pesticides,  organic material or vegetable origin and dander from domestic life</p>
<BR><BR>
<center>
 <img src="domestic.jpg" alt="clean India" style=" width:65%; height:35% !important; border-radius:10px"></center>
 
   </div>
   </div>
    </div>       
    <div class="footer">
  <p> Clean India Better India</p>
</div>

</body>    
</html>
