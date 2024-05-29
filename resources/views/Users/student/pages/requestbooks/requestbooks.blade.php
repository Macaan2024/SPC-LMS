<x-student.layout>
    <x-slot name="request_books">
        <div class="container mt-5 p-0 p-0" stlye="min-width:720px;">
            <table class="table table-responsive mt-5 shadow" align="center" style="min-width:320px;">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Book Image</th>
                        <th>Book Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $transactions )
                        @if($transactions->status == 'approved' || $transactions->status == 'pending')
                        <tr> 
                            <th class="align-middle fw-normal"> {{ $loop->iteration }}</th>
                            <th><img src="/books_images/{{ $transactions->book->level . '/' . $transactions->book->category . '/' . $transactions->book->image}}" alt="Book Requested" style="height:100px;width:75px;"></th>
                            <th class="align-middle fw-normal">{{ $transactions->book->title }}</th>
                            <th class="align-middle fw-normal">{{ $transactions->status }}</th>
                            <th class="align-middle">
                                <div class="d-flex gap-2">
                                    <a href="{{ route('spc-lms.view_requestbook', ['id' => $transactions->id]) }}" class="btn btn-primary py-1">View</a>
                                    <form action="{{ route('spc-lms.cancel', ['id' => $transactions->id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger py-1">Cancel</button>
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