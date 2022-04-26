const container=document.getElementById('container');
const Precedent=document.querySelector('.Precedent');
const slide=document.getElementsByName('slide');
// console.log(Precedent);
const Suivant=document.querySelector('.Suivant');
//console.log(Suivant);
const img=[   'img/img1.jpg',
                'img/img2.jpg',
                'img/img3.jpg',
                'img/img4.jpg',
                'img/img5.jpg',
                'img/img6.jpg',
                'img/img7.jpg',
                'img/img9.jpg',
                'img/img10.jpg',
                'img/img11.jpg',
                'img/img12.jpg',



            ];
            var i=0;
         
           
 var nbr=img.length;      
function ajouterImage(){
    document.slide.src=img[i];
    if (i<nbr-1) {
        i++;
        
    }
    else
        i=0;
    setTimeout(ajouterImage,2000);
}

window.onload=ajouterImage;

Precedent.addEventListener('click',ajouterImage);
Suivant.addEventListener('click',ajouterImage);
