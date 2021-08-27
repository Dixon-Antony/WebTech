<script src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
<head>
    <title>Login</title>
</head>
<?php
    session_start();
?>
<style>

body{
     background: url("https://images.unsplash.com/photo-1550684376-efcbd6e3f031?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmxhY2slMjB0ZXh0dXJlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family:'HelveticaNeue','Arial', sans-serif;

}
a{color:#58bff6;text-decoration: none;}
a:hover{color:#aaa; }
.pull-right{float: right;}
.pull-left{float: left;}
.clear-fix{clear:both;}
div.logo{text-align: center; margin: 20px 20px 30px 20px; fill: #566375;}
div.logo svg{
    width:180px;
    height:100px;
}
.logo-active{fill: #44aacc !important;}
#formWrapper{
    background: rgba(0,0,0,.2); 
    width:100%; 
    height:100%; 
    position: absolute; 
    top:0; 
    left:0;
    transition:all .3s ease;}
.darken-bg{background: rgba(0,0,0,.5) !important; transition:all .3s ease;}

div#form{
    position: absolute;
    width:360px;
    height:320px;
    height:auto;
    background-image: url(https://images.unsplash.com/photo-1530177150700-84cd9a3b059b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80) ;
    margin:auto;
    border-radius: 5px;
    padding:20px;
    left:50%;
    top:50%;
    margin-left:-180px;
    margin-top:-200px;
}
div.form-item{position: relative; display: block; margin-bottom: 20px;}
 input{transition: all .2s ease;}
 input.form-style{
    color:darkorange;
    display: block;
    width: 90%;
    height: 44px;
    padding: 5px 5%;
    border:1px solid #ccc;
    -moz-border-radius: 27px;
    -webkit-border-radius: 27px;
    border-radius: 27px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    background-color: #fff;
    font-family:'HelveticaNeue','Arial', sans-serif;
    font-size: 105%;
    letter-spacing: .8px;
}
div.form-item .form-style:focus{outline: none; border:1px solid #58bff6; color:darkorange; }
div.form-item p.formLabel {
    position: absolute;
    left:26px;
    top:2px;
    transition:all .4s ease;
    color:#bbb;}
.formTop{top:-22px !important; left:26px; background-color:darkorange;border-radius: 10px; padding:0 5px; font-size: 14px; color:black !important;}
.formStatus{color:#8a8a8a !important;}
input[type="submit"].login{
    float:right;
    width: 112px;
    height: 37px;
    -moz-border-radius: 19px;
    -webkit-border-radius: 19px;
    border-radius: 19px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    background-color: darkorange;
    border:1px solid #55b1df;
    border:none;
    color: #fff;
    font-weight: bold;
}
input[type="submit"].login:hover{background-color: #fff; border:1px solid #55b1df; color:#55b1df; cursor:pointer;}
input[type="submit"].login:focus{outline: none;}

.nav-area{
    margin-top: -0.2%;
    margin-left: 83%;
    text-align: center;
    list-style: none;
    padding: 20px;
    font-size: 20px;
    font-weight: 3px;
    }

    .nav-area li{
        display: inline-block;
        padding: 0 15px;
        text-transform: uppercase;
        color: white;
    }

    .nav-area li:hover{
        transition: 0.3s;
        color: darkorange;
    }
    
    .nav-area .current{
        color: darkorange;
    }

</style>
<script type="text/javascript">
    $(document).ready(function(){
    var formInputs = $('input[type="email"],input[type="password"]');
    formInputs.focus(function() {
       $(this).parent().children('p.formLabel').addClass('formTop');
       $('div#formWrapper').addClass('darken-bg');
       $('div.logo').addClass('logo-active');
    });
    formInputs.focusout(function() {
        if ($.trim($(this).val()).length == 0){
        $(this).parent().children('p.formLabel').removeClass('formTop');
        }
        $('div#formWrapper').removeClass('darken-bg');
        $('div.logo').removeClass('logo-active');
    });
    $('p.formLabel').click(function(){
         $(this).parent().children('.form-style').focus();
    });
});
</script>

<body>



<div id="formWrapper">

<nav class="menubar">
        <ul class="nav-area">
            <a href="welcome.html"><li class="" id="">Back to Home?</li></a>
        </ul>
</nav>

<div id="form">
<form id="formx" method="post">
<div class="logo">
    <img style="width: 120px;height: 150px;" src="./images/login.png">
</div>
    
        <div class="form-item">
            <p class="formLabel">Email</p>
            <input type="email" name="username" id="email" class="form-style" autocomplete="off" required  />
        </div>
        <div class="form-item">
            <p class="formLabel">Password</p>
            <input type="password" name="password" id="password" class="form-style" required />
            <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->    
        </div>
        <div class="form-item">
        
        <input name="login" type="submit" class="login pull-right" value="Login" style="margin-right:35px;">
        <input name="register" type="submit" class="login pull-right" value="Register" style="margin-right: 100px;">
        <div class="clear-fix"></div>
        </div>
        <h5 id="invalid" style="color:crimson ;margin-left:-20px;padding-left: 23px;letter-spacing: 0.3px;opacity: 0.7;font-size: 15px;background-color: white;"></h5>
</form>

<?php include("loginuser.php");?>

</div>
</div>
</body>

</html>