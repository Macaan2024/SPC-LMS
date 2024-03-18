// Function to handle login button click
function handleLogin() {
    // Get the username and password input values
    const username = document.querySelector('#username').value;
    const password = document.querySelector('#password').value;

    // Perform validation on the input values
    if (username.trim() === '' || password.trim() === '') {
        alert('Please enter both username and password');
        return;
    }

    // Send a request to the server to authenticate the user
    // You can use AJAX, fetch, or any other method to send the request
    // Example using fetch:
    fetch('/api/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username, password })
    })
    .then(response => {
        if (response.ok) {
            // User is authenticated, redirect to dashboard
            window.location.href = '/dashboard';
        } else {
            // Authentication failed, display error message
            alert('Invalid username or password');
        }
    })
    .catch(error => {
        console.error('An error occurred during login:', error);
        alert('An error occurred during login. Please try again later.');
    });
}

// Function to handle search button click
function handleSearch() {
    // Get the search input value
    const searchInput = document.querySelector('#searchInput').value;

    // Perform search logic here
    // Example: Display search results or filter data based on search input

    // Clear the search input value
    document.querySelector('#searchInput').value = '';
}

// Function to handle grade selection change
function handleGradeSelection() {
    // Function to handle grade selection change
    function handleGradeSelection() {
        // Get the selected grade value
        const selectedGrade = document.querySelector('#college').value;

        // Perform grade selection logic here
        // Example: Display specific content based on selected grade

        // Add your grade selection logic here
        if (selectedGrade === 'grade7') {
            // Display content for grade 7
        } else if (selectedGrade === 'grade8') {
            // Display content for grade 8
        } else if (selectedGrade === 'grade9') {
            // Display content for grade 9
        } else if (selectedGrade === 'grade10') {
            // Display content for grade 10
        }
    }
}

// Function to handle view all button click
function handleViewAll() {
     {
            // Add your view all logic here
            // Example: Display all content or load more data
            const allContent = document.querySelectorAll('.content');
            allContent.forEach(content => {
                content.style.display = 'block';
            });
        }
        // Example: Display all content or load more data
    }


// Function to handle image click
function handleImageClick(imageAlt) {
   
        // Add your image click logic here
        console.log(`Image clicked: ${imageAlt}`);
        // Example: Perform some action based on the clicked image
    }


// Function to handle responsive behavior
function handleResponsive() {
        // Get the window width
        const windowWidth = window.innerWidth;

        // Check the window width and perform responsive behavior
        if (windowWidth < 768) {
            // Perform responsive behavior for small screens
            // Example: Hide certain elements or change their layout
            console.log('Small screen');
        } else if (windowWidth >= 768 && windowWidth < 1024) {
            // Perform responsive behavior for medium screens
            // Example: Adjust element sizes or positions
            console.log('Medium screen');
        } else {
            // Perform responsive behavior for large screens
            // Example: Display additional content or change the layout
            console.log('Large screen');
        }
    }

    // Call the responsive function on page load and window resize
    window.addEventListener('load', handleResponsive);
    window.addEventListener('resize', handleResponsive);


// Attach event listeners
document.querySelector('.button').addEventListener('click', handleLogin);
document.querySelector('.search').addEventListener('click', handleSearch);
document.querySelector('#college').addEventListener('change', handleGradeSelection);
document.querySelectorAll('.view1 button, .view2 button, .view3 button, .view4 button').forEach(function(button) {
    button.addEventListener('click', handleViewAll);
});
document.querySelectorAll('.grade7 img, .grade8 img, .grade9 img, .grade10 img').forEach(function(image) {
    image.addEventListener('click', function() {
        handleImageClick(image.alt);
    });
});

// Call the responsive function on page load and window resize
window.addEventListener('load', handleResponsive);
window.addEventListener('resize', handleResponsive);
