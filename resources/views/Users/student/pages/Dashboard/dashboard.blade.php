<x-student.layout>
    {{-- SELECTION OF YEAR LEVEL --}}
    <x-slot name="dashboard" class="">
        <div class="container px-0 align-items-center " style="min-width:320px;" id="">
            <div class="px-3">
                <select class="form-select mt-5"  aria-label="Floating label select example">
                    <option disabled selected>Choose Year-level</option>
                    <option value="College">College</option>
                    <option value="Senior Highschool">Senior Highschool</option>
                    <option value="Junior Highschool">Junior Highschool</option>
                    <option value="Elementary">Elementary</option>
                </select>
            </div>
            <div class="container p-0 mt-5" id="bookLevelContainer">
            </div>
      </div>
        <!-- --- -->
        <script>
        $(document).ready(function (){
            var currentYear = new Date().getFullYear();
            $.ajax({
                url: '/fetch-level-books',
                type: 'GET',
                success: function(response) {
                    var html = '';
                    
                    $.each(response.groupBooks, function(level, levels){
                        html += `
                                    <div class="border border-1 shadow-sm mt-5" style="solid #661011;">
                                        <h5 class="bg-light shadow-sm text-center p-0 m-0 fw-normal fs-6 py-3" style="color:black;">${level}<h5>
                                `;
                        $.each(levels, function(category, bookCategory){
                                var previousBookTitle = '';
                                html += `
                                            <div class="px-2 py-3 mt-3" style="height:auto;">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 style="color:black;" class="p-0 m-0 fw-normal fs-6">${category}</h6>
                                                    <a href="/spc-lms/category/${category}" class="shadow-sm"><button class="btn btn-primary py-1 rounded">View All</button></a>
                                                </div>
                                                <div class="border border-1 shadow-sm px-1 py-1 d-flex justify-content-start gap-3 align-items-center overflow-x-auto no-scrollbar" style="height:160px;">
                                        `;
                                $.each(bookCategory, function(index, books){
                                    if (previousBookTitle !== books.title) {
                                        if ((books.publication_year + 3) >= currentYear) {
                                            html += `   
                                                        <div class="d-flex flex-column align-items-center gap-1 position-relative" style="height:100%; width:120px;min-width:115px;">
                                                            <div class="position-absolute fs-6 top-0 end-0 p-0 m-0" style="border-left: 45px solid transparent; border-top: 45px solid #661011;"></div>
                                                            <span class="text-white position-absolute" style="top:5%;right:1%; transform: rotate(45deg);font-size:12px;">New</span>
                                                    `;
                                                        if (books.level == 'College'){
                                                         html +=   `<img class="bg-primary" src="/books_images/${books.level}/${books.category}/${books.image}" style="height:115px;width:100%;">`;
                                                        }else if (books.level == 'Senior Highschool' || books.level == 'Junior Highschool' || books.level == 'Elementary') {
                                                           html +=   `<img class="bg-primary" src="/books_images/${books.level}/${books.image}" style="height:115px;width:100%;">`; 
                                                        }
                                            if (books.status === 'Available') {
                                            html += `       
                                                            <a href="#" class="border-0 bg-success fs-6 text-white d-flex justify-content-center align-items-center text-decoration-none" style="height:30px;width:100%;"><span>Borrow</span></a>
                                                        </div>
                                                       
                                                    `;
                                            }
                                            else if (books.status === 'Not Available') {

                                            html += `       
                                                            <a href="#" class="border-0 fs-6 text-white d-flex justify-content-center align-items-center text-decoration-none" style="background-color:gray;height:30px;width:100%;"><span>Unavailable</span></a>
                                                        </div>
                                                      
                                                    `;
                                            }
                                        }else if ((books.publication_year +3 ) < currentYear){
                                            html += `   
                                                        <div class="d-flex flex-column align-items-center gap-1 position-relative" style="height:100%; width:120px;min-width:115px;">
                                                            <div class="position-absolute fs-6 top-0 end-0 p-0 m-0" style="border-left: 45px solid transparent; border-top: 45px solid #661011;"></div>
                                                            <span class="text-white position-absolute" style="top:5%;right:1%; transform: rotate(45deg);font-size:12px;">New</span>
                                                    `;
                                                        if (books.level == 'College'){
                                                         html +=   `<img class="bg-primary" src="/books_images/${books.level}/${books.category}/${books.image}" style="height:115px;width:100%;">`;
                                                        }else if (books.level == 'Senior Highschool' || books.level == 'Junior Highschool' || books.level == 'Elementary') {
                                                           html +=   `<img class="bg-primary" src="/books_images/${books.level}/${books.image}" style="height:115px;width:100%;">`; 
                                                        }

                                            if (books.status === 'Available') {
                                            html += `       
                                                            <a href="#" class="border-0 bg-success fs-6 text-white d-flex justify-content-center align-items-center text-decoration-none" style="height:30px;width:100%;"><span>Borrow</span></a>
                                                        </div>
                                                       
                                                    `;
                                            }
                                            else if (books.status === 'Not Available') {

                                            html += `       
                                                            <a class="border-0 fs-6 text-white d-flex justify-content-center align-items-center text-decoration-none" style="background-color:gray;height:30px;width:100%;"><span>Unavailable</span></a>
                                                        </div>
                                                      
                                                    `;
                                            }
                                        }
                                    }    
                                    
                                    previousBookTitle = books.title;        
                                });
                                html += `           
                                                </div>
                                            </div>
                                        `;
                        });
                        html += `
                                    </div>
                                `;
                    });
                    $('#bookLevelContainer').html(html);
                }
            });
        });
        </script>
    </x-slot>
</x-student.layout>