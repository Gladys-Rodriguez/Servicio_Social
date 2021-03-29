/* ==== MENU SHOW Y HIDDEN ==== */
const navMenu = document.getElementById('nav-menu'),
      toggleMenu = document.getElementById('nav-toggle'),
      closeMenu = document.getElementById('nav-close'),
      ContePrin = document.getElementById('conte-prin')


/* SHOW */
toggleMenu.addEventListener('click', ()=>{
    navMenu.classList.toggle('show')
})

/* HIDDEN */
closeMenu.addEventListener('click', ()=>{
    navMenu.classList.remove('show')
})


/* ==== ACTIVE AND REMOVE MENU ====*/
const navLink = document.querySelectorAll('.nav_link')

function linkAction(){
    //Active link
    navLink.forEach(n=> n.classList.remove('active'))
    this.classList.add('active')

    //Remove menu mobile
    navMenu.classList.remove('show') //desaparece el menu al dar click
}

navLink.forEach(n => n.addEventListener('click', linkAction))
