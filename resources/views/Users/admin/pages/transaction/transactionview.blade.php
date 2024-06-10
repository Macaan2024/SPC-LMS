<x-admin.layout>
    <x-slot name="transaction_view">
        <div class="container-xxl p-0">
            <div class="row p-0 m-0 mt-5 mb-5">
                <div class="col-12 p-0 m-0 py-2 px-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <img src="/books_images/{{ $transaction->book->level . '/' . $transaction->book->category . '/' . $transaction->book->image}}" alt="book_image" style="height:250px;width:auto;">
                            <div class="mt-2">
                                <label for="" class="fs-6">Accession Number:</label>
                                <span class="fs-6">{{ $transaction->book->accesion_number}}</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            @if ($transaction->user->user_id == 1)
                                <img src="{{ asset($transaction->user->role->role_description . '/' . $transaction->user->level . '/' . $transaction->user->user_image)}}" alt="user_image" style="height:250px;width:auto;">
                            @else
                                <img src="{{ asset($transaction->user->role->role_description . '/' . $transaction->user->user_image)}}" alt="user_image" style="height:250px;width:auto;">
                            @endif
                            <div class="mt-2">
                                <label for="" class="fs-6">Unique ID:</label>
                                <span class="fs-6">{{ $transaction->user->unique_id}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-6">
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
                            <label for="" class="fs-6">Book Publication Address : </label>
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
                <div class="col-6">
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
                            <label for="" class="fs-6">Firstname : </label>
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
                <hr>
                <div class="col-12">
                    <div class="d-flex flex-column gap-2">
                        <div>
                            <label for="" class="fs-6">Transaction Name : </label>
                            <span class="fs-6">{{ $transaction->user->firstname . ' ' . $transaction->user->lastname }}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Transaction Book Title : </label>
                            <span class="fs-6">{{ $transaction->book->title }}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Transaction Start Date : </label>
                            <span class="fs-6">{{ $transaction->start_date }}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Transaction Start Time : </label>
                            <span class="fs-6">{{ \Carbon\Carbon::parse($transaction->start_time)->format('g:i A')}}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Transaction End Date : </label>
                            <span class="fs-6">{{ $transaction->end_day }}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Transaction End Time : </label>
                            <span class="fs-6">{{ \Carbon\Carbon::parse($transaction->end_time)->format('g:i A')}}</span>
                        </div>
                        @php
                            // Calculate the consumed hours
                            $startDateTime = \Carbon\Carbon::parse($transaction->start_date . ' ' . $transaction->start_time, 'Asia/Manila');
                            $endDateTime = \Carbon\Carbon::parse($transaction->updated_at, 'Asia/Manila');
                            $consumedHours = $startDateTime->diffInHours($endDateTime);

                            // Default duration in hours
                            $defaultDurationHours = 16;

                            // Calculate remaining hours and check for overdue
                            $remainingHours = max(0, $defaultDurationHours - $consumedHours);
                        @endphp
                        <div>
                            <label for="" class="fs-6">Default Duration Countdown : </label>
                            <span class="fs-6">16 Hours</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Time Used : </label>
                            <span class="fs-6">{{ $consumedHours }} Hours</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Remaining Hours Left : </label>
                            <span class="fs-6">{{ $remainingHours }} Hours</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Overdue : </label>
                            <span class="fs-6">{{ $transaction->overdue }}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Penalty : </label>
                            <span class="fs-6">{{ $transaction->penalty }}</span>
                        </div>
                        <div>
                            <label for="" class="fs-6">Return Date & Time : </label>
                            <span>{{ $transaction->updated_at ? \Carbon\Carbon::parse($transaction->updated_at)->timezone('Asia/Manila')->format('Y-m-d h:i A') : '' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin.layout>