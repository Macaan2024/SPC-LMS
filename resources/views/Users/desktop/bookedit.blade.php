@extends('desktop.layout.bookedit_layout')


@section('bookedit-content')

<div class="container-fluid p-0 m-0">
    <div class="row p-5 m-0">
        <div class="col-12 p-0 m-0">
            <h5>Book Management</h5>
            <div class="border-bottom py-2 mb-5"></div>
        </div>
        <div class="d-flex gap-4 p-0 m-0">
            <div style="height:498px; width:250px;">
                <img class="img-fluid" src="/images/Arts books/build.png" alt="">
            </div>
            <div class="d-flex gap-4 justify-content-between w-50">
                <div class="d-flex flex-column gap-5">
                    <label class="fs-6" for="">ID : 1</label>
                    <label class="fs-6" for="">ISN : 978-0-13-601970-1</label>
                    <label class="fs-6" for="">Title : The New Art and Sciences of Teaching</label>
                    <label class="fs-6" for="">Author : Robert J. Marzano	</label>
                    <label class="fs-6" for="">Publication Year	 : The New Art and Sciences of Teaching</label>
                    <label class="fs-6" for="">Publication Address	 : The New Art and Sciences of Teaching</label>
                </div>
                <div class="d-flex flex-column gap-5">
                    <label class="fs-6" for="">Level : College</label>
                    <label class="fs-6" for="">Category : Arts</label>
                    <label class="fs-6" for="">Langguage : English</label>
                    <label class="fs-6" for="">Edition : 1st-Edition</label>
                    <label class="fs-6" for="">Quantity : 3</label>
                    <label class="fs-6" for="">Status : Available</label>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex gap-5">
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">ID</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">ISN</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Title</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Author</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Publication Year</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Publication Address</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Level</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Category </label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Langguage </label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Edition </label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="">Quantity </label>
                        <input class="form-control" type="text">
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('bookmanagement') }}"class="btn btn-success form-control mt-3">Submit</a>
            </div>
        </div>
    </div>
</div>
@endsection