window.onload = function() {
    var homeUrl = "{{ route('college') }}"; // Update with your actual home route
    var requestButton = document.querySelector(".request button");
    requestButton.addEventListener("click", function() {
        alert("You have successfully reserved this book");
        window.location.href = homeUrl; // Redirect to the home page
    });
}