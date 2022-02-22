let pod=document.querySelector('.pod');
let page=document.querySelector('.page');

page.onmouseenter=function(){
    pod.classList.remove('hidden');
    
};

pod.onmouseleave=function(){
    
    pod.classList.add('hidden');
};


let opros=function(){
    
 
    let messsages=document.querySelector(".messages");
    let botmess=document.createElement('div');
    botmess.classList.add('message');
    botmess.classList.add('message-bot');
    let spanchik=document.createElement('span');
    spanchik.textContent="Чат-бот"
    let p=document.createElement('p');
    p.textContent="Вы очень поможете нам если ответите на один вопрос. Как вы про нас узнали?";
    messsages.appendChild(botmess);
    botmess.appendChild(spanchik);
    botmess.appendChild(p);
    let form=document.createElement('form');
    form.action="posbaseto.php";
    form.method="post";
    let select=document.createElement('select');
    let option1=document.createElement('option');
    let option2=document.createElement('option');
    let option3=document.createElement('option');
    option1.value="Рассказали друзья";
    
    option2.value="Увидел рекламу в интернете";
    option3.value="Сайт первый в списке поиска";
    
    option1.textContent="Рассказали друзья";
    option2.textContent="Увидел рекламу в интернете";
    option3.textContent="Сайт первый в списке поиска";
    
    select.style.width="100%";
    let submit=document.createElement('button');
    submit.classList.add('submit');
    submit.textContent="Отправить";
    select.name="Name";
    
    messsages.appendChild(form);
    form.appendChild(select);
    select.appendChild(option1);
    select.appendChild(option2);
    select.appendChild(option3);
    form.appendChild(submit);
}
let att=document.querySelector(".attention");

let Bot=document.querySelector(".chat-bot-layout");
let krug=document.querySelector(".krug");
krug.onmousedown=function(){
att.style.display="none";
if(Bot.style.display!="block"){
Bot.style.display="block";
}
else{
Bot.style.display="none";
}
}

window.onload=setTimeout(function(){krug.style.display='block';},3000);

let buts=document.querySelectorAll(".choose-button");

function CreateBotMessage(text,but,href){
    let messsages=document.querySelector(".messages");
    

    let botmess=document.createElement('div');
    botmess.classList.add('message');
    botmess.classList.add('message-bot');
    let spanchik=document.createElement('span');
    spanchik.textContent="Чат-бот"
    let p=document.createElement('p');
    p.textContent=text;
    let a=document.createElement('a');
    a.textContent="Сюда";
    a.href=href;
    messsages.appendChild(botmess);
    botmess.appendChild(spanchik);
    botmess.appendChild(p);
    botmess.appendChild(a);
    buts[0].setAttribute('disabled', 'disabled');
    Bot.scrollTop =  Bot.scrollHeight;
    if(but==1){
    messsages.removeChild(buts[1]);
    messsages.removeChild(buts[2]);
    messsages.removeChild(buts[3]);
    }
    else if (but==2){
        messsages.removeChild(buts[0]);
        messsages.removeChild(buts[2]);
        messsages.removeChild(buts[3]);
    }
    else if (but==3){
        messsages.removeChild(buts[0]);
        messsages.removeChild(buts[1]);
        messsages.removeChild(buts[3]);
    }
    else if (but==4){
        messsages.removeChild(buts[0]);
        messsages.removeChild(buts[1]);
        messsages.removeChild(buts[2]);
    }

    opros();
    
}
function CreateUserMessage(text){}

buts[0].onmousedown=function(){CreateBotMessage("Вам стоит обучить своих сотрудников простейшей защите от злоумышленников. Мы можем помочь в этом! кликните ",1,"teaching.html")};
buts[1].onmousedown=function(){CreateBotMessage("Возможно на него была совершена атака либо произошло заражение вирусами, вам стоит доверить его проверку профессионалам. Кликните ",2,"sitevirus.html")};

