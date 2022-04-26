


const tables=document.querySelector(".tables");
const bplus=document.querySelector(".bplus");
const createtable=document.querySelector(".createtable");
const createtache=document.querySelector(".createtache");
const addcolone=document.querySelector(".addcolone");
const modaletache=document.querySelector(".modaletache");
const close=document.querySelector(".close");
const btnajout=document.querySelector(".btnajout");
const menu=document.querySelector(".menu");
const taches=document.querySelector(".taches");
var tabcolor=["rgb(204, 255, 230)","rgb(255, 128, 128","rgb(51, 51, 255)","rgb(255, 255, 230)","rgb(204, 242, 255)"];
var i=0;

function ajoutable(){
  if(i<5){
    const divtable=document.createElement("div");
    const logo=document.createElement("img");
    if(i==0)
    divtable.id="0";
    const sup=document.createElement("i");
    sup.className="fa-solid fa-trash-can  sup";
    
   
    sup.addEventListener("click",function(){
        if(sup.parentElement.id=="0"){
          if(i>1)
          alert("impossible de supprimer")
          else
          sup.parentElement.remove();
          i=0 ;
          
          
       

          }
         else{
          sup.parentElement.remove();
          i--;
      }





    })
    
    logo.src="idrissa.jpg";
    logo.classList.add("logo");
    divtable.classList.add("table");
    divtable.classList.add("animemenu");
    divtable.classList.add("tableN"+i);
    const input=document.createElement("input");
    input.classList.add("input");
    input.value="COLONNE"+(i+1) ;
    divtable.appendChild(input);
    divtable.appendChild(logo);
    divtable.appendChild(sup);
    divtable.style.background=tabcolor[i];
    i++;
    tables.appendChild(divtable);

  }
  else
  alert(" Le nombre max de table est atteint");
   
}


function ajoutache(){
 
    const tache1=document.createElement("div");
    const btn1=document.createElement("button");
    btn1.classList.add("redirect1");
    btn1.innerText="<<"; 
    const btn2=document.createElement("button");
    btn2.classList.add("redirect2");
    btn2.addEventListener("click",function(){
      var a=this.parentNode;
      var b=this.parentNode.parentNode;
      var n=b.nextSibling;
      n.appendChild(a);
     if(n.nextElementSibling==null)
     tache1.removeChild(this);
     
      

   
   })

 
   btn1.addEventListener("click",function(){
    var a=this.parentNode;
    var b=this.parentNode.parentNode;
    var n=b.previousElementSibling;
    n.appendChild(a);
    a.appendChild(btn2);



   
    

 
 })

    
    btn2.innerText=">>"; 
    tache1.appendChild(btn1);
    tache1.appendChild(btn2);
    const tableN0=document.querySelector(".tableN0");
    tableN0.appendChild(tache1);
     

    
    
    

}
btnajout.addEventListener("click",ajoutache);


createtable.addEventListener("click",ajoutable);
bplus.addEventListener("click",function(){
  createtable.style.visibility="visible";
  createtache.style.visibility="visible";
  menu.style.display="block";

})

addcolone.addEventListener("click",function(){




})

createtache.addEventListener("click",function(){
if(i>0) {
  modaletache.classList.toggle("block");
  taches.classList.toggle("bloc")
  
  close.parentNode.parentNode.classList.remove("none");   
}
else
alert("vous devez au moins creer une table")


})

close.addEventListener("click",function(){
  taches.classList.toggle("bloc")
  
 

})


