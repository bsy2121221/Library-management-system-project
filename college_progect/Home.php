<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CBGS Library </title>
    <link rel="icon" href="favicon.ico">
    
     <link href="style2.css" type="text/css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <style>
       #clock{
    float:right;
    color:white;
    font-size:250%;
    position:sticky;
    
    }
    
    
.login{
    
    margin-top: :10%;
    padding-top: 20%;
}

    #login{

    margin-top: :10%;
    padding-top: 13%;
}
#Image{
      float: right;
      width: 35%;
        
            
        }
#Registration
        {   margin-top: 0px;
            padding-left: 14%;
            padding-top: 0px;
        }
#Search
{  
    padding-top: 20%;
    padding-left: 30%;
    width: 30%;
    height: 20%;
   
}
#For{
    font-size: 40px;
    font-weight: bold;
    margin-top: 0px;
  
}
        #re{
            font-size: 40px;
    font-weight: bold;
    margin: 0px;
            
    padding-left: 33%;
        }
    h2{
    font-size: 80px;
    font-weight: 700;
   
        padding-left: 35%;
        margin: 0px;
      
}
        @font-face{
            font-family:font1;
            src:Url(font/Zengo Demo.ttf)
        }
       
        #dep{
            padding: 20px;
        }
        #dev{
            height: 40%;
            width: 24%;
            border-radius: 50%;
            padding:4%;
            display: inline-block;
         
        }
        #dev:hover{
            height: 50%;
            width: 30%;
            border-radius: 50%;
            padding: 0px;
            border: none;
            animation-delay:1s;
        }
        #lo{
            display: inline;
            margin: 0px;
            padding: 0px;
        }
        p a{
            float: right;
            margin: 0px;
            font-size: 100px;
            position: absolute;
            text-decoration: none;
            color: white;
        }
        h5{
            margin-top:100px;
           float: right;
            position: relative;
            margin-right: 47%;;
            text-decoration: none;
            color: white;
                
        }
        a{
            text-decoration: none;
            color: white;
            
        }
        
        
        
        </style>
    </head>
    <body>   
        
        <div class="headr">   <a href="http://localhost/Home.php" ><img src="llogo.gif" alt="logo" width="150px" height="150px" id="lo"></a>
            <p style="display:inline;"> <a href="http://localhost/Home.php" ><strong>CBGS Library</strong></a></p>
            <h5 style="display:inline;"> <a href="http://localhost/Home.php" >MMMUT Campus, Gorakhpur &#40;UP&#41; </a><br>
            <?php $dt = new DateTime();
            echo $dt->format('d-m-Y');
            ?></h5>
            <ul>
                <li ><a href="http://localhost/Home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i>About</a>
                   <ul>     
                            <li><a href="#box6">Mission &amp; Vision</a></li>
                            <li><a href="#about">Our Team</a></li>
                            <li><a href="resource.php">Resources</a></li>
                            <li><a href="address.html">Library Address</a></li>
                    
                    </ul> </li>
                <li><a href="#">Things to do <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                    <ul>
                            <li><a href="ftp://172.16.1.76/">NPTEL Lect. <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> Books <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Magzine <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> NewsPaper <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Events <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                    </ul>
                
                
                
                </li>
                <li><a href="#">Contact</a>
                    <ul>
                        <li><a href="https://goo.gl/maps/KvaCPTJMp2y" target="blank">Map</a></li>
                        <li><a href="Directories.html">Directories</a></li>
                    
                    </ul>
                
                </li>
                <li><a href="http://www.epapergallery.com/index.htm">News</a></li>
                <li><a href="#box2"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
SignUp</a></li>
            </ul>
           </div>
        
            <div id="box1">
            
                         <?php
date_default_timezone_set('UTC');
?>

