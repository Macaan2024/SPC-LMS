<x-admin.dashboard-layout>
    <x-slot name="user_registration">

        <div class="row">
            <div class="col-lg-1 bg-light"></div>
            <div class="col-lg-10 col-12 vh-100 px-4 px-sm-5 py-5">
                <h5 class="text-nowrap">User Information Management</h5>
                <hr>

                {{-- Total Boxes of Student--}}
                <section class="p-0 m-0">
                    <h5 class="text-nowrap mt-5 mb-3" style="font-size:18px;">Totals of Students</h5>
                    <div class="d-flex gap-5 flex-wrap">
                        <div class="card shadow-sm" style="width: 15rem;min-width:12rem;max-width:15rem;">
                            <h6 class="card-title text-center py-3 text-white m-0 fw-bold" style="background-color:#660000;">College</h6>
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 10rem;background-color:#CC0000;">
                                <p class="card-text fs-1 p-0 m-0 text-white">5</p>
                            </div>
                        </div>
                        <div class="card shadow-sm" style="width: 15rem; min-width:12rem;max-width:15rem;">
                            <h6 class="card-title text-center py-3 text-white m-0 fw-bold" style="background-color:#000066;">Senior Highschool</h6>
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 10rem;background-color:#0000FF;">
                                <p class="card-text fs-1 p-0 m-0 text-white">5</p>
                            </div>
                        </div>
                        <div class="card shadow-sm" style="width: 15rem; min-width:12rem;max-width:15rem;">
                            <h6 class="card-title text-center py-3 text-white m-0 fw-bold" style="background-color:#663300;">Junior Highschool</h6>
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 10rem;background-color:#CC6600;">
                                <p class="card-text fs-1 p-0 m-0 text-white">5</p>
                            </div>
                        </div>
                        <div class="card shadow-sm" style="width: 15rem; min-width:12rem;max-width:15rem;">
                            <h6 class="card-title text-center py-3 text-white m-0 fw-bold" style="background-color:#202020;">Elementary</h6>
                            <div class="card-body d-flex justify-content-center align-items-center" style="height: 10rem;background-color:#606060;">
                                <p class="card-text fs-1 p-0 m-0 text-white">5</p>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- CRUD TABLE--}}
                <section class="mt-5 p-0 m-0">
                    <div class="row m-0 p-0">
                        <div class="col-12 bg-primary col-sm-3 p-0 m-0 tableHeading-custom-class">
                            <select class="form-select rounded-end-0" aria-label="Default select example">
                                <option selected>Choose Grade</option>
                                <option value="College">College</option>
                                <option value="Senior Highschool">Senior Highschool</option>
                                <option value="Junior Highschool">Junior Highschool</option>
                                <option value="Elementary">Elementary</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-5 p-0 mt-3 mt-sm-0 tableHeading-custom-class">
                            <form class="d-flex form-group">
                                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col-12 col-sm-4 d-flex justify-content-end mt-3 mt-sm-0 m-0 p-0 tableHeading-custom-class">
                            <button type="button" class="btn btn-dark col-12 col-sm-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Users</button>
                            <x-admin.modal-register />
                                        {{-- User Registration Scripts--}}
                            @push('user_registration') 
                                <script src="{{ asset('js/admin/user_registration.js') }}"></script>
                            @endpush
                        </div>
                    </div>
                    
                    <div class="table-responsive mt-3">
                        <table class="table align-middle">
                            <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Unique_id</th>
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $datas)
                                    <tr>
                                        <td>{{ $datas->id }}</td>
                                        <td>{{ $datas->unique_id }}</td>
                                        <td>{{ $datas->role->role_description }}</td>
                                        <td>{{ $datas->created_at }}</td>
                                        <td>{{ $datas->updated_at  }}</td>
                                        <td>{{ $datas->role->status}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <div class="col-lg-1 bg-light"></div>
        </div>
    </x-slot>
<!-- -------------------------- ADD ACCOUNT --- -->
</x-admin.dashboard-layout>