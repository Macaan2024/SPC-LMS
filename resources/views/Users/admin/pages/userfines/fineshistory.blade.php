<x-admin.layout>
    <x-slot name="fineshistory">   
    <div class="container-xxl">
        <div class="d-flex gap-5 mt-5 justify-content-start" style="width:100%;">
            <div class="rounded shadow-lg bg-opacity-75 d-flex align-items-center px-4 justify-content-between" style="background-color:#002233;width:250px;height:110px;min-width:220px;">
                <div class="d-flex flex-column">
                    <small class="p-0 m-0 text-white">Total Collect Payment</small>
                    <h6 class="p-0 m-0 fw-bold fs-4 text-white">{{ $totalCollectPayment }}</h6>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-between mt-5 align-items-center">
            <form class="d-flex form-group mt-0 align-items-center" action="{{ route('fines-history') }}" method="GET" style="min-width:847px;">
                <input class="form-control rounded-start-0 rounded-end-0 border-start-1 border-start-sm-0 shadow-lg rounded-start-1 py-2" type="text" placeholder="Search" aria-label="Search" name="search" value="{{ request()->get('search') }}">
                <button class="btn btn-outline-success rounded-start-0 bg-success text-white" type="submit">Search</button>
            </form>

            <!-- Date Selection Form -->
            <form action="{{ route('fines-history') }}" class="d-flex align-items-center gap-2">
                <input type="date" name="date" class="form-control" value="{{ request()->get('date')?? '' }}">
                <input type="submit" name="submit" class="btn btn-success" value="Filter By Date">
            </form>
        </div>
        <table class="table table-responsive mt-5 table-striped">
            <thead align="left" class="table-dark">
                <tr>
                    <th class="fw-normal">No</th>
                    <th class="fw-normal">Name</th>
                    <th class="fw-normal">Reciever</th>
                    <th class="fw-normal">Amount</th>
                    <th class="fw-normal">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paymentList as $payment )
                    <tr>
                        <td align="left">{{ $loop->iteration }}</td>
                        <td align="left">{{ $payment->user->firstname . ' ' . $payment->user->lastname}}</td>
                        <td align="left">{{ $payment->reciever }} </td>
                        <td align="left">{{ $payment->amount}} </td>
                        <td align="left">{{ $payment->created_at }}</td>
                    </tr>                
                @endforeach
            </tbody>
        </table>
    </div>
    </x-slot>
</x-admin.layout>