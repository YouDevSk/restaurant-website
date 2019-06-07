// scroll to dishes section

const arrowDown = document.querySelector("#scroll_to_dishes");
const dishes    = document.querySelector('#dishes').offsetTop;

arrowDown.addEventListener('click', (e)=> {
  e.preventDefault();
  window.scrollTo({
    top: (dishes - 80),
    behavior: 'smooth'
  });
})

// OPENING HOURS TABLE

let dt = new Date();
let day = dt.getDay();

let rows = document.querySelectorAll('.tr')


Array.from(rows).forEach( (row, i) =>{
  row.id = i + 1;

  if (row.getAttribute('id') == dt.getDay()) {
    row.classList.add('uk-background-muted')
  }

  if (row.getAttribute('id') == 7) {
    row.id = 0;
  }
})