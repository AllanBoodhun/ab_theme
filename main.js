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

const allYearsInput = document.querySelectorAll('input[name="years"]');
if(allYearsInput){
 allYearsInput.forEach(input =>{
   input.addEventListener('click',() => {
    displayYearContent()
   })
 })
}


function displayYearContent(){
  let inputChecked = document.querySelector('input[name="years"]:checked');
  let yearsContent = document.querySelectorAll(`[data-year]`);

  yearsContent.forEach(year => {
    if(year.dataset.year == inputChecked.id){
      year.classList.remove('hidden')
    } else {
      year.classList.add('hidden')
    }
  })

}