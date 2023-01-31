
<script>
    (function(){
        let allgoods = document.querySelector('.alldetails');
        let contentbutton = document.querySelectorAll('.content_btn li');
        <?php
        $con=mysqli_connect('localhost','root','','assignment2','3306');
        $sql = "SELECT * FROM products WHERE description LIKE '%Camera%'";
        $res=mysqli_query($con,$sql);?>
        var data = eval (<?php echo json_encode($res);?>);
        console.log(data);
        function init(){
            let html = "";
            data.forEach((item, index) => {
                console.log(item);
                console.log(index);
                html += `<div>
                <img src="${item.src}" alt="Eyeonet cameras">
                <p class="title">${item.title}</p>
                <p class="prices">$${item.prices}</p>
                </div>`;
            });
            allgoods.innerHTML = html;
        }
        init();
        //to set a function for the button to filter the price from high to low and low to high
        (function(){  
            //price from low to high
            contentbutton[0].onclick = function(){
                data.sort((a, b) => a.prices - b.prices);//comparing the price of two object
                init();//to reset the html by sorting order
            };
            //price from high to low
            contentbutton[1].onclick = function(){
                data.sort((a, b) => b.prices - a.prices);//comparing the price of two object
                init();//to reset the html by sorting order
            };
        })();
    
    })();
</script>