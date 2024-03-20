@extends('desktop.layout.userview_layout')


@section('userview-content')

<div class="container-fluid p-0 m-0">
    <div class="row p-5 m-0">
        <div class="col-12 p-0 m-0">
            <h5>Book Management</h5>
            <div class="border-bottom py-2 mb-5"></div>
        </div>
        <div class="d-flex gap-4 p-0 m-0">
            <div style="height:498px; width:250px;">
                <img class="img-fluid" src="/userimage/cas.jpg" alt="">
            </div>
            <div class="d-flex gap-4 justify-content-between w-50">
                <div class="d-flex flex-column gap-4">
                    <label class="fs-6" for="">ID : 1</label>
                    <label class="fs-6" for="">Student ID : 978-0-13-601970-1</label>
                    <label class="fs-6" for="">Lastname : The New Art and Sciences of Teaching</label>
                    <label class="fs-6" for="">Firstname : Robert J. Marzano	</label>
                    <label class="fs-6" for="">Middlename : The New Art and Sciences of Teaching</label>
                    <label class="fs-6" for="">Level: The New Art and Sciences of Teaching</label>
                    <label class="fs-6" for="">Section: The New Art and Sciences of Teaching</label>
                    <label class="fs-6" for="">Course: The New Art and Sciences of Teaching</label>
                    <label class="fs-6" for="">Year: The New Art and Sciences of Teaching</label>
                </div>
                <div class="d-flex flex-column gap-5">
                    <label class="fs-6" for="">Gender : College</label>
                    <label class="fs-6" for="">Cellphone : Arts</label>
                    <label class="fs-6" for="">Deppartment : English</label>
                    <label class="fs-6" for="">Password : 1st-Edition</label>
                    <label class="fs-6" for="">Email : 3</label>
                    <label class="fs-6" for="">Created At</label>
                    <label class="fs-6" for="">Updated At</label>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection