// script.js
document.querySelector('form').addEventListener('submit', function (event) {
    const gender = document.getElementById('gender').value;
    if (gender !== 'male' && gender !== 'female') {
        event.preventDefault();
        alert('Please select a valid gender.');
    }
});
