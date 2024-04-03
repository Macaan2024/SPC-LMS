@extends('desktop.layout.Reservation_layout')


@section('Reservation-content')

<div class="container-fluid p-0 m-0">
    <div class="row p-5 m-0">
        <div class="col-12 p-0 m-0">
            <h5>Transactions</h5>
            <div class="border-bottom py-2 mb-5"></div>

            <div class="row p-0 m-0 mt-3">
            <div class="col-12 p-0 m-0">
                <div class="mt-5">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Patrons Name</th>
                                    <th>Usertype</th>
                                    <th>Book ID</th>
                                    <th>Book Title</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Casan Macaan</td>
                                    <td>Student</td>
                                    <td>1</td>
                                    <td>Human Anatomy</td>
                                    <td>
                                        <a href="" class="btn btn-primary">View</a>
                                        <a href="" class="btn btn-success">Accept</a>
                                        <a href="" class="btn btn-danger">Decline</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Casan Macaan</td>
                                    <td>Student</td>
                                    <td>1</td>
                                    <td>Human Anatomy</td>
                                    <td>
                                        <a href="" class="btn btn-primary">View</a>
                                        <a href="" class="btn btn-success">Accept</a>
                                        <a href="" class="btn btn-danger">Decline</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Casan Macaan</td>
                                    <td>Student</td>
                                    <td>1</td>
                                    <td>Human Anatomy</td>
                                    <td>
                                        <a href="" class="btn btn-primary">View</a>
                                        <a href="" class="btn btn-success">Accept</a>
                                        <a href="" class="btn btn-danger">Decline</a>
                                    </td>
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