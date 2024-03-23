// Get all notification items
const notifItems = document.querySelectorAll('.notif-item');

// Get the toggle delete icon
const toggleDeleteIcon = document.querySelector('.toggle-delete');

// Get all delete buttons
const deleteButtons = document.querySelectorAll('.delete-btn');

// Function to toggle delete buttons
function toggleDeleteButtons() {
    deleteButtons.forEach(btn => {
        btn.style.display = btn.style.display === 'none' ? 'inline-block' : 'none';
    });
}

// Add click event listener to the toggle delete icon
toggleDeleteIcon.addEventListener('click', toggleDeleteButtons);