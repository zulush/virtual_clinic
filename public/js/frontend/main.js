/*==================== SHOW MENU ====================*/
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    
    // Validate that variables exist
    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== CHANGE BACKGROUND HEADER ====================*/ 
function scrollHeader(){
    const nav = document.getElementById('header')
    // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 200) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*==================== SHOW SCROLL TOP ====================*/ 
function scrollTop(){
    const scrollTop = document.getElementById('scroll-top');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)

/*==================== DARK LIGHT THEME ====================*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-toggle-right'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-toggle-left' : 'bx-toggle-right'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx-toggle-left' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/*==================== SCROLL REVEAL ANIMATION ====================*/
const sr = ScrollReveal({
    distance: '30px',
    duration: 1800,
    reset: true,
});

sr.reveal(`.home__data, .home__img, 
           .decoration__data,
           .accessory__content,
           .footer__content`, {
    origin: 'top',
    interval: 200,
})

sr.reveal(`.share__img, .send__content`, {
    origin: 'left'
})

sr.reveal(`.share__data, .send__img`, {
    origin: 'right'
})

/* ============= contact form =============*/

BtnPatient = document.getElementById("patient");
BtnDoctor = document.getElementById("doctor");
PatientSignin = document.getElementById("patientSignin");
PatientSignup = document.getElementById("patientSignup");
DoctorSignin = document.getElementById("doctorSignin");
DoctorSignup = document.getElementById("doctorSignup");
titreSignPatient = document.getElementById("titreSignPatient");
titreSignDoctor = document.getElementById("titreSignDoctor");
titresignupPat = document.getElementById("titresignupPat");
titresigninPat = document.getElementById("titresigninPat");
titresignupDoc = document.getElementById("titresignupDoc");
titresigninDoc = document.getElementById("titresigninDoc");
forgPatient = document.getElementById("forgPatient");

window.onload = function(){
  titreSignPatient.style.display = "block";
  titreSignDoctor.style.display = "none";
  PatientSignin.style.display = "block";
  PatientSignup.style.display = "none";
  DoctorSignin.style.display = "none";
  DoctorSignup.style.display = "none";
};

BtnDoctor.onclick = (()=>{
  titreSignDoctor.style.display = "block";  
  DoctorSignin.style.display = "block";
  titreSignPatient.style.display = "none";
  PatientSignin.style.display = "none";
  PatientSignup.style.display = "none";
  DoctorSignup.style.display = "none";
})

BtnPatient.onclick = (()=>{
  titreSignDoctor.style.display = "none";  
  PatientSignin.style.display = "block";
  titreSignPatient.style.display = "block";
  DoctorSignin.style.display = "none";
  PatientSignup.style.display = "none";
  DoctorSignup.style.display = "none";
})

titresigninPat.onclick = (()=>{
  titreSignDoctor.style.display = "none";  
  PatientSignin.style.display = "block";
  titreSignPatient.style.display = "block";
  DoctorSignin.style.display = "none";
  PatientSignup.style.display = "none";
  DoctorSignup.style.display = "none";
})

titresignupPat.onclick = (()=>{
  titreSignDoctor.style.display = "none";  
  PatientSignin.style.display = "none";
  titreSignPatient.style.display = "block";
  DoctorSignin.style.display = "none";
  PatientSignup.style.display = "block";
  DoctorSignup.style.display = "none";
})

titresigninDoc.onclick = (()=>{
  titreSignDoctor.style.display = "block";  
  PatientSignin.style.display = "none";
  titreSignPatient.style.display = "none";
  DoctorSignin.style.display = "block";
  PatientSignup.style.display = "none";
  DoctorSignup.style.display = "none";
})

titresignupDoc.onclick = (()=>{
  titreSignDoctor.style.display = "block";  
  PatientSignin.style.display = "none";
  titreSignPatient.style.display = "none";
  DoctorSignin.style.display = "none";
  PatientSignup.style.display = "none";
  DoctorSignup.style.display = "block";
})