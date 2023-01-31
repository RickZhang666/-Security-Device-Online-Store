     
(function(){
    let allgoods = document.querySelector('.alldetails');
    let contentbutton = document.querySelectorAll('.content_btn li');

    let data = [
        {
            src : "./image/b1.jpg",
            title: 'Bracket 01',
            prices: 15.99,
        },
        {
            src : "./image/b2.jpg",
            title: 'Bracket 02',
            prices: 13.99,
        },
        {
            src : "./image/b3.jpg",
            title: 'Bracket 03',
            prices: 9.99,
        },
        {
            src : "./image/b4.jpg",
            title: 'Bracket 04',
            prices: 12.99,
        },
        {
            src : "./image/b5.jpg",
            title: 'Bracket 05',
            prices: 10.99,
        },
        {
            src : "./image/b6.jpg",
            title: 'Bracket 06',
            prices: 10.99,
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
