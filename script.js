const creernewdiv=document.getElementById("creernewdiv")
const flex=document.getElementById("flex")
const buton=document.querySelectorAll("button");
 
    for(let i=0;i<buton.length;i++){
        buton[i].addEventListener('click',function(e) {
            classM =e.target.classList[0]
            notification(classM)
            
        })

    }

 function notification(classNew){
     var new1=document.createElement("div");
     var nomnotification=document.createElement("h1");
     nomnotification.innerHTML="Mon projet 4";
     new1.appendChild(nomnotification);
     new1.className=classNew
     new1.classList.add("flex")
     
     creernewdiv.appendChild(new1); 
     setTimeout(function(){creernewdiv.removeChild(new1)},2000)
 }