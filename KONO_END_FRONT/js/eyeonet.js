
(function(){
    let allgoods = document.querySelector('.alldetails');
    let contentbutton = document.querySelectorAll('.content_btn li');
    let data = [
        {
            src : "./image/e1.jpg",
            title: '4MP HDCVI & analog dual output Camera',
            prices: 79.00,
        },
        {
            src : "./image/e2.jpg",
            title: '5MP 2.8mm IR 30m Fixed Eyeball Network Camera',
            prices: 169.99,
        },
        {
            src : "./image/e3.jpg",
            title: '5MP IR 50m IP66 Built-in Mic Eyeball Camera',
            prices: 299.99,
        },
        {
            src : "./image/e4.jpg",
            title: '5MP 2.8-12mm Motorized IR 50m Camera',
            prices: 229.99,
        },
        {
            src : "./image/e5.jpg",
            title: '5MP 3.6mm Fixed Full Color Camera',
            prices: 269.99,
        },
        {
            src : "./image/e6.jpg",
            title: '4MP 2.88mm IR50 Network Camera',
            prices: 99.99,
        },
        {
            src : "./image/e7.jpg",
            title: '4K SMT 8PoE Network Video Record',
            prices: 189.99,
        },
        {
            src : "./image/e8.jpg",
            title: '4K 16CH 16 PoE Network Video Record',
            prices: 179.99,
        },
        {
            src : "./image/e9.jpg",
            title: '4K 8CH P2P Fisheye Network Video Record',
            prices: 89.99,
        },
    ];
    
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
