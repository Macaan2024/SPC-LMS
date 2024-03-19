// the purpose of this function is for selection year level in landing page
function dashRedirectToPage() {
    var selectBox = document.getElementById("education_level");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue) {
        window.location.href = selectedValue;
    }
}
