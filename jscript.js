const navToggler = document.querySelector('.nav-toggler'); const navMenu = document.querySelector('.site-navbar ul'); const navLinks = document.querySelectorAll('.site-navbar a'); 
 allEventListners(); 
  function allEventListners() { 
  navToggler.addEventListener('click', togglerClick); 
   navLinks.forEach( elem => elem.addEventListener('click', navLinkClick)); }
  function togglerClick() { navToggler.classList.toggle('toggler-open'); navMenu.classList.toggle('open'); } 
  function navLinkClick() { if(navMenu.classList.contains('open')) { navToggler.click(); } };
 
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {
  slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
 slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
};


function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Ooops!!!! can't register 'please check if the field is correctly filled ' ");
    return false;
  }
};
const greeting = document.getElementById('greeting');
const hour = new Date().getHours();
const welcomeTypes = ['Good morning', 'Good afternoon', 'Good evening'];

let welcomeText = '';
if (hour < 12) welcomeText = welcomeTypes[0]; else if (hour < 18) welcomeText = welcomeTypes[1];
 else welcomeText = welcomeTypes[2];
 
greeting.innerHTML = welcomeText;

function myFunction() {
  alert("Self motivated Ability to work under pressureHobbies I like reading novels, Analyzing information and things around me, I like watching series and listening to music!!!");
}

 function myFunction1() {
  alert("ABOUT PROJECT____StudyEbuddy was programmed to track the studect progress on their studies");
}
function myFunction2() {
  alert("ABOUT PROJECT____My Portfolio Website ,One of my school projects where i was asked to design my web portfolio");
}

function myFunction3() {
  alert("ABOUT PROJECT____Designing the Graphic of Fake Product,Fake is a brand name which i got to design the back cover of the bottle");
}

function myFunction4() {
  alert("ABOUT PROJECT____Designing the Graphic of Allula Product,Allura is a face lotion and i was behind the designing of the cover");
}



