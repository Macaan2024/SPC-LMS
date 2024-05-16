<x-student.layout>
    {{-- SELECTION OF YEAR LEVEL --}}
    <x-slot name="landing_page">
    <nav class="navbar navbar-light bg-light fixed-top flex-nowrap px-2 px-sm-5 py-3 shadow-sm">
        <div class="navbar-brand">
            <h5 class="p-0 m-0 fw-bolder text-nowrap" style="letter-spacing: 3px; color:#661011;">SPC LIBRARY</h5>
        </div>
        <div>
            <button class="text-white border-0 py-2 px-3" style="background-color:#661011;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" >LOGIN</button>
        </div>
    </nav>

    <x-student.modalLogin />
        <div class="d-flex justify-content-center gap-2 px-4">
            <div class="form-floating w-100">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option disabled selected>Choose Year-level</option>
                    <option value="College">College</option>
                    <option value="Senior Highschool">Senior Highschool</option>
                    <option value="Junior Highschool">Junior Highschool</option>
                    <option value="Elementary">Elementary</option>
                </select>
                <label for="floatingSelect">Select Year-level</label>
            </div>
        </div>
        <!-- --- -->
        <div class="container-fluid">   
          <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
              <div class="bookContainerBox">
                
              </div>
            </div>
          </div>
        </div>

        <!-- ---- -->
        <script>
   $(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#floatingSelect').on('change', function() {
        var yearLevel = $(this).val();
        
        if (yearLevel) {
            $.ajax({
                url: '/fetch-data',
                type: 'GET',
                data: { level: yearLevel },
                success: function(response) {
                    var html = ''; // Initialize an empty string to accumulate HTML

                    // Assuming response.data is an array of objects with 'category', 'image', and 'title' properties
                    var categories = {}; // Temporary object to group items by category

                    // First, group items by category
                    $.each(response.data, function(index, item) {
                        if (!categories[item.category]) {
                            categories[item.category] = [];
                        }
                        categories[item.category].push(item);
                    });

                    // Then, iterate over each category and its items to construct the HTML
                    $.each(categories, function(category, items) {
                        html += `
                                <div class="row mt-4">
                                  <div class="col-12 bg-white p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="text-left p-0 m-0 fw-medium" id="bookTitle">${category}</h5>
                                        <a class="text-decoration-none px-2 py-1" style="background-color:#661011; color:white;" href="">View All</a>
                                    </div>
                                    <div class="my-3 w-100 border p-2 d-flex gap-4" style="height: 225px; overflow-y: hidden; overflow-x: auto;">
                        `;

                        $.each(items, function(index, item) {
                            var imageUrl = `/images/${item.level}/${item.category}/${item.image}`;
                            html += `
                                    <div class="d-flex flex-column gap-1" style="min-width: 140px; height: 100%; flex-shrink: 0;">
                                        <div style="width: 100%; height:165px;" class="bg-primary">
                                          <img src="${imageUrl}" alt="" class="object-fit-fill" style="width: 100%; height: 100%;">
                                        </div>
                                        <div style="width: 100%;" class="d-flex align-items-center justify-content-center">
                                              <a href="" class="px-2 py-1 w-100" style="text-align:center; background-color:#661011;">${item.status}</a>
                                        </div>
                                    </div>
                                    `;
                        });
                        html += `
                                              </div>                                
                                            </div>
                                          </div>
                                        `;
                    });

                    // Update the HTML of the container element with the accumulated HTML for all items
                    $('.bookContainerBox').html(html);
                }
            });
        }
    });
});
        </script>
    </x-slot>
</x-student.layout>