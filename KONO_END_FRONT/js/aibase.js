
(function(){
    let allgoods = document.querySelector('.alldetails');
    let contentbutton = document.querySelectorAll('.content_btn li');
    let data = [
        {
            src : "./image/ai1.jpg",
            title: '4MP Starlight 4-In-1 80m IR Bullet Camera',
            prices: 49.00,
        },
        {
            src : "./image/ai2.jpeg",
            title: '4MP IR Fixed-focal Eyeball Network Camera Black',
            prices: 129.99,
        },
        {
            src : "./image/ai3.jpeg",
            title: '4MP Smart Dual Illumination Fixed-focal Eyeball Camera',
            prices: 219.99,
        },
        {
            src : "./image/ai4.jpeg",
            title: '5MP IR Vari-focal Eyeball Network Camera',
            prices: 259.99,
        },
        {
            src : "./image/ai5.jpeg",
            title: '5MP IR Vari-focal Dome Network Camera',
            prices: 129.99,
        },
        {
            src : "./image/ai6.jpeg",
            title: '8MP 25x Starlight IR Network PTZ Camera',
            prices: 169.99,
        },
        {
            src : "./image/ai7.jpeg",
            title: '4MP 24x Startlight IR PTZ Camema',
            prices: 319.99,
        },
        {
            src : "./image/ai8.jpeg",
            title: '5MP Smart Fixed-focal Eyeball Network Camera',
            prices: 179.99,
        },
        {
            src : "./image/ai9.jpeg",
            title: '4MP THERMAL NETWORK MINI HYBRID BULLET CAMERA',
            prices: 139.99,
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
