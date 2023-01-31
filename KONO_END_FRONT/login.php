<!--
Group members: Mia Xue, Rick Zhang
Date: Dec 4, 2022
Section: CST 8285 section 304
The objective of this lab is to create a online store website for sailing security items
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KONO ONLINE</title>
        <link rel="stylesheet" href="./css/login.css" type="text/css">
    </head>

    <body>
        <?php require 'top.php';?>
        <div class="open">CONTINUE</div>
        <div class="logWindow">
            <div class="form">
                <form name="form_log">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email">
                    <label for="lpwd">PASSWORD</label>
                    <input type="password" name="lpwd" id="lpwd" required="required">
                    <span class="validate"></span>
                    <button type="button" id="login">LOGIN</button>
                </form>
            </div>

            <div class="invite">
                <h3>Welcome to KONO Online</h3>
                <div class="nope1"><a href="register.php">REGISTER</a></div>
                <div class="nope" style="margin-left: 160px;"><a href="changePwd.php">CHANGE PASSWORD</a></div>
                <div title="close" class="close"></div>
            </div>

            <script type="text/javascript">
                
                $(".close").on('click', function(){
                    $('.logWindow').addClass('hidden');
                    $('.open').addClass('active');
                })

                $(".open").on('click',function(){
                    $(this).removeClass('active');
                    $('.logWindow').removeClass('hidden');
                })

                $('#login').click(function(){
                    var email=$('#email').val();
                    var pwd=$('#lpwd').val();
                    $.ajax({
                    type:'post',
                    url:'check/checkLog.php',
                    data:{
                        email:email,
                        password:pwd
                    },
                    success:function(res){
                        if(res==1){
                            var num = 2;
                            t1 = setInterval(function(){
                                num -= 1;
                                if(num == 0){
                                    clearInterval(t1);
                                    window.location='index.php';
                                }
                            }, 1000)
                            }   
                        else{
                            $(".validate").html("Email or Passord Incorrect").css("color","#fff");
                        }
                        
                    }
                })
                })
            </script>
        </div>
    </body>

</html>