// NAVBAR ON SCROLL

let navbar = document.querySelector(".navbar");

function navTransform() {
if (this.scrollY > 1) {
  navbar.classList.add("scrolled");
  }else {
    navbar.classList.remove("scrolled");
  }
};


window.addEventListener("scroll", navTransform);


// DISPLAY MOBILE MENU :

let menu = document.querySelector(".responsive");
let navicon = document.querySelector(".nav-icon");

function displayMenu(e){
  e.preventDefault();
  menu.classList.toggle("active");
}

navicon.addEventListener("click", displayMenu);


// COMPORTEMENT DES COURSES

courses = document.querySelectorAll(".course");

courses.forEach((course) => {
  const chevron = course.querySelector(".chevron");

  function deployDescription(e) {
    e.preventDefault();
    let titre = this.dataset.course;
    // QUAND JE CLIQUE, IL EXECUTE SUR LA COURSE:
    //la description
    const description = course.querySelector(".description");
    description.classList.remove("close");
    //Les chevrons
    const chevron = course.querySelector(".chevron");
    chevron.classList.add("actif");

    //les images
    const images = document.querySelectorAll(".carte img");
    images.forEach((image) => {
      if (titre === image.dataset.course) {
        image.classList.remove("close");
      } else {
        image.classList.add("close");
      }
    }); 

    // ET SUR LES AUTRES:
    courses.forEach((course) => {
      if (course != this) {
        let descriptionClose = course.querySelector(".description");
        descriptionClose.classList.add("close");

        let chevronclose = course.querySelector(".chevron");
        chevronclose.classList.remove("actif");
      }
    });
  }

  course.addEventListener("click", deployDescription);
});


// COMPORTEMENT DES CARDS D'INFO PRATIQUE

// let browser = self.navigator;

// function browserAsk() {
//   console.log(browser);
// };

// window.addEventListener("click", browserAsk);
