
let sub=document.querySelector('#but1');
let emi=document.querySelector('.email');
	
	



function func(target){
	var input = document.getElementById('password-input');
    let sw=document.querySelector('.but');
	if (input.getAttribute('type') == 'password' ) {
		input.setAttribute('type', 'text');
		
        sw.classList.add('cat');
	} 
    else {	
		input.setAttribute('type', 'password');
	    sw.classList.remove('cat');
	}
	return false;
}