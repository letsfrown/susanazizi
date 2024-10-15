
// Replace 'no-js' class with 'js' class to indicate JavaScript is enabled
document.documentElement.classList.replace('no-js', 'js');

// Function to initialize Swiper
function initializeSwiper() {
  var swiper = new Swiper('.swiper', {
    autoHeight: true,
    slidesPerView: 1,
    spaceBetween: 16,
    keyboard: false,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

// Function to fetch projects
const fetchProjects = async () => {
  let url = `${window.location.href}home.json/page:${page}`;
  try {
    const response = await fetch(url);
    const { html, more } = await response.json();
    
    if (html.trim().length > 0) {
      // Append HTML to the DOM
      element.insertAdjacentHTML('beforeend', html);
      // Reinitialize Swiper for newly added projects
      initializeSwiper();
    }
    
    if (!more) {
      // Hide the load more button if there are no more projects
      button.style.display = 'none';
    } else {
      // Increment page counter
      page++;
      // Move the load more button to the bottom
      element.appendChild(button);
    }
  } catch (error) {
    console.log('Fetch error: ', error);
  }
}



// Call initializeSwiper function on page load
initializeSwiper();

// Get button and element references
const button = document.querySelector('.load-more');
const element = document.querySelector('.arbeiten');
let page = parseInt(element.getAttribute('data-page'));

// Add event listener for load more button
button.addEventListener('click', fetchProjects);



// // OLD

// document.documentElement.classList.replace('no-js', 'js');

// // Swiper JS Initialization Script

// var swiper = new Swiper('.swiper', {
//   // Optional parameters
//   autoHeight: true,
//   slidesPerView: 1,
//   spaceBetween: 16,
//   keyboard: true,
//   // Navigation arrows
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
// });


// // Load more with AJAX

// const element = document.querySelector('.arbeiten');
// const button = document.querySelector('.load-more');
// let page = parseInt(element.getAttribute('data-page'));

// const fetchProjects = async () => {
//   let url = `${window.location.href}home.json/page:${page}`;
//   try {
//     const response = await fetch(url);
//     const { html, more } = await response.json();
//     button.hidden = !more;
//     element.insertAdjacentHTML('beforeend', html);
//     page++;
//   } catch (error) {
//     console.log('Fetch error: ', error);
//   }
// }

// button.addEventListener('click', fetchProjects);