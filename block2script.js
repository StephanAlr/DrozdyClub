let anim=document.querySelectorAll('.anim');
let container=document.querySelector('.part2');
let h2=document.querySelector('.entry')
if (anim.length>0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(){ 
        setTimeout( function() {
        
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
                animItem.classList.add('active');
               
            }
          

        }
        let img=document.createElement('img');
        img.src="img/vergil.gif";
        h2.textContent="Именно малый бизнес чаще всего подвергается атакам, так как, зачастую, он совсем не защищён, и этим охотно пользуются злоумышленники.";
        
    },7000);}
    function offset(el){
        const rect=el.getBoundingClientRect(),
        scrollLeft=window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop=window.pageYOffset || document.documentElement.scrollTop;
        return{top: rect.top + scrollTop, left: rect.left+scrollLeft}
    }
}
