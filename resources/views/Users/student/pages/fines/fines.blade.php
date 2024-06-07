<x-student.layout>
    <x-slot name="fines">
        <div class="container mt-5 bg-warning p-0" syle="min-width:320px;">
            <table class="table table-responsive table-striped">
                <thead class="table-dark" style="min-width:300px;">
                    <tr>
                        <th class="fw-normal" style="font-size:12px;">No</th>
                        <th class="fw-normal" style="font-size:12px;">Title</th>
                        <th class="fw-normal" style="font-size:12px;">Overdue</th>
                        <th class="fw-normal" style="font-size:12px;">Penalty</th>
                        <th class="fw-normal" style="font-size:12px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $totalFines = 0; @endphp
                    @foreach ($transaction as  $transactions)
                        @php $totalFines += $transactions->penalty; @endphp
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $transactions->book->title }}</td>
                            <td class="align-middle">{{ $transactions->overdue }}</td>
                            <td class="align-middle">{{ $transactions->penalty }}</td>
                            <td class="align-middle">
                                <a href="{{ route('spc-lms.transactionview', ['id' => $transactions->id])}}">
                                    <button class="btn bg-primary py-1 text-white">View</button>
                                </a>
                            </td class="align-middle">
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-block bg-success-subtle px-2 py-2 "><h6 class="p-0 m-0">Total Fines = {{ $totalFines }}</h6></div>
        </div>
    </x-slot>
</x-student.layout>