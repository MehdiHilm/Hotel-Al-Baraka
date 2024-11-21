
AOS.init({
  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 900, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});


// Get today's date in the format yyyy-mm-dd
const today = new Date().toISOString().split('T')[0];

// Set the value of the input field to today's date
document.getElementById('checkin').value = today;

const checkoutDate = new Date();
checkoutDate.setDate(checkoutDate.getDate() + 1);

// Set the value of the "checkout" input field to the new date
document.getElementById('checkout').value = checkoutDate.toISOString().split('T')[0];


