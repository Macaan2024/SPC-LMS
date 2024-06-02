<x-admin.layout>
    <x-slot name="viewfines">
        <div class="container mt-5">
            <table class="table table-responsive border border-dark-subtle">
                <thead class="table-dark">
                    <th class="fw-normal">No</th>
                    <th class="fw-normal">Name</th>
                    <th class="fw-normal">Reciever</th>
                    <th class="fw-normal">Amount</th>
                    <th class="fw-normal">Date</th>
                </thead>
                <tbody>
                    @foreach ($userPayment as $payment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $payment->user->firstname . ' ' . $payment->user->lastname }}</td>
                            <td>{{ $payment->reciever }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>{{ $payment->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-admin.layout>