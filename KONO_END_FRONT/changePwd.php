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
        <link rel="stylesheet" href="./css/change.css" type="text/css">
        <script src="./js/change.js" defer></script>
    </head>

    <body>

        <?php require 'top.php';?>
        <div class="open">CONTINUE</div>
        <div class="logWindow">
            <div class="form">
                <form name="form_change">
                    <label for="email" id="emailLabel">EMAIL</label>
                    <input type="text" name="email" id="email" placeholder="EMAIL">
                    <label for="rpwd"  id="opwdLabel">OLD PASSWORD</label>
                    <input type="text" name="opwd" id="opwd" placeholder="NEW PASSWORD">
                    <label for="rpwd"  id="npwdLabel">NEW PASSWORD</label>
                    <input type="text" name="npwd" id="npwd" placeholder="OLD PASSWORD">
                    <span class="validate"></span>
                    <button type="button" id="change">COMFIRM</button>
                </form>
            </div>

            <div class="invite">
                <h3>Welcome to KONO Online</h3>
                <div class="nope1"><a href="login.php">LOGIN</a></div>
                <div class="nope" style="margin-left: 160px;"><a href="register.php">REGISTER</a></div>
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

                $('#change').click(function(){
                    var validate = validateCha();
                    if(validate == true){
                        var email=$('#email').val();
                        var pwd=$('#opwd').val();
                        var pwd2=$('#npwd').val();
                        $.ajax({
                        type:'post',
                        url:'check/checkCha.php',
                        data:{
                            email:email,
                            password:pwd,
                            password2:pwd2
                        },
                        success:function(res){
                            if(res==1){
                                console.log(pwd2);
                                $(".validate3").html("\u2714 Change Password Successfully").css("color","white");
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
                                $(".validate3").html("\u2716 Email or Passord Incorrect").css("color","white");
                            }
                            
                        }
                    })
                    }
                })
            </script>
        </div>
    </body>

</html>