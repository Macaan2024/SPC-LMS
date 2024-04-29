document.addEventListener('DOMContentLoaded', function() {
    var classLevelSelect = document.getElementById('classLevelSelect');

    classLevelSelect.addEventListener('change', function() {
        // Hide all divs initially
        var elements = document.querySelectorAll('.College, .Shs, .Jhs, .Elem');
        elements.forEach(function(element) {
            element.style.display = 'none';
        });

        // Show the divs corresponding to the selected option
        var selectedLevel = this.value;
        if (selectedLevel === 'College') {
            document.querySelectorAll('.College').forEach(function(element) {
                element.style.display = 'block';
            });
        } else if (selectedLevel === 'Senior Highschool') {
            document.querySelectorAll('.Shs').forEach(function(element) {
                element.style.display = 'block';
            });
            document.getElementById('Section').style.display = 'block';
        } else if (selectedLevel === 'Junior Highschool') {
            document.querySelectorAll('.Jhs').forEach(function(element) {
                element.style.display = 'block';
            });
            document.getElementById('Section').style.display = 'block';
        } else if (selectedLevel === 'Elementary') {
            document.querySelectorAll('.Elem').forEach(function(element) {
                element.style.display = 'block';
            });
            document.getElementById('Section').style.display = 'block';
        }
    });
});
