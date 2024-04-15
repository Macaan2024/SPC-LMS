document.addEventListener('DOMContentLoaded', function () {
    const selectElement = document.getElementById('yearLevelSelect');

    selectElement.addEventListener('change', function() {
        const yearLevel = this.value;
        fetch(/books/${yearLevel})
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                updateBooksDisplay(data);
            })
            .catch(error => console.error('Error fetching data:', error));
    });

    function updateBooksDisplay(data) {
        const container = document.querySelector('.books-container');
        container.innerHTML = ''; // Clear existing content

        Object.entries(data).forEach(([category, books]) => {
            const categoryDiv = document.createElement('div');
            categoryDiv.className = 'category';
            const categoryName = document.createElement('h3');
            categoryName.textContent = category;
            categoryDiv.appendChild(categoryName);

            books.forEach(book => {
                const bookDiv = document.createElement('div');
                bookDiv.className = 'book';
                // Update the path to match the structure used in your Blade template
                const imagePath = /images/${category}/${book.image};
                bookDiv.innerHTML = `<img src="${imagePath}" alt="${book.title}" style="width: 100%; height: 100%; object-fit: fill;">
                                     <p>${book.title}</p>`;
                categoryDiv.appendChild(bookDiv);
            });

            container.appendChild(categoryDiv);
        });
    }
});