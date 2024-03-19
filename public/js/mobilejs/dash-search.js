
document.getElementById('names').addEventListener('change', function () {
    var selectedOption = this.options[this.selectedIndex];
    var placeholderText = 'Search Book ';

    if (selectedOption.value === 'id') {
        placeholderText += 'ID';
    } else if (selectedOption.value === 'title') {
        placeholderText += 'Title';
    } else if (selectedOption.value === 'author') {
        placeholderText += 'Author';
    } else if (selectedOption.value === 'isbn') {
        placeholderText += 'ISBN';
    }

    document.getElementById('search').placeholder = placeholderText;
});
