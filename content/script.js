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


var forms = document.querySelectorAll('form');
forms.forEach(function(form) {
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    // create a URLSearchParams object from the form data
    var formData = new URLSearchParams(new FormData(event.target));

    // send a fetch request to the PHP file
    fetch('submit.php?' + formData.toString())
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.text(); // Parse the response as text
      })
      .then(text => {
        console.log('Received text response:', text); // Log the text response
        // No need to parse the response as JSON since it's already handled in PHP
        // Process the response as needed
      })
      .then(result => {
        // Show the result for each section
        alert(result);
      })
      .catch(error => {
        console.error('Error:', error);
      });
  });
});
