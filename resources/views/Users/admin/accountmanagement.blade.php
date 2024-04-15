@extends('desktop.layout.accountmanagement_layout')


@section('accountmanagement-content')

<div class="container-fluid p-0 m-0">
    <div class="row p-5 m-0">
        <div class="col-12 p-0 m-0">
            <h5>Account Management</h5>
            <div class="border-bottom py-2 mb-5"></div>
        </div>
        <div class="row p-0 m-0 mt-3">
            <div class="col-12 p-0 m-0">
                <div class="d-flex gap-4">
                    <div class="flex-direction-col p-0 m-0">
                        <div class="book-title-box">
                            <h6 class="p-0 m-0">Total Account</h6>
                        </div>
                        <div class="book-totalnum-box">
                            <p class="fs-1">6</p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="member-title-box">
                            <h6 class="p-0 m-0">Total Active Account</h6>
                        </div>
                        <div class="member-totalnum-box">
                            <p class="fs-1">3</p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="member-title-box">
                            <h6 class="p-0 m-0">Total Deactivate Account</h6>
                        </div>
                        <div class="member-totalnum-box">
                            <p class="fs-1">4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-bottom my-5"></div>
        <div class="book-button-level d-flex gap-3">
                <a class="btn btn-transparent border"  href="" style="background-color:#660809; color:white;">Student</a>
                <a class="btn btn-transparent border"  href="">Faculty</a>
                <a class="btn btn-transparent border"  href="">Library Staff</a>
        </div>
        <div class="form-group mt-5" style="width:500px;">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="search-button" type="submit">Search</button>
            </form>
        </div>
        <div class="mt-5">
            <table class="book-management-table table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Student ID</th>
                        <th>Usertype</th>
                        <th>Password</th>
                        <th>Status</th>
                        <th>Crated At</th>
                        <th>Update At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Student</td>
                        <td>123456789</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Student</td>
                        <td>123456789</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Student</td>
                        <td>123456789</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Student</td>
                        <td>123456789</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Student</td>
                        <td>123456789</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- -------------------------- ADD ACCOUNT --- -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Account</button>

            <!-- -- MODALITY START -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">ADD BOOK</h1>
                        </div>
                        <div class="modal-body modal-body-scroll">
                            <form action="">
                                <label for="">Student ID</label>
                                    <input type="text" class="form-control">
                                <label for="">Username</label>
                                    <input type="text" class="form-control">
                                <label for="">Email Address</label>
                                    <input type="text" class="form-control">
                                <label for="">Password</label>
                                    <input type="text" class="form-control">
                                <label for="">Repassword</label>
                                    <input type="text" class="form-control">
                                <input type="submit" class="btn btn-success mt-3 form-control">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -- MODALITY END -->
        </div>
    </div>
</div>
@endsection