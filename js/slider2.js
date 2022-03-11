const items2 = document.querySelectorAll('img.img-diapo2');
const nbSlide2 = items2.length;
const suivant2 = document.querySelector('.right2');
const precedent2 = document.querySelector('.left2');
let count2 = 0;

function slideSuivante2(){
    items2[count2].classList.remove('active');
    if(count2 < nbSlide2 - 1){
        count2++;
    } else {
        count2 = 0;
    }

    items2[count2].classList.add('active')
    //console.log(count2);
    
}
suivant2.addEventListener('click', slideSuivante2)


function slidePrecedente2(){
    items2[count2].classList.remove('active');

    if(count2 > 0){
        count2--;
    } else {
        count2 = nbSlide2 - 1;
    }

    items2[count2].classList.add('active')
    // console.log(count2);
    
}
precedent2.addEventListener('click', slidePrecedente2)

function keyPress2(e){
    //console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente2();
    } else if(e.keyCode === 39){
        slideSuivante2();
    }
}
document.addEventListener('keydown', keyPress2)