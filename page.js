// Simple script to handle newsletter subscription
document.getElementById('newsletter-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = document.getElementById('email').value;
    if (email) {
        alert('Thank you for subscribing, ' + email + '!');
        document.getElementById('email').value = '';
    } else {
        alert('Please enter a valid email address.');
    }
});

