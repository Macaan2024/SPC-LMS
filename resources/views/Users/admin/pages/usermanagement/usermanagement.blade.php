<x-admin.layout>
    <x-slot name="user_registration">
        <div class="row row-cols-6 px-5 mt-5 m-0" style="min-width:1550px;">
            <div class="col p-2 m-0">
                <div class="bg-success bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:150px;width:100%;">
                    <div class="d-flex flex-column">
                        <h4 class="p-0 m-0 text-white fw-normal">College</h4>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal"></h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-primary bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Senior Highschool</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal"></h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-danger bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Junior Highschool</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal"></h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-dark bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Elementary</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal"></h6>
                    </div>
                </div>
            </div>
            <div class="col p-2 m-0">
                <div class="bg-info bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Faculty</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal"></h6>
                    </div>
                </div>
            </div>
            <div class="col  p-2 m-0">
                <div class="bg-warning bg-opacity-50 rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="height:100%;width:100%;">
                    <div class="d-flex flex-column">
                        <h5 class="p-0 m-0 text-white fw-normal">Library Staff</h5>
                        <h6 class="p-0 m-0 fs-4 text-white fw-normal"></h6>
                    </div>
                </div>
            </div>
        </div>

          {{-- CRUD TABLE--}}
             
        <div class="row m-0 p-0 mt-5 px-5" style="min-width:1550px;">
            <div class="col-6 p-0 m-0">
                <form class="d-flex form-group p-0m-0" action="{{ route('admin.transaction')}}" method="GET">
                    <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0 shadow-lg rounded-start-1 py-2" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request()->get('search') }}">
                    <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
                </form>
            </div>
            <div class="col-6 p-0 m-0 d-flex justify-content-end">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModalToggleChoice" data-bs-whatever="@mdo">Add Users</button>
                <x-admin.modal-register /> {{-- User Registration Scripts--}}
                @push('user_registration') 
                    <script src="{{ asset('js/admin/user_registration.js') }}"></script>
                @endpush
            </div>
        </div>

        <div class="mt-3 px-5" style="min-width:1550px;">
            <div class="" style="height:auto;">
                <table class="table table-responsive align-middle overflow-x-auto"  style="max-height:1000px;">
                    <thead class="table-dark">
                        <tr>
                            <th class="fw-normal">No</th>
                            <th class="fw-normal">Image</th> 
                            <th class="fw-normal">Unique_id</th>
                            <th class="fw-normal">Role</th>
                            <th class="fw-normal">Firstname</th>
                            <th class="fw-normal">Lastname</th>
                            <th class="fw-normal">Gender</th>
                            <th class="fw-normal">Class Level</th>
                            <th class="fw-normal">Status</th>
                            <th class="fw-normal">Action</th>
                        </tr>
                    </thead>
                    <tbody id="studentData">
                        @php $index = 0; @endphp
                        @foreach ( $user as $users )
                            @if($users->level == 'College' && $users->status == 'Activate')
                                <tr>
                                    <td>{{ ++$index}}</td>
                                    <td><img src="/student/{{$users->level . '/' . $users->user_image}}" alt="user_image" style="height:100px;width:85px;" class="object-fit-fill"></td>
                                    <td>{{ $users->unique_id }}</td>
                                    <td>{{ $users->role->role_description}}</td>
                                    <td>{{ $users->firstname }}</td>
                                    <td>{{ $users->lastname }}</td>
                                    <td>{{ $users->gender }}</td>
                                    <td>{{ $users->level }}</td>
                                    <td class="text-success fw-bolder">{{ $users->status }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('usermanagement-view', ['id' => $users->id]) }}">
                                                <button class="btn bg-primary bg-opacity-75 text-white">View</button>
                                            </a>
                                            <a href="{{ route('usermanagement-edit', ['id' => $users->id])}}">
                                                <button class="btn bg-success bg-opacity-75 text-white">Edit</button>
                                            </a>
                                            <a href="{{ route('usermanagement-delete', ['id' => $users->id])}}">
                                                <button class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        @foreach ( $user as $users )
                            @if($users->level == 'Senior Highschool' && $users->status == 'Activate')
                                <tr>
                                    <td>{{ ++$index}}</td>
                                    <td><img src="/student/{{$users->level . '/' . $users->user_image}}" alt="user_image" style="height:100px;width:85px;" class="object-fit-fill"></td>
                                    <td>{{ $users->unique_id }}</td>
                                    <td>{{ $users->role->role_description}}</td>
                                    <td>{{ $users->firstname }}</td>
                                    <td>{{ $users->lastname }}</td>
                                    <td>{{ $users->gender }}</td>
                                    <td>{{ $users->level }}</td>
                                    <td class="text-success fw-bolder">{{ $users->status }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('usermanagement-view', ['id' => $users->id]) }}">
                                                <button class="btn bg-primary bg-opacity-75 text-white">View</button>
                                            </a>
                                            <a href="{{ route('usermanagement-edit', ['id' => $users->id])}}">
                                                <button class="btn bg-success bg-opacity-75 text-white">Edit</button>
                                            </a>
                                            <a href="{{ route('usermanagement-delete', ['id' => $users->id])}}">
                                                <button class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        @foreach ( $user as $users )
                            @if($users->level == 'Junior Highschool' && $users->status == 'Activate')
                                <tr>
                                    <td>{{ ++$index}}</td>
                                    <td><img src="/student/{{$users->level . '/' . $users->user_image}}" alt="user_image" style="height:100px;width:85px;" class="object-fit-fill"></td>
                                    <td>{{ $users->unique_id }}</td>
                                    <td>{{ $users->role->role_description}}</td>
                                    <td>{{ $users->firstname }}</td>
                                    <td>{{ $users->lastname }}</td>
                                    <td>{{ $users->gender }}</td>
                                    <td>{{ $users->level }}</td>
                                    <td class="text-success fw-bolder">{{ $users->status }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('usermanagement-view', ['id' => $users->id]) }}">
                                                <button class="btn bg-primary bg-opacity-75 text-white">View</button>
                                            </a>
                                            <a href="{{ route('usermanagement-edit', ['id' => $users->id])}}">
                                                <button class="btn bg-success bg-opacity-75 text-white">Edit</button>
                                            </a>
                                            <a href="{{ route('usermanagement-delete', ['id' => $users->id])}}">
                                                <button class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        @foreach ( $user as $users )
                            @if($users->level == 'Elementary' && $users->status == 'Activate')
                                <tr>
                                    <td>{{ ++$index}}</td>
                                    <td><img src="/student/{{$users->level . '/' . $users->user_image}}" alt="user_image" style="height:100px;width:85px;" class="object-fit-fill"></td>
                                    <td>{{ $users->unique_id }}</td>
                                    <td>{{ $users->role->role_description}}</td>
                                    <td>{{ $users->firstname }}</td>
                                    <td>{{ $users->lastname }}</td>
                                    <td>{{ $users->gender }}</td>
                                    <td>{{ $users->level }}</td>
                                    <td class="text-success fw-bolder">{{ $users->status }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#">
                                                <button class="btn bg-primary bg-opacity-75 text-white">View</button>
                                            </a>
                                            <a href="#">
                                                <button class="btn bg-success bg-opacity-75 text-white">Edit</button>
                                            </a>
                                            <a href="#">
                                                <button class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        @foreach ( $user as $users )
                            @if($users->level == 'Faculty' && $users->status == 'Activate')
                                <tr>
                                    <td>{{ ++$index}}</td>
                                    <td><img src="/student/{{$users->level . '/' . $users->user_image}}" alt="user_image" style="height:100px;width:85px;" class="object-fit-fill"></td>
                                    <td>{{ $users->unique_id }}</td>
                                    <td>{{ $users->role->role_description}}</td>
                                    <td>{{ $users->firstname }}</td>
                                    <td>{{ $users->lastname }}</td>
                                    <td>{{ $users->gender }}</td>
                                    <td>{{ $users->level }}</td>
                                    <td class="text-success fw-bolder">{{ $users->status }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('usermanagement-view', ['id' => $users->id]) }}">
                                                <button class="btn bg-primary bg-opacity-75 text-white">View</button>
                                            </a>
                                            <a href="{{ route('usermanagement-edit', ['id' => $users->id])}}">
                                                <button class="btn bg-success bg-opacity-75 text-white">Edit</button>
                                            </a>
                                            <a href="{{ route('usermanagement-delete', ['id' => $users->id])}}">
                                                <button class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        @foreach ( $user as $users )
                            @if($users->level == 'Library staff' && $users->status == 'Activate')
                                <tr>
                                    <td>{{ ++$index}}</td>
                                    <td><img src="/student/{{$users->level . '/' . $users->user_image}}" alt="user_image" style="height:100px;width:85px;" class="object-fit-fill"></td>
                                    <td>{{ $users->unique_id }}</td>
                                    <td>{{ $users->role->role_description}}</td>
                                    <td>{{ $users->firstname }}</td>
                                    <td>{{ $users->lastname }}</td>
                                    <td>{{ $users->gender }}</td>
                                    <td>{{ $users->level }}</td>
                                    <td class="text-success fw-bolder">{{ $users->status }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('usermanagement-view', ['id' => $users->id]) }}">
                                                <button class="btn bg-primary bg-opacity-75 text-white">View</button>
                                            </a>
                                            <a href="{{ route('usermanagement-edit', ['id' => $users->id])}}">
                                                <button class="btn bg-success bg-opacity-75 text-white">Edit</button>
                                            </a>
                                            <a href="{{ route('usermanagement-delete', ['id' => $users->id])}}">
                                                <button class="btn bg-danger bg-opacity-75 text-white">Delete</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @if(Session::has('removeUser'))
            <script>
                alert("{{Session::get('removeUser')}}")
            </script>
        @endif
        
    </x-slot>
<!-- -------------------------- ADD ACCOUNT --- -->
</x-admin.layout>