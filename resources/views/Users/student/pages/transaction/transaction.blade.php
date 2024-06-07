<x-student.layout>
    <x-slot name="transaction">
       <div class="container p-0 mt-5" style="min-width:300px;">
            <table class="table table-responsive table-striped m-0 p-0">
                <thead class="table-dark">
                    <tr>
                        <th class="fw-normal" style="font-size:12px;">No</th>
                        <th class="fw-normal" style="font-size:12px;">Title</th>
                        <th class="fw-normal" style="font-size:12px;">Duration</th>
                        <th class="fw-normal" style="font-size:12px;">Status</th>
                        <th class="fw-normal" style="font-size:12px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = 0; @endphp
                    @foreach ( $transaction as $transactions)
                        <tr>   
                            @if($transactions->status == 'ongoing')
                                <td class="align-middle" style="font-size:12px;">{{ ++$index }}</td>
                                <td class="align-middle" style="font-size:12px;">{{ $transactions->book->title }}</td>
                                    @php
                                        $endDateTime = \Carbon\Carbon::parse($transactions->end_day . ' ' . $transactions->end_time);
                                        $now = \Carbon\Carbon::now();
                                    @endphp
                                    
                                    @if ($now < $endDateTime)
                                        @php
                                            $hoursDifference = $now->diffInHours($endDateTime);
                                        @endphp
                                        <td class="align-middle text-success fw-bold" style="font-size:12px;">{{ $hoursDifference }} Hours</td>
                                    @elseif ($now > $endDateTime)
                                        @php
                                            $hoursDifference = $endDateTime->diffInHours($now);
                                        @endphp
                                        <td class="align-middle text-danger fw-bold" style="font-size:12px;">Overdue by {{ $hoursDifference }} Hours</td>
                                    @endif
                                <td class="align-middle" style="font-size:12px;">{{ $transactions->status }}</td>
                                <td class="align-middle" style="font-size:12px;">
                                    <a href="{{ route('spc-lms.transactionview', ['id' => $transactions->id]) }}">
                                        <button class="btn bg-primary py-1 text-white" style="font-size:12px;">View</button>
                                    </a>
                                </td>	
                            @endif
                        </tr>
                    @endforeach
                    @foreach ( $transaction as $transactions)
                        <tr>   
                            @if($transactions->status == 'returned')
                                <td class="align-middle" style="font-size:12px;">{{ ++$index }}</td>
                                <td class="align-middle" style="font-size:12px;">{{ $transactions->book->title }}</td>
                                <td>16 Hours</td>
                                <td class="align-middle" style="font-size:12px;">{{ $transactions->status }}</td>
                                <td class="align-middle" style="font-size:12px;">
                                    <a href="{{ route('spc-lms.transactionview', ['id' => $transactions->id]) }}">
                                        <button class="btn bg-primary py-1 text-white" style="font-size:12px;">View</button>
                                    </a>
                                </td>	
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
       </div>
    </x-slot>
</x-student.layout>