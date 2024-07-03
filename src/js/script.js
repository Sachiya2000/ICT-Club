/* javaScript Toggle Menu */
var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
}

function hiddenMenu(){
    navLinks.style.right = "-200px";
}

/*profile card slider */
document.addEventListener ('DOMContentLoaded', function () {
  const carousel = document.querySelector ('.carousel');
  const arrowBtns = document.querySelectorAll ('.wrapper i');
  const wrapper = document.querySelector ('.wrapper');

  const firstCard = carousel.querySelector ('.card');
  const firstCardWidth = firstCard.offsetWidth;

  let isDragging = false, startX, startScrollLeft, timeoutId;

  const dragStart = e => {
    isDragging = true;
    carousel.classList.add ('dragging');
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
  };

  const dragging = e => {
    if (!isDragging) return;

    // Calculate the new scroll position
    const newScrollLeft = startScrollLeft - (e.pageX - startX);

    // Check if the new scroll position exceeds
    // the carousel boundaries
    if (
      newScrollLeft <= 0 ||
      newScrollLeft >= carousel.scrollWidth - carousel.offsetWidth
    ) {
      // If so, prevent further dragging
      isDragging = false;
      return;
    }

    // Otherwise, update the scroll position of the carousel
    carousel.scrollLeft = newScrollLeft;
  };

  const dragStop = () => {
    isDragging = false;
    carousel.classList.remove ('dragging');
  };

  const autoPlay = () => {
    // Return if window is smaller than 800
    if (window.innerWidth < 800) return;

    // Calculate the total width of all cards
    const totalCardWidth = carousel.scrollWidth;

    // Calculate the maximum scroll position
    const maxScrollLeft = totalCardWidth - carousel.offsetWidth;

    // If the carousel is at the end, stop autoplay
    if (carousel.scrollLeft >= maxScrollLeft) return;

    // Autoplay the carousel after every 2500ms
    timeoutId = setTimeout (
      () => (carousel.scrollLeft += firstCardWidth),
      2500
    );
  };

  carousel.addEventListener ('mousedown', dragStart);
  carousel.addEventListener ('mousemove', dragging);
  document.addEventListener ('mouseup', dragStop);
  wrapper.addEventListener ('mouseenter', () => clearTimeout (timeoutId));
  wrapper.addEventListener ('mouseleave', autoPlay);

  // Add event listeners for the arrow buttons to
  // scroll the carousel left and right
  arrowBtns.forEach (btn => {
    btn.addEventListener ('click', () => {
      carousel.scrollLeft += btn.id === 'left'
        ? -firstCardWidth
        : firstCardWidth;
    });
  });
});

// /* see more button */function displayList () {
//   // Your existing code for displaying the list goes here

//   // Add the new code snippet
//   const seeMoreBtn = document.getElementById ('seeMoreBtn');
//   const hiddenContents = document.querySelectorAll ('#work-display-list');

//   seeMoreBtn.addEventListener ('click', function () {
//     hiddenContents.forEach (function (hiddenContent) {
//       if (
//         hiddenContent.style.display === 'none' ||
//         hiddenContent.style.display === ''
//       ) {
//         hiddenContent.style.display = 'block';
//       } else {
//         hiddenContent.style.display = 'none';
//       }
//     });

//     seeMoreBtn.textContent = seeMoreBtn.textContent === 'See Less'
//       ? 'See More'
//       : 'See Less';
//   });
// }

