let switches=document.querySelectorAll('.cl');
let block=document.querySelectorAll('.block');

function showBlock(but){
if (but==1){
    block[0].classList.remove('hide');
    for(let i=0;i<block.length;i++){
        if(i!=0){
            block[i].classList.add('hide');
        }
    }
}
if (but==2){
    block[1].classList.remove('hide');
    for(let i=0;i<block.length;i++){
        if(i!=1){
            block[i].classList.add('hide');
        }
    }
}
if (but==3){
    block[2].classList.remove('hide');
    for(let i=0;i<block.length;i++){
        if(i!=2){
            block[i].classList.add('hide');
        }
    }
}
if (but==4){
    block[3].classList.remove('hide');
    for(let i=0;i<block.length;i++){
        if(i!=3){
            block[i].classList.add('hide');
        }
    }
}

}

switches[0].addEventListener('click',function(){showBlock(1)});
switches[1].addEventListener('click',function(){showBlock(2)});
switches[2].addEventListener('click',function(){showBlock(3)});
switches[3].addEventListener('click',function(){showBlock(4)});



