/* ==== MENU SHOW Y HIDDEN ==== */
const navMenu = document.getElementById('nav-menu'),
      toggleMenu = document.getElementById('nav-toggle'),
      closeMenu = document.getElementById('nav-close'),
      headerLog = document.getElementById('header-logo'),
      subMenu =  document.getElementById('sub_menu')


/* SHOW */
toggleMenu.addEventListener('click', ()=>{
    navMenu.classList.toggle('show')
    headerLog.classList.toggle('hide')
    toggleMenu.classList.toggle('hide')
    //subMenu.classList.slideToggle()

})



/* HIDDEN */
closeMenu.addEventListener('click', ()=>{
    navMenu.classList.remove('show')
    headerLog.classList.remove('hide')
    toggleMenu.classList.remove('hide')
})


/* ==== ACTIVE AND REMOVE MENU ====*/
const navLink = document.querySelectorAll('.nav_link')

function linkAction(){
    //Active link
    navLink.forEach(n=> n.classList.remove('active'))
    this.classList.add('active')

    //Remove menu mobile
    navMenu.classList.remove('show') //desaparece el menu al dar click
    headerLog.classList.remove('hide')
    toggleMenu.classList.remove('hide')

}

navLink.forEach(n => n.addEventListener('click', linkAction))

// Scroll sections
const sections = document.querySelector('section[id]')

window.addEventListener('scroll', scrollActive)

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.add('active')
        } else{
            document.querySelector('.nav_menu a[href*=' + sectionId + ']').classList.remove('active')
        }
    })
}
