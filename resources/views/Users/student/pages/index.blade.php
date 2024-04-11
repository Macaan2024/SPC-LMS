<x-student.landing-layout>
    <div class="d-flex justify-content-center mb-5">
        <div class="d-flex align-items-center px-3 mt-5 gap-3" style="width:80%;">
            <label for="" class="text-nowrap">Year Level : </label>
            <select class="form-select" aria-label="Default select example">
                <option selected>College</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    @foreach ($displaybooks as $displaybook)
        <div class="d-flex justify-content-between px-3 p-0 mb-2">
            <h6 class="text-left p-0 m-0 fw-normal">{{ $displaybook->category }}</h6>
            <a class="text-black text-decoration-none" href="">View All</a>
        </div>
        <div class="book-container py-4 px-3">  
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex gap-3 justify-content-center align-items-center">
                            @foreach ($displaybooks as $displaybook)
                                <div class="d-flex flex-column">
                                    <div style="height:150px; width:150px;">
                                        <img src="{{ asset('images/BSIT/' . $displaybook->image) }}" class="d-block object-fit-fill" style="height:100%; width:100%; border-radius:5px;" alt="{{ $displaybook->alt_text ?? 'Book Image' }}">
                                    </div>
                                    <button style="width:150px;" class="request-btn py-1 mt-2">Request Reserve</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div style="height:150px; width:150px;">
                                <img src="images/BSIT/book2.png" class="d-block object-fit-fill" style="height:100%; width:100%; border-radius:5px;" alt="...">
                            </div>
                            <button style="width:150px;" class="request-btn py-1 mt-2">Request Reserve</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev p-0 m-0" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <div style="background-color:#661011;" class="rounded-circle d-flex justify-content-center align-items-center m-0 p-1">    
                        <span class="carousel-control-prev-icon m-0 p-0" aria-hidden="true"></span>
                    </div>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <div style="background-color:#661011;" class="rounded-circle d-flex justify-content-center align-items-center m-0 p-1">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </div>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endforeach
    <!-- Display each year book lists component -->
    <x-student.index.yearBookList/>
</x-student.landing-layout>