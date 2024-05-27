<x-admin.layout>
    <x-slot name="user_registration">
        <div class="row">
            <div class="col-lg-1 bg-light"></div>
            <div class="col-lg-10 col-12 vh-100 px-4 px-sm-5 py-5">
                <h5 class="text-nowrap">User Information Management</h5>
                <hr>

                {{-- Total Boxes of Student--}}
                <section class="p-0 m-0">
                    <h5 class="text-nowrap mt-5 mb-3" style="font-size:18px;">Totals of Books</h5>
                    <div class="row rows-col-4 gap-5 p-0 m-0 align-itesm-center">
                        <div class="col p-0 m-0">
                            <div class="row p-0 m-0">
                                <div class="col-7 p-0 m-0  border">
                                    <img src="{{ asset('/library/college.png') }}" style="height:100%;width:100%;" alt="">
                                </div>
                                <div class="col-5 p-0 m-0 border d-flex flex-column text-center align-items-center text-white justify-content-center" style="background-color:#661011;">
                                    <div class=" d-flex align-items-end justify-content-center" style="height:50%;width:100%">
                                        <h5 class="p-0 m-0">College</h5>
                                    </div>
                                    <div class="" style="height:50%;width:100%">
                                        <h2 class="p-0 m-0">{{ $college}}</h2>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="row p-0 m-0">
                                <div class="col-7 p-0 m-0  border">
                                    <img src="{{ asset('/library/seniorhigh.png') }}" style="height:100%;width:100%;" alt="">
                                </div>
                                <div class="col-5 p-0 m-0 border d-flex flex-column text-center align-items-center text-white justify-content-center" style="background-color:#661011;">
                                    <div class=" d-flex align-items-end justify-content-center" style="height:50%;width:100%">
                                        <h5 class="p-0 m-0">Senior Highschool</h5>
                                    </div>
                                    <div class="" style="height:50%;width:100%">
                                        <h2 class="p-0 m-0">{{ $seniorhigh}}</h2>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="row p-0 m-0">
                                <div class="col-7 p-0 m-0  border">
                                    <img src="{{ asset('/library/seniorhigh.png') }}" style="height:100%;width:100%;" alt="">
                                </div>
                                <div class="col-5 p-0 m-0 border d-flex flex-column text-center align-items-center text-white justify-content-center" style="background-color:#661011;">
                                    <div class=" d-flex align-items-end justify-content-center" style="height:50%;width:100%">
                                        <h5 class="p-0 m-0">Junior Highschool</h5>
                                    </div>
                                    <div class="" style="height:50%;width:100%">
                                        <h2 class="p-0 m-0">{{ $juniorhigh}}</h2>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="col p-0 m-0">
                            <div class="row p-0 m-0">
                                <div class="col-7 p-0 m-0  border">
                                    <img src="{{ asset('/library/juniorhigh.png') }}" style="height:100%;width:100%;" alt="">
                                </div>
                                <div class="col-5 p-0 m-0 border d-flex flex-column text-center align-items-center text-white justify-content-center" style="background-color:#661011;">
                                    <div class="d-flex align-items-end justify-content-center" style="height:50%;width:100%">
                                        <h5 class="p-0 m-0">Elementary</h5>
                                    </div>
                                    <div class="" style="height:50%;width:100%">
                                        <h2 class="p-0 m-0">{{ $elementary}}</h2>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </section>

                {{-- CRUD TABLE--}}
                <section class="mt-5 p-0 m-0">
                    <div class="row m-0 p-0">
                        <div class="col-12 bg-primary col-sm-3 p-0 m-0 tableHeading-custom-class">
                            <select class="form-select rounded-end-0" aria-label="Default select example" id="AjaxSelect">
                                <option disabled selected>Choose Grade</option>
                                <option value="All">All</option>
                                <option value="College">College</option>
                                <option value="Senior Highschool">Senior Highschool</option>
                                <option value="Junior Highschool">Junior Highschool</option>
                                <option value="Elementary">Elementary</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-5 p-0 mt-3 mt-sm-0 tableHeading-custom-class">
                            <form class="d-flex form-group" id="searchStudent">
                                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col-12 col-sm-4 d-flex justify-content-end mt-3 mt-sm-0 m-0 p-0 tableHeading-custom-class">
                            <button type="button" class="btn btn-dark col-12 col-sm-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Users</button>
                            <x-admin.modal-register /> {{-- User Registration Scripts--}}
                            @push('user_registration') 
                                <script src="{{ asset('js/admin/user_registration.js') }}"></script>
                            @endpush
                        </div>
                    </div>
                    
                    <div class="table-responsive mt-3">
                        <table class="table align-middle overflow-x-auto">
                            <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Unique_id</th>
                                <th>Role</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Class Level</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="studentData">

                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <div class="col-lg-1 bg-light"></div>
        </div>
        <script>
        $(document).ready(function(){
    // Function to fetch and display users based on the selected level and search query
    function fetchUsers(level, query) {
        $.ajax({
            url: '/fetch-users',
            type: 'GET',
            data: {level: level, query: query},
            success: function(response) {
                var html = '';

                $.each(response, function(index, student){
                    // Ensure each row has a data-id attribute
                    html += '<tr data-id="' + student.id + '">' +
                                '<td class="text-nowrap">' + (index + 1) + '</td>' +
                                '<td class="text-nowrap">' + student.unique_id + '</td>' +
                                '<td class="text-nowrap">' + student.role.role_description + '</td>' +
                                '<td class="text-nowrap">' + student.firstname + '</td>' +
                                '<td class="text-nowrap">' + student.lastname + '</td>' + 
                                '<td class="text-nowrap">'+ student.level + '</td>' +
                                '<td class="text-nowrap">' + student.status + '</td>' +
                                '<td class="d-flex justify-content-rounded gap-1">' +
                                    '<a class="btn btn-primary" href="/admin/view/' + student.id + '">View</a>' +
                                    '<a class="btn btn-success" href="/admin/edit/' + student.id + '">Edit</a>' +
                                    '<button class="btn btn-danger delete-user" data-id="' + student.id + '">Delete</button>'
                                '</td>' +
                            '</tr>';
                });
                $('#studentData').html(html); // Update the table body
            }
        });
    }

    // Call fetchUsers on page load with default parameters
    fetchUsers('All', '');

    $('#AjaxSelect').on('change', function(){
        var yearLevel = $(this).val();
        fetchUsers(yearLevel, '');
    });

    $('#searchStudent').on('click', function(e) {
        e.preventDefault();

        var searchQuery = $('input[type="search"]').val();
        var yearLevel = $('#AjaxSelect').val();
        fetchUsers(yearLevel, searchQuery);
    });

    // Event listener for delete button
    $(document).on('click', '.delete-user', function() {
        var userId = $(this).data('id');
        if (confirm('Are you sure you want to delete this user?')) {
            $.ajax({
                url: '/delete-student/' + userId,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Correctly select the row to remove using the data-id attribute
                    $('tr[data-id="' + userId + '"]').remove();
                    alert(response.success);
                }
            });
        }
    });
});
        </script>
    </x-slot>
<!-- -------------------------- ADD ACCOUNT --- -->
</x-admin.layout>