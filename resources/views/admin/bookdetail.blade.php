<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        
                    <div class="row">
                        <div class="col-md-6">                              
                        {{-- <div class="isbn-container"> --}}
                            {{-- <h4 class="isbn">ISBN: 978-3-16-148410-0</h4> --}}
                            <h4 class="judulbesar">{{ $book->title }}</h4>
                        {{-- </div> --}}
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="actions"> --}}
                                <a href="{{ url('view_editbooklist') }}" class="edit-book-button">EDIT</a>
                                <a href="{{ url('/view_booklist/' . $book->id . '/delete') }}" class="delete-book-button">DELETE</a>

                            {{-- </div> --}}
                        </div>

                    </div>
                    <br>
                        <div class="row">
                        <div class="col-md-7">                
                            <p class="text-muted"> Author(s): {{ $book->authors }} </p>
                            {{-- <p class="text-muted"> Publishers: J. B. Lippincott & Co. </p> --}}
                            <p class="text-muted"> Publication Date: {{ Carbon\Carbon::parse($book->published_date)->format('d M Y') }} </p>
                            <p class="text-muted"> Genre: {{ $book->category->category_name }} </p>
                            <p class="text-muted"> Language: {{ $book->language }}  </p>
                            <p class="text-muted"> Buy On: @if(isset($book->buyOn[0])) {{ $book->buyOn->url }} @else  - @endif  </p>
                        
                        
                            <h4 class="card-title">SUMMARY</h4>
                            <p class="text-muted"> {{ $book->summary }}  </p>
                        </div>
                        <div class="col-md-5">
                            <div class="book-cover">
                                <img src="{{ $book->cover_image }}" alt="Book Cover" class="ukuranbuku">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
