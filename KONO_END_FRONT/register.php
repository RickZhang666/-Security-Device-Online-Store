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
        <link rel="stylesheet" href="./css/register.css" type="text/css">
        <script src="./js/register.js" defer></script>
    </head>

    <body>

        <?php require 'top.php';?>
        <div class="open">CONTINUE</div>
        <div class="logWindow">
            <div class="form">
                <form name="form_reg">
                    <label for="email" id="emailLabel">EMAIL</label>
                    <input type="text" name="email" id="email" placeholder="EMAIL">
                    <label for="rpwd"  id="rpwdLabel">PASSWORD</label>
                    <input type="text" name="rpwd" id="rpwd" placeholder="PASSWORD">
                    <label for="rpwd"  id="rpwd2Label">RE-TYPE PASSWORD</label>
                    <input type="text" name="rpwd2" id="rpwd2" placeholder="PASSWORD">
                    <span class="validate"></span>
                    <button type="button" id="register">REGISTER</button>
                </form>
            </div>

            <div class="invite">
                <h3>Welcome to KONO Online</h3>
                <div class="nope1"><a href="login.php">LOGIN</a></div>
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

                $('#register').click(function(){
                    var validate = validateReg();
                    if(validate == true){
                        var email=$('#email').val();
                        var pwd=$('#rpwd').val();
                        $.ajax({
                        type:'post',
                        url:'check/checkReg.php',
                        data:{
                            email:email,
                            password:pwd
                        },
                        success:function(res){
                            if(res==1){
                                $(".validate").html("\u2714 Regist Successfully").css("color","white");
                                num = 2;
                                t1 = setInterval(function(){
                                    num-=1;
                                    if(num == 0){
                                        clearInterval(t1);
                                        window.location='login.php';
                                    }
                                }, 1000)
                            }
                            else{
                                $(".validate").html("\u2716 Email Has Been Used").css("color","white");
                            }
                            
                        }
                    })
                    }
                })
            </script>
        </div>
    </body>

</html>