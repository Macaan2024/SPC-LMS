@extends('desktop.layout.transaction_layout')


@section('transaction-content')

<div class="container-fluid p-0 m-0">
    <div class="row p-5 m-0">
        <div class="col-12 p-0 m-0">
            <h5>Transactions</h5>
            <div class="border-bottom py-2 mb-5"></div>

            <div class="row p-0 m-0 mt-3">
            <div class="col-12 p-0 m-0">
                <div class="d-flex justify-content-between">
                    <div class="d-flex gap-4">
                        <div class="flex-direction-col p-0 m-0">
                            <div class="book-title-box">
                                <h6 class="p-0 m-0">On Use</h6>
                            </div>
                            <div class="book-totalnum-box">
                                <p class="fs-1">6</p>
                            </div>
                        </div>
                        <div class="flex-direction-col p-0 m-0">
                            <div class="member-title-box">
                                <h6 class="p-0 m-0">Return</h6>
                            </div>
                            <div class="member-totalnum-box">
                                <p class="fs-1">3</p>
                            </div>
                        </div>
                        <div class="flex-direction-col p-0 m-0">
                            <div class="member-title-box">
                                <h6 class="p-0 m-0">Delay</h6>
                            </div>
                            <div class="member-totalnum-box">
                                <p class="fs-1">4</p>
                            </div>
                        </div>
                        <div class="flex-direction-col p-0 m-0">
                            <div class="member-title-box">
                                <h6 class="p-0 m-0">Lost</h6>
                            </div>
                            <div class="member-totalnum-box">
                                <p class="fs-1">4</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex-direction-col p-0 m-0">
                                <div class="member-title-box">
                                    <h6 class="p-0 m-0">Total</h6>
                                </div>
                                <div class="member-totalnum-box">
                                    <p class="fs-1">17</p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Book ID</th>
                                    <th>Book Title</th>
                                    <th>Status</th>
                                    <th>Borrow Date</th>
                                    <th>Return Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Casan Macaan</td>
                                    <td>1</td>
                                    <td>Python 1</td>
                                    <td>On use</td>
                                    <td>3/20/2024</td>
                                    <td></td>
                                    <td><a href="" class="btn btn-primary">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection