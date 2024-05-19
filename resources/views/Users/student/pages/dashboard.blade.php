<x-student.layout>
    {{-- SELECTION OF YEAR LEVEL --}}
    <x-slot name="dashboard">
        <div class="container border-light-subtle border m-0 p-0 align-items-center" style="min-width:320px;" id="">
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
            <div class="container p-0 m-0" id="bookLevelContainer">
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
                                    <div class="border mt-2 border-1 px-2 py-1">
                                        <h6 class="text-start p-0 m-0 fw-normal fs-5 mt-5 text-white" style="color:#661011;">${level}<h6>
                                `;
                        $.each(levels, function(category, bookCategory){
                                var previousBookTitle = '';
                                html += `
                                            <div class="border border-1 shadow-sm px-2 py-2 mt-3" style="height:auto;">
                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                    <h6 style="color:#661011;" class="p-0 m-0">${category}</h6>
                                                    <a href="#" class="py-1 px-2 bg-primary text-white text-decoration-none fw-normal">View All</a>
                                                </div>
    
                                                  
                                        `;
                                $.each(bookCategory, function(index, books){
                                    if (previousBookTitle !== books.title) {
                                        if ((books.publication_year + 3) >= currentYear) {
                                            html += `
                                                        
                                                    `;
                                            if (books.status === 'Available') {
                                            html += `
                                                        
                                                    `;
                                            }
                                            else if (books.status === 'Not Available') {
                                            html += `
                                               
                                                    `;
                                            }
                                        }else {
            
                                        }
                                       

                                    }    
                                    
                                    previousBookTitle = books.title;        

                                });
                                

                                html += `           
                                             
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