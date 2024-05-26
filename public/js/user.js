let drop= document.querySelector('.drop')
let dropdown= document.querySelector('.dropdown')
let console= document.querySelector('.console')
let consolegame= document.querySelector('.consolegame')
let rotate= document.getElementById('drop')
let rotate1= document.getElementById('drop1')
let input= document.getElementById('input')
let search= document.getElementById('search')

drop.addEventListener('click', function(){
    dropdown.classList.toggle('show');
})
drop.addEventListener('mouseleave', function(){
    dropdown.classList.remove('show');
})
drop.addEventListener('click', function(){
    rotate.classList.toggle('rotate')
})
drop.addEventListener('mouseleave', function(){
    rotate.classList.remove('rotate')
})
console.addEventListener('click', function(){
    consolegame.classList.toggle('show');
})
console.addEventListener('mouseleave', function(){
    consolegame.classList.remove('show');
})
console.addEventListener('click', function(){
    rotate1.classList.toggle('rotate')
})
console.addEventListener('mouseleave', function(){
    rotate1.classList.remove('rotate')
})

search.onclick=function(){
    if(input.value==''){
        let erreur= document.getElementById('erreur')
        erreur.style.display='block'
    }
    else{
        alert("Pas de correspondance pour "+ "'"+input.value+"'")
    }
}


const scrollerItems = document.querySelectorAll('.scroller-item');

function showNextImage() {
  let activeIndex = 0;
  scrollerItems.forEach((item, index) => {
    if (item.classList.contains('active')) {
      activeIndex = index;
    }
    item.classList.remove('active');
  });

  activeIndex = (activeIndex + 1) % scrollerItems.length;
  scrollerItems[activeIndex].classList.add('active');
}

scrollerItems[0].classList.add('active');
setInterval(showNextImage, 3000);