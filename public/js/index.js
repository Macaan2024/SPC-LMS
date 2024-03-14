function searchs() {
    let x = document.forms["myForm"]["search"].value;
    let y = document.getElementById("contentTop");
    let search = document.getElementById("search-box");
    if (x == "") {
      y.style.display = "none";
      search.style.display = "block";
      return false;
    }
}