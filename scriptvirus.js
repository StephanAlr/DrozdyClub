let anim=document.querySelectorAll('.anim');
if (anim.length>0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(){ 
        
        for(let i=0; i<anim.length; i++){
            const animItem=anim[i];
            const animItemHeight=animItem.offsetHeight;
            const animItemOffset=offset(animItem).top
            const animStart=4;

             let animItemPoint=window.innerHeight-animItemHeight/animStart; 

            if(animItemHeight>window.innerHeight){
                window.innerHeight-window.innerHeight/animStart; 
            }

            if((pageYOffset>animItemHeight-animItemPoint)&& pageYOffset<(animItemOffset+animItemHeight)){
                animItem.classList.add('active')
            }
            else{
                animItem.classList.remove('active');
            }

        }
    };
    function offset(el){
        const rect=el.getBoundingClientRect(),
        scrollLeft=window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop=window.pageYOffset || document.documentElement.scrollTop;
        return{top: rect.top + scrollTop, left: rect.left+scrollLeft}
    }
}

