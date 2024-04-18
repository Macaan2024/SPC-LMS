@extends('Users.admin.layout.usermanagement_layout')

@section('usermanagement-content')
<div class="container-fluid p-0 m-0">
    <div class="row p-5 m-0">
        <div class="col-12 p-0 m-0">
            <h5>User Management</h5>
            <div class="border-bottom py-2 mb-5"></div>
        </div>
        <div class="row p-0 m-0 mt-3">
            <div class="col-12 p-0 m-0">
                <div class="d-flex gap-4">
                    <div class="flex-direction-col p-0 m-0">
                        <div class="book-title-box">
                            <h6 class="p-0 m-0">Total College</h6>
                        </div>
                        <div class="book-totalnum-box">
                            <p class="fs-1">6</p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="member-title-box">
                            <h6 class="p-0 m-0">Total Senior Highschool</h6>
                        </div>
                        <div class="member-totalnum-box">
                            <p class="fs-1">3</p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="member-title-box">
                            <h6 class="p-0 m-0">Total Junior Highschool</h6>
                        </div>
                        <div class="member-totalnum-box">
                            <p class="fs-1">4</p>
                        </div>
                    </div>
                    <div class="flex-direction-col p-0 m-0">
                        <div class="member-title-box">
                            <h6 class="p-0 m-0">Total Elementary</h6>
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
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Level</th>
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
                        <td>Macaan</td>
                        <td>Casan</td>
                        <td>Macarandas</td>
                        <td>College</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-primary" href="{{ route('userview') }}">
                                <svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                            </a>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Macaan</td>
                        <td>Casan</td>
                        <td>Macarandas</td>
                        <td>College</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-primary" href="{{ route('userview') }}">
                                <svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                            </a>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Macaan</td>
                        <td>Casan</td>
                        <td>Macarandas</td>
                        <td>College</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-primary" href="{{ route('userview') }}">
                                <svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                            </a>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Macaan</td>
                        <td>Casan</td>
                        <td>Macarandas</td>
                        <td>College</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-primary" href="{{ route('userview') }}">
                                <svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                            </a>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                    <tr style="vertical-align: middle !important;">
                        <td>1</td>
                        <td>2022-00317</td>
                        <td>Macaan</td>
                        <td>Casan</td>
                        <td>Macarandas</td>
                        <td>College</td>
                        <td class="text-success">Active</td>
                        <td>3/20/2024</td>
                        <td>4/20/2024</td>
                        <td>
                            <a class="btn btn-bg-primary" href="{{ route('userview') }}">
                                <svg class="text-primary"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="currentColor" stroke-width="2" d="M12 21c-5 0-11-5-11-9s6-9 11-9s11 5 11 9s-6 9-11 9Zm0-14a5 5 0 1 0 0 10a5 5 0 0 0 0-10z"/></svg></button>
                            </a>
                            <a class="btn btn-bg-success" href="{{ route('bookedit') }}">
                                <svg class="text-success"xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M16.698 21.996h-11.6a3.06 3.06 0 0 1-2.2-.92a3.09 3.09 0 0 1-.9-2.21V7.276a3 3 0 0 1 .91-2.19a3 3 0 0 1 1-.67a3.06 3.06 0 0 1 1.2-.24h4.44a.75.75 0 0 1 0 1.5h-4.44a2 2 0 0 0-.63.12a1.62 1.62 0 0 0-.99 1.5v11.59a1.62 1.62 0 0 0 .47 1.16a1.62 1.62 0 0 0 1.15.47h11.6c.213 0 .423-.04.62-.12a1.54 1.54 0 0 0 .52-.35a1.49 1.49 0 0 0 .35-.52a1.51 1.51 0 0 0 .13-.63v-4.44a.75.75 0 1 1 1.5 0v4.47a3.06 3.06 0 0 1-.92 2.2a3.16 3.16 0 0 1-1 .68c-.387.14-.798.205-1.21.19"/><path fill="currentColor" d="M21.808 5.456a1.86 1.86 0 0 0-.46-.68l-2.15-2.15a1.86 1.86 0 0 0-.68-.46a2.1 2.1 0 0 0-2.31.46l-1.71 1.71v.05l-7.74 7.73a2.11 2.11 0 0 0-.61 1.48v2.17a2.12 2.12 0 0 0 2.11 2.11h2.17a2.07 2.07 0 0 0 1.48-.62l7.74-7.74l1.72-1.72c.202-.19.36-.422.46-.68a2 2 0 0 0 0-1.63zm-1.38 1.05a.56.56 0 0 1-.14.2l-1.22 1.22l-3-3l1.23-1.23a.64.64 0 0 1 .44-.18a.59.59 0 0 1 .23.05c.076.032.145.08.2.14l2.16 2.15a.69.69 0 0 1 .13.2a.59.59 0 0 1 0 .23a.6.6 0 0 1-.03.22"/></svg>
                            </a>
                            <button class="btn bth-bg-danger"><svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 1024 1024"><rect width="1024" height="1024" fill="none"/><path fill="currentColor" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32zm448-64v-64H416v64zM224 896h576V256H224zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32m192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32"/></svg></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- -------------------------- ADD ACCOUNT --- -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add User</button>
            <!-- -- MODALITY START -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content py-4 px-3 m-0">
                        <div class="modal-header text-white justify-content-center align-items-center border-0">
                            <h6 class="text-black p-0 m-0 text-center fw-medium fs-5">ADD Student</h6>
                        </div>
                        <div class="modal-body modal-body-scroll">
                            <form action="{{ route('store') }}" method="POST">
                                @csrf
                                <div class="d-flex flex-column gap-4">
                                    {{-- Student Information --}}
                                    <div>
                                        <div style="background-color:#661011;" class="p-2 mb-4 rounded">
                                            <h6 class="p-0 m-0 text-white fw-normal" >Student Information</h6>
                                        </div>
                                        <div class="d-flex justify-content-between gap-5 align-items-start"> 
                                            <div class="d-flex flex-column gap-4">
                                                <div class="m-0 p-0">
                                                    <label for="">Lastname</label>
                                                        <input type="text" name="lastname" class="form-control">
                                                </div>
                                                <div class="m-0 p-0">
                                                    <label for="">Firstname</label>
                                                        <input type="text" name="firstname" class="form-control">
                                                </div>
                                                <div class="m-0 p-0">
                                                    <label for="">Middlename</label>
                                                        <input type="text" name="middlename" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column gap-4 class="m-0 p-0"">
                                                <div class="m-0 p-0"> 
                                                    <label for=""class="mb-2">Gender</label><br>
                                                        <input type="radio" name="gender" class="ms-3 form-check-input" value="Male">
                                                        <span class="ms-1">Male</span>
                                                        <input type="radio" name="gender" class="ms-3 form-check-input" value="Female">
                                                        <span class="ms-1">Female</span>  
                                                </div>
                                                <div>
                                                    <label for="">Cellphone Number</label>
                                                        <input type="text" name="cpnumber" class="form-control">
                                                </div>
                                                <div>
                                                    <label for="">Email</label>
                                                    <input type="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Education Information --}}
                                    <div>
                                        <div style="background-color:#661011;" class="p-2 mb-4 rounded">
                                            <h6 class="p-0 m-0 text-white fw-normal" >Education Information</h6>
                                        </div>
                                        <div class="d-flex flex-column gap-3">
                                            <div>
                                                <label for="">Unique ID</label>
                                                <input type="text" name="unique_id" class="form-control" placeholder="Ex: 2022-00317">
                                            </div>
                                            <div>
                                                <label for="" class="mb-1">Class Level</label>
                                                <select name="level" class="form-select" aria-label="Default select example" id="classLevelSelect">
                                                    <option disabled selected>Choose level</option>
                                                    <option value="College">College</option>
                                                    <option value="Senior Highschool">Senior Highschool</option>
                                                    <option value="Highschool">Highschool</option>
                                                    <option value="Elementary">Elementary</option>
                                                </select>
                                            </div>
                                            {{-- Colleges --}}
                                            {{-- Course --}}
                                            <div class="College" style="display:none;">
                                                <label for="">Course</label>
                                                <input type="text" name="course" class="form-control">
                                            </div>
                                            {{-- COllege Year --}}
                                            <div class="College" style="display:none;">
                                                <label for="" class="mb-1">Year</label>
                                                <select name="year" class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Choose Year</option>
                                                    <option value="1st-Year">1st-Year</option>
                                                    <option value="2nd-Year">2nd-Year</option>
                                                    <option value="3rd-Year">3rd-Year</option>
                                                    <option value="4th-Year">4th-Year</option>
                                                </select>
                                            </div>
                                            {{-- COllege Department --}}
                                            <div class="College" style="display:none;">
                                                <label for="">Department</label>
                                                <input type="text" name="department" class="form-control">
                                            </div>
                                            {{-- Section for SHS, JHS and Elem --}}
                                            <div id="Section" style="display:none;">
                                                <label for="">Section</label>
                                                <input type="text" name="section" class="form-control">
                                            </div>
                                            {{-- Strand for Senior Highschool --}}
                                            <div class="Shs" style="display:none;">
                                                <label for="">Strand</label>
                                                <input type="text" name="strand" class="form-control">
                                            </div>
                                            {{-- Grrade for Senior Highschool --}}
                                            <div class="Shs" style="display:none;">
                                                <label for="" class="mb-1">Grade</label>
                                                <select name="grade" class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Choose Grade</option>
                                                    <option value="1st-Year">Grade-11</option>
                                                    <option value="2nd-Year">Grade-12</option>
                                                </select>
                                            </div>
                                            
                                            {{-- Year for Junior Highschool --}}
                                            <div class="Jhs" style="display:none;">
                                                <label for="" class="mb-1">Year</label>
                                                <select name="year" class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Choose Year</option>
                                                    <option value="1st-Year">1st-Year</option>
                                                    <option value="2nd-Year">2nd-Year</option>
                                                    <option value="3rd-Year">3rd-Year</option>
                                                    <option value="4th-Year">4th-Year</option>
                                                </select>
                                            </div>
                                            {{-- Grade for Elementary --}}
                                            <div class="Elem" style="display:none;">
                                                <label for="" class="mb-1">Grade</label>
                                                <select name="grade" class="form-select" aria-label="Default select example">
                                                    <option disabled selected>Choose Grade</option>
                                                    <option value="Grade 1">Grade 1</option>
                                                    <option value="Grade 2">Grade 2</option>
                                                    <option value="Grade 3">Grade 3</option>
                                                    <option value="Grade 4">Grade 4</option>
                                                    <option value="Grade 5">Grade 5</option>
                                                    <option value="Grade 6">Grade 6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            var classLevelSelect = document.getElementById('classLevelSelect');

                                            classLevelSelect.addEventListener('change', function() {
                                                // Hide all divs initially
                                                var elements = document.querySelectorAll('.College, .Shs, .Jhs, .Elem');
                                                elements.forEach(function(element) {
                                                    element.style.display = 'none';
                                                });

                                                // Show the divs corresponding to the selected option
                                                var selectedLevel = this.value;
                                                if (selectedLevel === 'College') {
                                                    document.querySelectorAll('.College').forEach(function(element) {
                                                        element.style.display = 'block';
                                                    });
                                                } else if (selectedLevel === 'Senior Highschool') {
                                                    document.querySelectorAll('.Shs').forEach(function(element) {
                                                        element.style.display = 'block';
                                                    });
                                                    document.getElementById('Section').style.display = 'block';
                                                } else if (selectedLevel === 'Highschool') {
                                                    document.querySelectorAll('.Jhs').forEach(function(element) {
                                                        element.style.display = 'block';
                                                    });
                                                    document.getElementById('Section').style.display = 'block';
                                                } else if (selectedLevel === 'Elementary') {
                                                    document.querySelectorAll('.Elem').forEach(function(element) {
                                                        element.style.display = 'block';
                                                    });
                                                    document.getElementById('Section').style.display = 'block';
                                                }
                                            });
                                        });
                                    </script>
                                    <input type="hidden" name="password">
                                    <input type="hidden" name="role_description" value="Student">
                                    <input type="submit" name="submit" class="form-control btn btn-success">
                                </div>
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