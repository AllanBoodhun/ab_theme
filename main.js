// NAVBAR ON SCROLL
const navbar = document.querySelector(".navbar");
if(navbar){
  window.addEventListener("scroll", () => {
    if (this.scrollY > 1 && navbar && window.innerWidth > 800) {
      navbar.classList.add("scrolled");
    }else {
      navbar.classList.remove("scrolled");
    }
  });
}

// LES PARCOURS
const parcoursCat = document.querySelector(".les-parcours");
if(parcoursCat){
  const radioInputs = document.querySelectorAll("input[name='course']");
  radioInputs.forEach(input => {
    input.addEventListener('change', displayInfo)
  })

  function displayInfo(){
    let parcoursImage = document.querySelectorAll('img.image-parcours');
    parcoursImage.forEach(image => {
      if(image.dataset.course == this.value){
        image.classList.remove('close');
      }else {
          image.classList.add('close');
        }
    })
  }
}



function isInViewport (elem, offset = 0) {
  const bounding = elem.getBoundingClientRect();
  return (bounding.top >= 0 && bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) + offset);
}

let titles = document.querySelectorAll('h2');

titles.forEach(title =>{
  window.addEventListener('scroll', ()=>{
    if( isInViewport(title)){
      title.classList.add('show');
    }
  })
})
// COMPORTEMENT DES COURSES
// COMPORTEMENT DES CARDS D'INFO PRATIQUE

// let browser = self.navigator;

// function browserAsk() {
//   console.log(browser);
// };

// window.addEventListener("click", browserAsk);


// GALLERIE PHOTOS


const years = document.querySelectorAll(".year");


function deployPictures() {
  let images = document.querySelectorAll(".year-pics");

  images.forEach((image) => {
    console.log(image.dataset.year);

    if (image.dataset.year === this.innerText){
      image.classList.remove('close');

    } else {
      image.classList.add('close');
    }
  });
};




years.forEach((year) => {
  year.addEventListener("click", deployPictures);
});

