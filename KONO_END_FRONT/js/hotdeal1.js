//using the arrows to move the pics to the left or right
let prev = document.querySelector('.prev');
let nex = document.querySelector('.nex');
let ul = document.querySelector('.spec_items ul');
prev.onclick = function(){
    ul.style.left = '0';
}
nex.onclick = function(){
    ul.style.left = '-116px';
}

let lis = document.querySelectorAll('.spec_items ul li');
let img = document.querySelector('.img');
let imgs = document.querySelectorAll('.spec_items img');

for(let i = 0; i < lis.length; i++){
    lis[i].onmouseover = function(){
        for(let j = 0; j < lis.length; j++){
            lis[j].className = '';
        }
        lis[i].className = 'img_hover';
        img.src = lis[i].children[0].src;
    }
}

