var navbar=document.querySelector('.navbar')
var body= document.getElementById('body')

window.addEventListener('scroll',function(){
    let logo= document.querySelector('.logo')
    let search= document.querySelector('.search')
    if(scrollY>=20){
        navbar.classList.add('show')
        logo.style.display='none'
        search.style.display='none'
    }else{
        navbar.classList.remove('show')
        logo.style.display='block'
        search.style.display='block'
    }
})