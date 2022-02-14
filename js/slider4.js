const items4 = document.querySelectorAll('img.img-diapo4');
const nbSlide4 = items4.length;
const suivant4 = document.querySelector('.right4');
const precedent4 = document.querySelector('.left4');
let count4 = 0;

function slideSuivante4(){
    items4[count4].classList.remove('active');
    if(count4 < nbSlide4 - 1){
        count4++;
    } else {
        count4 = 0;
    }

    items4[count4].classList.add('active')
    console.log(count4);
    
}
suivant4.addEventListener('click', slideSuivante4)


function slidePrecedente4(){
    items4[count4].classList.remove('active');

    if(count4 > 0){
        count4--;
    } else {
        count4 = nbSlide4 - 1;
    }

    items4[count4].classList.add('active')
    // console.log(count4);
    
}
precedent4.addEventListener('click', slidePrecedente4)

function keyPress4(e){
    //console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente4();
    } else if(e.keyCode === 39){
        slideSuivante4();
    }
}
document.addEventListener('keydown', keyPress4)