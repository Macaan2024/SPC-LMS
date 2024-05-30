<x-admin.layout>
    <x-slot name="transaction_view">
        <div class="container-xxl p-0">
            <div class="row p-0 m-0 mt-5">
                <div class="col-12 p-0 m-0 py-2 px-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <img src="/books_images/{{ $transaction->book->level . '/' . $transaction->book->category . '/' . $transaction->book->image}}" alt="book_image" style="height:250px;width:auto;">
                            <div class="mt-2">
                                <label for="" class="fs-6">Accesion Number:</label>
                                <span class="fs-6">{{ $transaction->book->accesion_number}}</span>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <img src="/books_images/{{ $transaction->book->level . '/' . $transaction->book->category . '/' . $transaction->book->image}}" alt="book_image" style="height:250px;width:auto;">
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
                            <label for="" class="fs-6">Book Publication Year : </label>
                            <span class="fs-6">{{$transaction->book->publication_address}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin.layout>