<script>
		//Digital clock
	var d = new Date(<?php echo time() * 1000 ?>);
	function digitalClock() {
		  d.setTime(d.getTime() + 1000);
		  var hrs = d.getHours();
		  var mins = d.getMinutes();
		  var secs = d.getSeconds();
		  mins = (mins < 10 ? "0" : "") + mins;
		  secs = (secs < 10 ? "0" : "") + secs;
		  var apm = (hrs < 12) ? "am" : "pm";
		  hrs = (hrs > 12) ? hrs - 12 : hrs;
		  hrs = (hrs == 0) ? 12 : hrs;
		  var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
		  document.getElementById("clock").firstChild.nodeValue = ctime;
	}
	window.onload = function() {
		  digitalClock();
		  setInterval('digitalClock()', 1000);
	}
	//Validation function
	function Validate(){
	    if((document.getElementsByName("login")= "admin" )&& (document.getElementsByName("pass") = "12345"))
	    {
		alert("You have successfully logged in")
	    }
	    else{
		alert("The system could not log you on. Make sure your password is correct")
	    }
	}
	//Reset AdminLogin
	function adminReset() {
    document.getElementById("admin").reset();
	}
	//Reset Student Login
	function studentReset() {
    document.getElementById("stLogin").reset();
	}
	//Reset Registration Form
	function formReset() {
    document.getElementById("RegForm").reset();
	}
	
	
	// for smooth scrolling effect on clicking link
	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1500);
            return false;
        }
    }
});
</script>

<div id="clock"> </div>
            <center>
                <div class="login">
            <fieldset style="background-image:Url(login1.jpg); width:30%; height:auto;"> 
                    <legend>Admin Login</legend>
                       <form id="admin" method="post">
                            <h4>Username : </h4>
                                    <input name="login" type="text" placeholder="Enter Your Username" ><br><br><br>
                            
                            <h4>Password : </h4>
                                    <input name="pass" type="password" placeholder="Enter Your Password"><br><br><br>
                                
                                <input value="Login" type="submit" id="sub" onSubmit="Validate();"/>

                                <input value="Reset" type="button" id="res" onclick="adminReset()" >
                    </form> 
                </fieldset>
                </div>
            </center>
    
        </div>
        <div id="box2">
            <h1 id="re">Registration Form</h1>
               <div id="Registration">
                    
                      
                       <form style="background-color:black;width:78%"  method="post" id="RegForm">
                                <h4>First Name : &nbsp;&nbsp;&nbsp;</h4> 
                                            <input name="login" type="text" placeholder="Enter Your Name" >&nbsp;&#40;max 30 char A-Z&#41; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>Category : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                            <select>
                                     <option selected>General</option>
                                    <option>OBC</option>
                                    <option>SC</option>
                                    <option>ST</option>
                            </select><br><br><br>
                               <h4>Last Name : &nbsp;&nbsp;&nbsp;</h4> 
                                            <input name="login" type="text" placeholder="Enter Your Name" >&nbsp;&#40;max 30 char A-Z&#41;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <h4>Choose File:</h4>&nbsp;&nbsp;
                            <input type="file" name="File"><br><br><br>

                                <h4>Roll No :&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</h4>
                                            <input name="pass" type="password" placeholder="Enter Your Roll No">&nbsp;&#40;maxi 10 digits 0 to 9&#41;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="Submit" value="Upload"><br><br><br>


                                  <h4>Mobile No : &nbsp;&nbsp;&nbsp;</h4> 
                                            <input name="mobile" type="text" placeholder="Enter Mobile No">&nbsp;&#40;max 10 digits 0-9&#41;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h4>Set Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                            <input type="text" name="username" placeholder="Enter User Name"><br><br><br>
                               <h4>Email Id : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4> 
                                            <input name="email" type="email" placeholder="Enter Your Email" >&nbsp;&#40;max 30 character&#41; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>Set Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                            <input type="password" name="username" placeholder="Enter User Name"><br><br><br>
                                    <h4>Adhar No : &nbsp;&nbsp;&nbsp;</h4> 
                                            <input name="mobile" type="text" placeholder="Enter UIDAI No">&nbsp;&#40;max 16 digits 0-9&#41;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>Confirm Password:&nbsp;&nbsp;&nbsp;</h4>
                            <input type="password" name="username" placeholder="Enter User Name"><br><br><br>
                                   
                                    <h4>Gender :&nbsp; &nbsp;&nbsp;&nbsp;</h4>
                                            <input type="radio" name="Sex" ><i class="fa fa-male" aria-hidden="true"></i>Male
                                            <input type="radio" name="Sex" ><i class="fa fa-female" aria-hidden="true"></i>Female
                                            <input type="radio" name="Sex" >Other <br><br><br>
                               
                                  <h4>Date Of Birth</h4>  
                                            <input type="date" name="dob"><br><br><br>
                               <h4>Address:</h4>
                               <textarea rows="3" cols="50"></textarea>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input value="Submit" type="submit" id="sub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input value="Reset" type="button" id="res" onclick="formReset()">
                             

                        </form>
                          
                        
                       
                      
                    </div>
           </div>
        <div id="box3">
             <center>
                <div id="login">
            <fieldset style="background-image:Url(login1.jpg); width:40%;"> 
            <legend>Student Login </legend>
           <form id="stLogin">
            <h4>Username : </h4>
            <input name="login" type="text" placeholder="Enter Your Username" ><br><br><br>
            <br>
            <h4>Password : </h4>
            <input name="pass" type="password" placeholder="Enter Your Password"><br><br><br>
                <br><br>
            <input value="Login" type="submit" id="sub">
                
            <input value="Reset" type="button" id="res" onclick="studentReset()"><br><br>
               <a href="#box4">Forget Password</a>
        </form> 
        </fieldset></div></center>
        </div>
        <div id="box4">
                <div>
                    <form id="Search">
                        <h1 id="For">Forget Password</h1>
                        <fieldset>
                            <legend>Forget Possword</legend>
                            <label>Enter Roll No:</label>
                            <input type="search" name="foget" placeholder="Search By Roll No" ><br><br><br>
                            <input type="submit" value="Forget Password">
                            </fieldset>
                    </form>
                </div>
        
        
        
        </div>
        <div id="box5">  
        </div>
        <div id="box6">
         <div class="article-inner clearfix" >
         
              <h1 style="text-align: center;margin:0px;">MMMUT's University Libraries:<br>Connecting People with Information<br/>Our Mission, Vision &amp; Values</h1>
