<x-student.layout>
    <x-slot name="transactionview">
        <div class="container">
            <div class="row p-0 m-0 mt-5 justify-content-center">
                <div class="d-flex justify-content-md-between justify-content-center">
                    <div class="d-flex flex-column justify-content-start align-items-md-start align-items-center">
                        <img src="/books_images/{{ $transaction->book->level . '/' . $transaction->book->category . '/' . $transaction->book->image}}" alt="book_image" style="height:230px;width:auto;">
                        <div class="mt-2">
                            <label for="" class="fs-6">Accesion Number:</label>
                            <span class="fs-6">{{ $transaction->book->accesion_number}}</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column d-md-block d-none">
                        @if($transaction->user->role_id == 1)
                            <img src="{{'/' .$transaction->user->role->role_description . '/' . $transaction->user->level . '/' . $transaction->user->user_image}}" alt="book_image" style="height:230px;width:auto;">
                        @endif
                        <div class="mt-2">
                            <label for="" class="fs-6">Unique ID:</label>
                            <span class="fs-6">{{ $transaction->user->unique_id}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-6 col-12">
                    <div class="d-flex flex-column gap-2">
                        <div>
                            <label for="" class="fs-6">Book Isbn : </label>
                            <span class="fs-6">{{$transaction->book->isbn}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Title : </label>
                            <span class="fs-6">{{$transaction->book->title}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Author : </label>
                            <span class="fs-6">{{$transaction->book->author}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Publication Year : </label>
                            <span class="fs-6">{{$transaction->book->publication_year}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Publication Year : </label>
                            <span class="fs-6">{{$transaction->book->publication_address}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Class Level : </label>
                            <span class="fs-6">{{$transaction->book->level}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Edition : </label>
                            <span class="fs-6">{{$transaction->book->edition}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Edition : </label>
                            <span class="fs-6">{{$transaction->book->edition}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Category : </label>
                            <span class="fs-6">{{$transaction->book->category}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Pages : </label>
                            <span class="fs-6">{{$transaction->book->pages}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Book Quantity : </label>
                            <span class="fs-6">{{$transaction->book->quantity}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-none d-md-block">
                    <div class="d-flex flex-column align-items-end gap-2">
                        <div>
                            <label for="" class="fs-6">Role: </label>
                            <span class="fs-6">{{$transaction->user->role->role_description}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Lastname : </label>
                            <span class="fs-6">{{$transaction->user->lastname}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Firsntame : </label>
                            <span class="fs-6">{{$transaction->user->firstname}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Gender : </label>
                            <span class="fs-6">{{$transaction->user->gender}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Cellphone : </label>
                            <span class="fs-6">{{$transaction->user->cpnumber}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Class Level : </label>
                            <span class="fs-6">{{$transaction->user->level}}</span>
                        </div>
                        @if($transaction->user->level == 'College')
                            <div>
                                <label for="" class="fs-6">Course : </label>
                                <span class="fs-6">{{ $transaction->user->course }}</span>
                            </div>
                            <div>
                                <label for="" class="fs-6">Department : </label>
                                <span class="fs-6">{{ $transaction->user->department }}</span>
                            </div>
                            <div>
                                <label for="" class="fs-6">Year : </label>
                                <span class="fs-6">{{ $transaction->user->year }}</span>
                            </div>
                        @elseif($transaction->user->level == 'Senior Highschool')
                            <div>
                                <label for="" class="fs-6">Strand : </label>
                                <span class="fs-6">{{ $transaction->user->strand }}</span>
                            </div>
                            <div>
                                <label for="" class="fs-6">Grade : </label>
                                <span class="fs-6">{{ $transaction->user->grade }}</span>
                            </div>
                            <div>
                                <label for="" class="fs-6">Section : </label>
                                <span class="fs-6">{{ $transaction->user->section }}</span>
                            </div>
                        @elseif($transaction->user->level == 'Elementary')
                            <div>
                                <label for="" class="fs-6">Grade : </label>
                                <span class="fs-6">{{ $transaction->user->grade }}</span>
                            </div>
                            <div>
                                <label for="" class="fs-6">Section : </label>
                                <span class="fs-6">{{ $transaction->user->section }}</span>
                            </div>
                            @elseif($transaction->user->level == 'Junior Highschool')
                            <div>
                                <label for="" class="fs-6">Grade : </label>
                                <span class="fs-6">{{ $transaction->user->grade }}</span>
                            </div>
                            <div>
                                <label for="" class="fs-6">Section : </label>
                                <span class="fs-6">{{ $transaction->user->section }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <hr>
            <h6>Transaction</h6>
                <div class="d-flex flex-column gap-2 mt-3">
                    <p class="p-0 m-0">Start Date : <span>{{ $transaction->start_date }}</span></p>
                    <p class="p-0 m-0">Start Time : <span>{{ $transaction->start_time }}</span></p>
                    <p class="p-0 m-0">End Day : <span>{{ $transaction->end_day }}</span></p>
                    <p class="p-0 m-0">End Time : <span>{{ $transaction->end_time }}</span></p>
                    <p class="p-0 m-0">Return Date & Time :
                        @if ($transaction->status == 'returned') 
                        <span>{{ $transaction->updated_at ? \Carbon\Carbon::parse($transaction->updated_at)->timezone('Asia/Manila')->format('Y-m-d h:i A') : '' }}</span>
                        @endif
                    </p>
                    <p class="p-0 m-0">Overdue : <span>{{ $transaction->overdue }}</span></p>
                    <p class="p-0 m-0">Penalty : <span>{{ $transaction->penalty }}</span></p>
                    <p class="p-0 m-0">Status : <span>{{ $transaction->status }}</span></p>
                </div>
        </div>
    </x-slot>
</x-student.layout>