//nav button for mobile
document.addEventListener('DOMContentLoaded', function () {
    // Select the button and the nav ul
    var button = document.querySelector('nav button');
    var navUl = document.querySelector('nav ul');

    // Add a click event listener to the button
    button.addEventListener('click', function() {
        // Toggle the 'show' class on the nav ul
        navUl.classList.toggle('show');
    });
});
//backToTop button
document.getElementById("topBtn").addEventListener("click", topFunction);
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("topBtn").style.display = "block";
  } else {
    document.getElementById("topBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
