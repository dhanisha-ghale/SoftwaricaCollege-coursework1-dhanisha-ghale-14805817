function confirmLogout() {
    // Here you would typically make a request to log out the user
    alert("You have been logged out successfully!");
    window.location.href = "login.html"; // Redirect to the login page
}

function cancelLogout() {
    window.location.href = "main.html"; // Redirect back to the homepage or dashboard
}