<h3>Mission:</h3><hr />
<div style="text-align: center;margin: 15px 105px;">
            <p>The University Libraries strengthen and enhance the teaching, research and service of the University at MMMUT Campus. The Libraries promote intellectual growth and creativity by developing collections, facilitating access to information resources, teaching the effective use of information resources and critical evaluation skills and offering research assistance.</p>
</div>
<h3>Vision:</h3>
<div style="text-align: center;margin: 15px 105px;">
                <p>The University Libraries are engaged in learning and discovery as essential participants in the educational community. We develop, organize, provide access to and preserve materials to meet the needs of present and future generations of students and scholars. We explore and implement innovative technologies and services to deliver information and scholarly resources conveniently to users anytime/anyplace. We also provide well-equipped and functional physical spaces where students can pursue independent learning and discovery outside the classroom. The University Libraries support scholarship and research productivity and foster their vitality.</p>
</div>
<h3>Values:</h3><hr />
<div style="margin:0px,90px;">
        <ol type="I">
                    <li>We recognize users as our primary focus.</li>
                    <li>We are innovative and proactive.</li>
                    <li>We support self-education, learning, research and scholarship.</li>
                    <li>We foster cooperation by sharing resources via local, national, and international networks.</li>
                    <li>We promote equity of access to information.</li>
                    <li>We value diversity.</li>
                    <li>We respect user privacy.</li>
                    <li>We defend intellectual freedom.</li>
                    <li>We develop our human resources and support continuous professional development.</li>
                    <li>We aspire to be a flexible and experimental organization that encourages innovation and staff collaboration.</li>
        </ol>
</div>              </div>
</div>

        
        <div id="box7"></div>
        <div id="box8">
            
            <h2>Our Team</h2>
            <a href="https://www.facebook.com/akayushh"> <img src="Ayush.png" alt="Ayush Patel Singh" id="dev" /></a>
            
             <a href="https://www.facebook.com/babluk.yadav.733">   <img src="Bablu.png" alt="Bablu Kumar Yadav" id="dev"/></a>
             <a href="https://www.facebook.com/balgovind.chaudhary.12">   <img src="abc.png" alt="Bal Govind Chaudhary" id="dev"/></a>
            <div id="about">
                <h1>Ayush Patel Singh<br> &#40;2016021028&#41;<br> </h1>B.Tech CSE IInd Year &#40;MMMUT&#41;
            </div>
            <div id="about" style="padding-left:130px;"> 
                <h1>Bablu Kumar Yadav<br>&#40;2016021029&#41;<br> </h1>B.Tech CSE IInd Year &#40;MMMUT&#41;    
            </div>
            <div id="about" style="padding-left:130px;">
                <h1>Bal Govind Chaudhary<br>&#40;2016021030&#41;<br></h1>B.Tech CSE IInd Year &#40;MMMUT&#41;
                
            </div>
             </div>       
    </body>
</html>
