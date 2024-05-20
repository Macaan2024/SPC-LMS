// Function to handle the login button click
function handleLogin() {
    // Add your login logic here
    console.log("Login button clicked");
}

// Function to handle the search button click
function handleSearch() {
    // Add your search logic here
    console.log("Search button clicked");
}

// Function to handle the grade selection change
function handleGradeSelection() {
    // Add your grade selection logic here
    console.log("Grade selection changed");
}

// Function to handle the view all button click
function handleViewAll() {
    // Add your view all logic here
    console.log("View all button clicked");
}

// Add event listeners to the buttons and select elements
document.querySelector(".button").addEventListener("click", handleLogin);
document.querySelector(".search").addEventListener("click", handleSearch);
document.querySelector("#college").addEventListener("change", handleGradeSelection);
document.querySelector(".view1 button").addEventListener("click", handleViewAll);
document.querySelector(".view2 button").addEventListener("click", handleViewAll);
document.querySelector(".view3 button").addEventListener("click", handleViewAll);
document.querySelector(".view4 button").addEventListener("click", handleViewAll);
document.querySelector(".view5 button").addEventListener("click", handleViewAll);
