<x-student.layout>
    <x-slot name="view_category">
    <div class="container px-0 align-items-center " style="min-width:320px;" id="">
        <div class="input-group mb-3 px-3 mt-5">
            <button class="btn btn-outline-secondary border-dark-subtle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-dark-subtle" style="" width="1.4em" height="1.4em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/></svg>
            </button>
            <ul class="dropdown-menu">
                <li class="dropdown-item searchType"  data-value="isbn">ISBN</li>
                <li class="dropdown-item searchType"  data-value="title">Title</li>
                <li class="dropdown-item searchType"  data-value="author">Author</></li>
                <li class="dropdown-item searchType"  data-value="accesion_number">Accesion NUmber</li>
            </ul>
            <form action="{{ route('spc-lms.category.searchBook') }}" id="searchForm" method="GET" class="mt-5"></form>
                <input type="search" name="" class="form-control border-dark-subtle border-start-0" id="inputSearch">
                <button type="submit" name="submit" value="submit" class="border border-dark-subtle rounded-end bg-success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="1.5em" height="1.5em" viewBox="0 0 56 56"><rect width="56" height="56" fill="none"/><path fill="currentColor" d="M23.957 41.77a18.02 18.02 0 0 0 10.477-3.376l11.109 11.11a2.658 2.658 0 0 0 1.898.773c1.524 0 2.625-1.172 2.625-2.672c0-.703-.234-1.359-.75-1.874L38.277 34.668c2.32-3.047 3.703-6.82 3.703-10.922c0-9.914-8.109-18.023-18.023-18.023c-9.937 0-18.023 8.109-18.023 18.023S14.02 41.77 23.957 41.77m0-3.891c-7.758 0-14.133-6.398-14.133-14.133c0-7.734 6.375-14.133 14.133-14.133c7.734 0 14.133 6.399 14.133 14.133c0 7.735-6.399 14.133-14.133 14.133"/></svg>
                </button>
             
            </form>
        </div>
        <div id="searchResult"></div>
      </div>

      <script>
        $(document).ready(function (){
            // Dynamic search type function
            var selectValue = 'title';
            $('#inputSearch').attr('name', selectValue).prop('placeholder', 'Search ' + selectValue);

            $('.searchType').on('click', function(){
                selectValue = $(this).data('value');
                $('#inputSearch').attr('name', selectValue).prop('placeholder', 'Search ' + selectValue);
            });

            // Corrected form submission function
            $('#searchForm').on('submit', function(e){ // Added missing parenthesis
                e.preventDefault();
                var searchBook = $('#inputSearch').val();

                $.ajax({
                    url: '{{ route('spc-lms.category.searchBook') }}',
                    type: 'GET',
                    data: { bookSearch : searchBook },
                    success: function(response) {
                        var html = '';
                        // Assuming response is an array of objects, iterate over them
                        response.forEach(function(item) {
                            // Construct HTML for each item, assuming 'item' has properties like 'title', 'author', etc.
                            html += '<div>' + item.title + '</div>'; // Example, adjust according to your data structure
                        });
                        $('#searchResult').html(html);
                    },
                    error: function(xhr, status, error) {
                        console.error("An error occurred:", error);
                    }
                });
            });
        });
    </script>
    </x-slot>
</x-student.layout>