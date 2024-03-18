// Function to handle login button click
function handleLogin() {
    // Add your login logic here
}

// Function to handle search button click
function handleSearch() {
    // Add your search logic here
}

// Function to handle class level selection change
function handleClassLevelChange() {
    // Add your class level change logic here
}

// Function to handle view all button click
function handleViewAll() {
    // Add your view all logic here
}

// Function to handle image click
function handleImageClick(imageAlt) {
    // Add your image click logic here
}

// Function to handle responsive behavior
function handleResponsive() {
    // Add your responsive behavior logic here
}

// Attach event listeners
document.querySelector('.button').addEventListener('click', handleLogin);
document.querySelector('.search').addEventListener('click', handleSearch);
document.querySelector('#college').addEventListener('change', handleClassLevelChange);
document.querySelector('.view1 button').addEventListener('click', handleViewAll);
document.querySelector('.view2 button').addEventListener('click', handleViewAll);
document.querySelector('.view3 button').addEventListener('click', handleViewAll);
document.querySelector('.view4 button').addEventListener('click', handleViewAll);
document.querySelector('.view5 button').addEventListener('click', handleViewAll);
document.querySelectorAll('.stem img').forEach(img => {
    img.addEventListener('click', () => handleImageClick(img.alt));
});
document.querySelectorAll('.humss img').forEach(img => {
    img.addEventListener('click', () => handleImageClick(img.alt));
});
document.querySelectorAll('.abm img').forEach(img => {
    img.addEventListener('click', () => handleImageClick(img.alt));
});
document.querySelectorAll('.gas img').forEach(img => {
    img.addEventListener('click', () => handleImageClick(img.alt));
});
document.querySelectorAll('.arts img').forEach(img => {
    img.addEventListener('click', () => handleImageClick(img.alt));
});

// Call the responsive function on page load and window resize
window.addEventListener('load', handleResponsive);
window.addEventListener('resize', handleResponsive);
