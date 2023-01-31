     
(function(){
    let allgoods = document.querySelector('.alldetails');
    let contentbutton = document.querySelectorAll('.content_btn li');

    let data = [
        {
            src : "./image/con1.jpg",
            title: 'Connector 01',
            prices: 1.99,
        },
        {
            src : "./image/con2.jpg",
            title: 'Connector 02',
            prices: 1.99,
        },
        {
            src : "./image/con3.jpg",
            title: 'Connector 03',
            prices: 0.99,
        },
        {
            src : "./image/con4.jpg",
            title: 'Connector 04',
            prices: 2.99,
        },
        {
            src : "./image/con5.jpg",
            title: 'Connector 05',
            prices: 0.99,
        },
        {
            src : "./image/con6.jpg",
            title: 'Connector 06',
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
