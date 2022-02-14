const items3 = document.querySelectorAll('img.img-diapo3');
const nbSlide3 = items3.length;
const suivant3 = document.querySelector('.right3');
const precedent3 = document.querySelector('.left3');
let count3 = 0;

function slideSuivante3(){
    items3[count3].classList.remove('active');
    if(count3 < nbSlide3 - 1){
        count3++;
    } else {
        count3 = 0;
    }

    items3[count3].classList.add('active')
    console.log(count3);
    
}
suivant3.addEventListener('click', slideSuivante3)


function slidePrecedente3(){
    items3[count3].classList.remove('active');

    if(count3 > 0){
        count3--;
    } else {
        count3 = nbSlide3 - 1;
    }

    items3[count3].classList.add('active')
    // console.log(count3);
    
}
precedent3.addEventListener('click', slidePrecedente3)

function keyPress3(e){
    //console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente3();
    } else if(e.keyCode === 39){
        slideSuivante3();
    }
}
document.addEventListener('keydown', keyPress3)