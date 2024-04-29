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
                        <br>
                        <h4 class="card-title m-0">Edit Book</h4>
                        <br>
                        <form class="form-sample" action='/view_editbooklist/{{ $book->id }}' method='post' enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control placeholders" value='{{ $book->title }}' name='title' placeholder="Type Title"/>
                                    </div>
                                </div>
                                @error('title')
                                {{ $message }}
                                @enderror
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="number" value='{{ $book->book_rating }}' name='book_rating' class="form-control placeholders" placeholder="Rating" max='5'/>
                                    </div>
                                    @error('rating')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Author(s)</label>
                                        <input type="text" class="form-control" value='{{ $book->authors }}' name='authors' placeholder="Type Author"/>
                                    </div>
                                    @error('authors')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Publisher</label>
                                        <input type="text" class="form-control" placeholder="Type Publisher"/>
                                    </div>
                                </div> --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Publication Date</label>
                                        <input type='date' name='published_date' value='{{ Carbon\Carbon::parse($book->published_date)->format('Y-m-d')  }}' class="form-control" placeholder="dd/mm/yyyy" />
                                    </div>
                                    @error('published_date')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cover</label>
                                        <input type="text" class="form-control" value='{{ $book->cover_image }}' name='cover_image' placeholder="Image url"/>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Genre</label>
                                        <select class="form-control" name='category_id' placeholder="Choose Genre">
                                            <option value='1' @if($book->category_id == '1') selected @endif>Fiction</option>
                                            <option value='2' @if($book->category_id == '2') selected @endif>Thriller & Suspense</option>
                                            <option value='3' @if($book->category_id == '3') selected @endif>Mystery & Detective</option>
                                            <option value='4' @if($book->category_id == '4') selected @endif>Romance</option>
                                            <option value='5' @if($book->category_id == '5') selected @endif>Science Fiction & Fantasy</option>
                                            <option value='6' @if($book->category_id == '6') selected @endif>Nonfiction</option>
                                            <option value='7' @if($book->category_id == '7') selected @endif>Biography & Memoir</option>
                                            <option value='8' @if($book->category_id == '8') selected @endif>History</option>
                                            <option value='9' @if($book->category_id == '9') selected @endif>Social Issues</option>
                                            <option value='10' @if($book->category_id == '10') selected @endif>Graphic Novels</option>
                                            <option value='11' @if($book->category_id == '11') selected @endif>Teens & Young Adult</option>
                                            <option value='12' @if($book->category_id == '12') selected @endif>Children's</option>
                                        </select>
                                        @error('category_id')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Language</label>
                                        <select class="form-control" name='language' placeholder="Choose Language">
                                            <option value='Indonesian'  @if($book->language == 'Indonesian') selected @endif>Indonesian</option>
                                            <option value='English'  @if($book->language == 'English') selected @endif>English</option>
                                        </select>
                                        @error('language')
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Summary</label>
                                        <input type="text" name='summary' value='{{ $book->summary }}' class="form-control summary" placeholder="Type Description"/>
                                    </div>
                                    @error('summary')
                                    {{ $message }}
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Buy On</label>
                                        <input type="text" name='buy_on' value='{{ $book->buy_on }}' class="form-control" placeholder="Add Link" />
                                        <div class="form-check">
                                            {{-- <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="buy_on" id="buy_on1" value="" checked> GRAMEDIA
                                            </label> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <div class="form-check">
                                            {{-- <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="buy_on" id="buy_on2" value="option2"> PERIPLUS
                                            </label> --}}
                                        </div>
                                        {{-- <input type="text" class="form-control" placeholder="Add Link" /> --}}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <div class="form-check">
                                            {{-- <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="buy_on" id="buy_on2" value="option2"> BOOKS & BEYOND
                                            </label> --}}
                                        </div>
                                        {{-- <input type="text" name='url' class="form-control" placeholder="Add Link" /> --}}
                                    </div>
                                </div>

                            </div>
                            <div class="row row1">
                                <input type='submit'  class="save-book-button" value='EDIT BOOK'>
                            </div>
                        </form>
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
