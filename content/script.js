document.addEventListener('DOMContentLoaded', function() {
    // Select the button and the nav ul
    var button = document.querySelector('nav button');
    var navUl = document.querySelector('nav ul');

    // Add a click event listener to the button
    button.addEventListener('click', function() {
        // Toggle the 'show' class on the nav ul
        navUl.classList.toggle('show');
    });
});
