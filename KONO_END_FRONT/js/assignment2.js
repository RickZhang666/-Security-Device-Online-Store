//display the options under the nav bar of brands
// let brands = document.querySelector('.listb');
// let brandslis= document.querySelectorAll('.nav-bar-list');
// brands.onmouseover = function(){
//     alert("a");
//     lis.style.display = 'block';
// }


//pictures changing
let img = document.querySelector('.img');
let next = document.querySelector('.next');
let previous = document.querySelector('.previous');
let banner_box = document.querySelector('.banner_box');
let list = document.querySelectorAll('.banner_btn li');
let imgArr = ['banner.jpg','banner1.jpeg', 'banner2.jpg', 'banners3.jpg', 'banners4.jpg'];
let count = 0;
//defined a function to change the pictures using it's relative path
function rotateImg(){
    img.src = './image/' + imgArr[count];

    for(let i = 0; i < list.length; i++){
        list[i].className = '';
    }
    list[count].className = 'active';
}
//set a timer, changing the pictures in every 3s.
let timer = setInterval(function(){
    count++;
    if(count > imgArr.length - 1){
        count = 0;
    }
    rotateImg();
}, 2000);
//
next.onclick = function(){
    count++;
    if(count > imgArr.length - 1){
        count = 0;
    }
    rotateImg();
}
previous.onclick = function(){
    count--;
    if(count < 0){
        count = imgArr.length - 1;
    }
    rotateImg();
}
//if the mouse is hovering the pics, then the timer should be off
banner_box.onmouseover = function(){
    clearInterval(timer);
}
//set on the timer if the mouse is off the pics.
banner_box.onmouseout = function(){
    timer = setInterval(function(){
        count++;
        if(count > imgArr.length - 1){
            count = 0;
        }
        rotateImg();
    }, 2000);
}

for(let i = 0; i < list.length; i++){
    list[i].onclick = () => {
        count = i;
        rotateImg();
    }
}
//elevator changing absolution to relative position
// let header = document.querySelector('.header');
// let banner = document.querySelector('.banner');
// let elevator = document.querySelector('.elevator');
// let search = document.querySelector('.search');
// let searchM = document.querySelector('.search-m');
// let search_logo = document.querySelector('.search_logo');
// document.onscroll = function(){
//     let top = document.documentElement.scrollTop || document.body.scrollTop;
//     // let headerHegiht = header.offsetHeight;//including height, padding and border
//     let bannerHeight = banner.offsetHeight;

//     //to change the position to fixed when scrolling top's height is greater than the sum of headerheight and bannerheight
//     if(top >= headerHegiht + bannerHeight){
//         elevator.className = 'elevator elevator_fixed';
//         search.className = 'search search_fixed';
//         searchM.style.height = '50px';
//         search_logo.style.display = 'block';
//     }else{
//         elevator.className = 'elevator';
//         search.className = 'search';
//         searchM.style.height = '60px';
//         search_logo.style.display = 'none';

//     }
// }

//search bar
// let input = document.getElementById('value');
// let show = document.getElementById('show');
// input.onkeyup = function(){
//     show.style.display = 'block';
// }
// input.onblur = function(){
//     show.style.display = 'none';
// }