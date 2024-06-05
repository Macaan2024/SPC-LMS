<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <style>
        body {
            padding-top: 80px;
        }

        * {box-sizing:border-box}

        /* Slideshow container */
        .slideshow-container {
        max-width: 100%;
        position: relative;
        margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
        display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
        }
    </style>
<body>
    <nav class="navbar navbar-light bg-light fixed-top flex-nowrap px-2 px-sm-5 py-3 shadow-sm">
        <div class="navbar-brand">
            <h5 class="p-0 m-0 fw-bolder text-nowrap" style="letter-spacing: 3px; color:#661011;">SPC LIBRARY</h5>
        </div>
        <div>
            <button class="text-white border-0 py-2 px-3" style="background-color:#661011;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" >LOGIN</button>
        </div>
    </nav>
    <x-student.modalLogin />
    <div class="container-fluid">
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="{{ asset('library/pic1.jpg') }}" style="width:100%; height:350px;" class="object-fit-cover">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="{{ asset('library/pic2.jpg') }}" style="width:100%; height:350px;" class="object-fit-cover">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="{{ asset('library/pic3.jpg') }}" style="width:100%; height:350px;" class="object-fit-cover">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="{{ asset('library/pic4.jpg') }}" style="width:100%; height:350px;" class="object-fit-cover">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="{{ asset('library/pic5.jpg') }}" style="width:100%; height:350px;" class="object-fit-cover">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="{{ asset('library/pic6.jpg') }}" style="width:100%; height:350px;" class="object-fit-cover">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    
    <div class="container-xxl p-0 mt-5">
        <div class="row bg-light-subtle shadow-sm p-3 gap-5 justify-content-center">
            <div class="col-3 shadow-sm bg-white  p-3">
                <div class="d-flex flex-column">
                    <h6>Vision</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus itaque minima laudantium repudiandae consequatur sint fuga iusto vero, minus necessitatibus velit saepe inventore. Autem temporibus explicabo provident hic corporis doloribus!</p>
                </div>
            </div>
            <div class="col-3 shadow-sm bg-white p-3">
                <div class="d-flex flex-column">
                    <h6>Mission</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus itaque minima laudantium repudiandae consequatur sint fuga iusto vero, minus necessitatibus velit saepe inventore. Autem temporibus explicabo provident hic corporis doloribus!</p>
                </div>
            </div>
            <div class="col-3 shadow-sm bg-white p-3">
                <div class="d-flex flex-column">
                    <h6>Objective</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus itaque minima laudantium repudiandae consequatur sint fuga iusto vero, minus necessitatibus velit saepe inventore. Autem temporibus explicabo provident hic corporis doloribus!</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>