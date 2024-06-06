<x-student.layout>
    <x-slot name="request_books">
        <div class="container mt-5 p-0 p-sm-2" stlye="min-width:320px;">
            <table class="table table-responsive mt-5 shadow p-0 m-0">
                <thead class="table-dark">
                    <tr>
                        <th class="fw-normal">No</th>
                        <th class="fw-normal">Title</th>
                        <th class="fw-normal">Status</th>
                        <th class="fw-normal">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $transactions )
                        @if($transactions->status == 'approved' || $transactions->status == 'pending')
                        <tr> 
                            <th class="align-middle fw-normal"> {{ $loop->iteration }}</th>
                            <th class="align-middle fw-normal">{{ $transactions->book->title }}</th>
                            <th class="align-middle fw-normal">{{ $transactions->status }}</th>
                            <th class="align-middle">
                                <div class="d-flex flex-column gap-2">
                                    <a href="{{ route('spc-lms.view_requestbook', ['id' => $transactions->id]) }}">
                                        <button class="btn bg-primary py-1 px-2 text-white fw-normal">View</button>
                                    </a>
                                    <form action="{{ route('spc-lms.cancel', ['id' => $transactions->id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger py-1 px-2 fw-normal">Cancel</button>
                                    </form>
                                </div>
                            </th>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-student.layout>