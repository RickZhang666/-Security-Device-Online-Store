     
(function(){
    let allgoods = document.querySelector('.alldetails');
    let contentbutton = document.querySelectorAll('.content_btn li');

    let data = [
        {
            src : "./image/m1.jpg",
            title: 'Cable management 01',
            prices: 1.99,
        },
        {
            src : "./image/m2.jpg",
            title: 'Cable management 02',
            prices: 0.99,
        },
        {
            src : "./image/m3.jpg",
            title: 'Cable management 03',
            prices: 2.99,
        },
        {
            src : "./image/m4.jpg",
            title: 'Cable management 04',
            prices: 1.99,
        },
        {
            src : "./image/m5.jpg",
            title: 'Cable management 05',
            prices: 2.99,
        },
        {
            src : "./image/m6.jpg",
            title: 'Cable management 06',
            prices: 1.99,
        },
    ];
    
    function init(){
        let html = "";
        data.forEach((item, index) => {
            html += `<div>
            <img src="${item.src}" alt="Aibase cameras">
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
