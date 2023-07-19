//navigation code

const navToggler = document.querySelector('.nav-toggler'); const navMenu = document.querySelector('.site-navbar ul'); const navLinks = document.querySelectorAll('.site-navbar a'); 
 allEventListners(); 
  function allEventListners() { 
  navToggler.addEventListener('click', togglerClick); 
   navLinks.forEach( elem => elem.addEventListener('click', navLinkClick)); }
  function togglerClick() { navToggler.classList.toggle('toggler-open'); navMenu.classList.toggle('open'); } 
  function navLinkClick() { if(navMenu.classList.contains('open')) { navToggler.click(); } };
 
 //slide show javascript
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

//form validation javascript
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Ooops!!!! can't register 'please check if the field is correctly filled ' ");
    return false;
  }
};
//greeting javascript
const greeting = document.getElementById('greeting');
const hour = new Date().getHours();
const welcomeTypes = ['Good morning', 'Good afternoon', 'Good evening'];

let welcomeText = '';
if (hour < 12) welcomeText = welcomeTypes[0]; else if (hour < 18) welcomeText = welcomeTypes[1];
 else welcomeText = welcomeTypes[2];
 
greeting.innerHTML = welcomeText;

//Modal start

