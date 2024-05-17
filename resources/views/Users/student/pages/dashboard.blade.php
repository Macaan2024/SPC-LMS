<x-student.layout>
    {{-- SELECTION OF YEAR LEVEL --}}
    <x-slot name="dashboard">
      <div class="container" style="min-width:320px;">
        <div class="d-flex justify-content-center gap-2 px-4 mt-5" style="min-width:248px;">
              <div class="w-100">
                  <select class="form-select"  aria-label="Floating label select example">
                      <option disabled selected>Choose Year-level</option>
                      <option value="College">College</option>
                      <option value="Senior Highschool">Senior Highschool</option>
                      <option value="Junior Highschool">Junior Highschool</option>
                      <option value="Elementary">Elementary</option>
                  </select>
              
              </div>
        </div>
      </div>
      <div class="container mt-5 d-flex flex-column gap-5 align-items-center" style="min-width:288px;" id="bookLevelContainer">
        <div id="bookCategoryContainer"></div>
      </div>
        <!-- --- -->
<script>
    $(document).ready(function () {
        $.ajax({
            url: '/fetch-level-books',
            type: 'GET',
            success: function (response) {
                var html1 = '';
                var html2 = '';

                // Assuming response.bookLevel is an array of objects
                $.each(response.bookLevel, function(index, OuterlevelObj) {
                    var OuterlevelName = OuterlevelObj.level;
                    var OuterCategoryName = OuterlevelObj.category;
                    var OuterIsbn = OuterlevelObj.isbn
                    
                    html1 += 
                          `
                            <div class="w-100">
                          `;
                          $('#bokLevelContainer').html(html1);
                    // Additional logic for handling categories within each level
                    // This part assumes you want to do something specific with categories
                    // For demonstration, I'm adding a placeholder for further customization
                    $.each(response.bookLevel, function(innerIndex, innerLevelObj) {
  
                      if (OuterlevelName == innerLevelObj.level && OuterCategoryName == innerLevelObj.category) {
                            html2 += `
                                    
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="p-0 m-0 fs-6 fw-medium">${innerLevelObj.category}</p>
                                            <a class="text-decoration-none py-1 px-2 text-white" style="background-color:#661011;">View All</a>
                                        </div>
                                        <div class="border border-1 mt-2" style="height:120px">
                                        </div>
                                    </div>
                                    `;
                            
                        }
                    });
                });

                $('#bookLevelContainer').html(html);
            }
        });
    });
</script>
    </x-slot>
</x-student.layout>