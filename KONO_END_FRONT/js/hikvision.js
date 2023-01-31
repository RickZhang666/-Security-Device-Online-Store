
(function(){
    let allgoods = document.querySelector('.alldetails');
    let contentbutton = document.querySelectorAll('.content_btn li');
    let data = [
        {
            src : "./image/h1.jpg",
            title: '4MP Starlight 4-In-1 80m IR Bullet Camera',
            prices: 79.00,
        },
        {
            src : "./image/h2.jpeg",
            title: '4MP Starlight 3.6mm Eyeball Network Camera',
            prices: 109.99,
        },
        {
            src : "./image/h3.jpg",
            title: '5MP IR Network PTZ Eyeball Camera',
            prices: 99.99,
        },
        {
            src : "./image/h4.jpeg",
            title: '8MP IR Vari-focal Turret Network Camera',
            prices: 299.99,
        },
        {
            src : "./image/h5.jpeg",
            title: '4MP Outdoor TurboHD PTZ Camera',
            prices: 139.99,
        },
        {
            src : "./image/h6.jpg",
            title: '4MP 2.88mm IR Network Camera',
            prices: 119.99,
        },
        {
            src : "./image/h7.jpg",
            title: '4MP IR Fixed Turret Network Camema',
            prices: 89.99,
        },
        {
            src : "./image/h8.jpeg",
            title: '5MP Smart Fixed-focal Eyeball Network Camera',
            prices: 179.99,
        },
        {
            src : "./image/h9.jpg",
            title: '5MP Fisheye Network Camera',
            prices: 109.99,
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
