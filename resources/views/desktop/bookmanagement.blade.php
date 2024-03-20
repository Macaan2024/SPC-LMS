@extends('desktop.layout.bookmanage_layout')


@section('bookmanagement-content')

<div class="container-fluid p-0 m-0">
    <div class="row p-5 m-0">
        <div class="col-12 p-0 m-0">
            <h5>Book Management</h5>
            <div class="border-bottom py-2 mb-5"></div>

            <div class="book-button-level d-flex gap-3">
                <a class="btn btn-transparent border"  href="" style="background-color:#660809; color:white;">College</a>
                <a class="btn btn-transparent border"  href="">Senior High</a>
                <a class="btn btn-transparent border"  href="">Highschool</a>
                <a class="btn btn-transparent border"  href="">Elementary</a>
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
                            <th>Publication Year</th>
                            <th>Publication Address</th>
                            <th>Level</th>
                            <th>Category</th>
                            <th>Langguage</th>
                            <th>Edition</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr style="vertical-align: middle !important;">
                            <td>1</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>1999</td>
                            <td>United States</td>
                            <td>College</td>
                            <td>Arts</td>
                            <td>English</td>
                            <td>1st-Edition</td>
                            <td>4</td>
                            <td class="text-danger">Available</td>
                            <td>
                                <a class="btn btn-bg-primary" href="{{ route('bookview') }}">
                                    <svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                                </a>
                                <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                    <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                                </a>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle !important;">
                            <td>2</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>1999</td>
                            <td>United States</td>
                            <td>College</td>
                            <td>Arts</td>
                            <td>English</td>
                            <td>1st-Edition</td>
                            <td>4</td>
                            <td class="text-danger">Available</td>
                            <td>
                                <button class="btn btn-bg-primary"><svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                                <button class="btn btn-bg-success"><svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg></button>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle !important;">
                            <td>3</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>1999</td>
                            <td>United States</td>
                            <td>College</td>
                            <td>Arts</td>
                            <td>English</td>
                            <td>1st-Edition</td>
                            <td>4</td>
                            <td class="text-danger">Available</td>
                            <td>
                                <button class="btn btn-bg-primary"><svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                                <button class="btn btn-bg-success"><svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg></button>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle !important;">
                            <td>4</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>1999</td>
                            <td>United States</td>
                            <td>College</td>
                            <td>Arts</td>
                            <td>English</td>
                            <td>1st-Edition</td>
                            <td>4</td>
                            <td class="text-danger">Available</td>
                            <td>
                                <button class="btn btn-bg-primary"><svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                                <button class="btn btn-bg-success"><svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg></button>
                                <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                            </td>
                        </tr>
                        <tr style="vertical-align: middle !important;">
                            <td>5</td>
                            <td>978-0-13-601970-1</td>
                            <td>The New Art and Sciences of Teaching</td>
                            <td>Robert J. Marzano</td>
                            <td>1999</td>
                            <td>United States</td>
                            <td>College</td>
                            <td>Arts</td>
                            <td>English</td>
                            <td>1st-Edition</td>
                            <td>4</td>
                            <td class="text-danger">Available</td>
                            <td>
                                <button class="btn btn-bg-primary"><svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                                <button class="btn btn-bg-success"><svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg></button>
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