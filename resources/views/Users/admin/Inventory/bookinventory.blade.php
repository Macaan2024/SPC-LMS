@extends('desktop.layout.bookinventory_layout')


@section('bookinventory-content')

<div class="container-fluid p-0 m-0">
    <div class="row p-5 m-0">
        <div class="col-12 p-0 m-0">
            <h5>Inventory</h5>
            <div class="border-bottom py-2 mb-5"></div>
            <div class="d-flex justify-content-start align-items-center">
                <div class="book-button-level d-flex gap-3">
                    <a class="btn btn-transparent border"  href="" style="background-color:#660809; color:white;">College</a>
                    <a class="btn btn-transparent border"  href="">Senior High</a>
                    <a class="btn btn-transparent border"  href="">Highschool</a>
                    <a class="btn btn-transparent border"  href="">Elementary</a>
                </div>
            </div>
            <div class="form-group mt-5" style="width:500px;">
                <form class="d-flex" role="search">
                <select name="" id="" class="form-select me-2">
                    <option value="" selected>Select Search Type</option>
                    <option value="">Book Title</option>
                    <option value="">Book Author</option>.
                    <option value="">Book Accession Number</option>
                    <option value="">Book ISBN</option>
                </select>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="search-button" type="submit">Search</button>
                </form>
            </div>
            <div class="mt-5 d-flex justify-content-between">
                <div class="book-new d-flex gap-3">
                    <a class="btn btn-transparent border"  href="" style="background-color:#660809; color:white;">All</a>
                    <a class="btn btn-transparent border"  href="">New</a>
                    <a class="btn btn-transparent border"  href="">Old books</a>
                </div>
                <div class="book-select-course d-flex gap-3 align-items-center">
                    <label for="" class="text-nowrap">Category : </label>
                    <select class="form-select" name="" id="">
                        <option selected>Select Category</option>
                        <option>Computer Studies</option>
                        <option>Electronics</option>
                        <option>Electrical</option>
                        <option>Mechanical</option>
                        <option>Arts</option>
                    </select>
                </div>
            </div>
            <div class="mt-5">
                <table class="book-management-table table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>ISN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Quantity</th>
                            <th>Borrow</th>
                            <th>Borrowed</th>
                            <th>Left</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr style="vertical-align: middle !important;">
                            <td>1</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>4</td>
                            <td>1</td>
                            <td>2</td>
                            <th>3</th>
                            <td>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle !important;">
                            <td>1</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>4</td>
                            <td>1</td>
                            <td>2</td>
                            <th>3</th>
                            <td>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle !important;">
                            <td>1</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>4</td>
                            <td>1</td>
                            <td>2</td>
                            <th>3</th>
                            <td>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle !important;">
                            <td>1</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>4</td>
                            <td>1</td>
                            <td>2</td>
                            <th>3</th>
                            <td>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle !important;">
                            <td>1</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>4</td>
                            <td>1</td>
                            <td>2</td>
                            <th>3</th>
                            <td>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div>
@endsection