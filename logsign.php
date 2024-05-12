<?php 
    session_start();
    if(isset($_SESSION['userid'])){
        header("Location: Home.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" >
<link rel="shortcut icon" type="image/x-icon" href="logo.png" />
<title>Register | Login</title>

<style>

*{
    margin: 0;
    padding: 0;
}


.hero{

height: 100%;
width: 100%;
background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(v1.jpg);
background-position: center;
background-size: cover;
position: absolute;
}

.form-box{

width: 380px;
height: 480px;
position: relative;
margin: 6% auto;
background: rgb(253, 254, 254);
padding: 5px;
overflow: hidden;
}

.form-box:before{

content: '';
position: absolute;
top: -2px;
left: -2px;
right: -2px;
bottom: -2px;
background: #fff;
z-index: -1;
}

.form-box:after{

content: '';
position: absolute;
top: -2px;
left: -2px;
right: -2px;
bottom: -2px;
background: rgb(240, 235, 235);
z-index: -2;
filter: blur(40px);
}

.button-box{

width: 220px;
margin: 10px auto;
position: relative;
box-shadow: 0 0 20px 9px #a97bf7a5;
border-radius: 30px;
}

.toggle-btn{
padding: 10px 30px;
cursor: pointer;
background-color: transparent;
border: 0;
outline: none;
position: relative;

}

#btn{
top: 0;
left: 0;
position: absolute;
width: 110px;
height: 100%;
background: linear-gradient(to right, #4be1ec,#cb5eee );
border-radius: 30px;
transition: 0.5s;

}

.anicon{

margin-left: 120px;

}

.input-group{

top:200px;
position:absolute;
width: 280px;
transition: 0.5s;
margin-left: 0px !important;
}

.input-field{

width: 100%;
padding: 10px 0;
margin: 0px 10px !important;
border-left: 0;
border-top: 0;
border-right: 0;
border-bottom: 1px solid #999;
background: transparent;
}

.check-box{

margin: 5px 15px 35px 0;

}
span{
color: rgb(26, 25, 25);
font-size: 12px;
bottom: 53px;
left: 25px;
position: absolute;
}

.submit-btn{

width: 65%;
margin: auto;
padding: 10px 20px;
margin-top: 50px;
margin-left: 60px !important;
background: linear-gradient(to right,#49e8db,#9e39d1);
border:0;
border-radius: 30px !important;
display: inline;
}

#logIn{

left: 450px;

}

#Register{

left: 20px;

}

</style>



</head>
<body>

<div class="hero">
    <div class="form-box">
        <div class="button-box">
           <div id="btn"></div>
                         <div class="row">
                                <button type="button" onclick="Register()" value="Register" class="toggle-btn col-6">Register</button>
                                <button type="button" onclick="logIn()" value="log In" class="toggle-btn col-6">Log In</button>          
                              </div>  
            </div>

                   <div class="anicon">
                       <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
                         <lord-icon
                               src="https://cdn.lordicon.com/tsnvgrkp.json"
                               trigger="hover"
                               colors="primary:#4be1ec,secondary:#cb5eee"
                               stroke="60"
                               style="width:150px;height:150px">
                           </lord-icon> 
                            </div>
                            <form method="POST" action="logincontroller.php" id="logIn" class="input-group">
                                <input name="lusername" type="text" class="input-field" placeholder="UserName">
                                <input name="luserpass" type="password" class="input-field" placeholder="Password">
                                <input type="checkbox" class="check-box"><span>Remember Password</span>
                                
                                <input type="submit" value="Log In" class="submit-btn">
                            </form>
                            <form method="POST" action="signupcontroller.php" id="Register" class="input-group">
                                <input name="username" type="text" class="input-field" placeholder="UserName">
                                <input name="usermail" type="email" class="input-field" placeholder="E-Mail">
                                <input name="userpass" type="password" class="input-field" placeholder="Password">
                                <input type="checkbox" class="check-box"><span>I agree to the <b> terms & conditions </b> </span>
                                <input type="submit" value="Register" class="submit-btn">
                                
                            </form>
                    </div>
                       </div>




<script>

  var x = document.getElementById("logIn");
  var y = document.getElementById("Register");
  var z = document.getElementById("btn");

  function Register(){

   x.style.left="-400px";
   y.style.left="20px";
   z.style.left="0px";

  }

  function logIn(){

   x.style.left="20px";
   y.style.left="450px";
   z.style.left="110px";

}

</script>

<script src="bootstrap-5.2.0-dist/bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>

    

</body>
</html>