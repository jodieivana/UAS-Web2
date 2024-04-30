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

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title m-0">Book List</h4>
                        <a href="{{ url('view_addbooklist') }}" class="add-book-button">+ Add Book</a>
                      </div>
                      @if(session()->has('success'))
                      <div class="alert alert-success dismissable fade show" role="alert">
                      {{ session('success') }}
                      </div>
                      @endif
                      @if(session()->has('error'))
                      <div class="alert alert-danger dismissable fade show" role="alert">
                      {{ session('error') }}
                      </div>
                   @endif
                    <div class="table-responsive">
                      <table class="table table-bordered datatable">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Title </th>
                            <th> Author(s) </th>
                            <th> Publication Date </th>
                            <th> Summary </th>
                            <th> Cover Image </th>
                            <th> Genre </th>
                            <th> Language </th>
                            <th> Review </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($books as $book)
                          <tr>
                            <td> {{ $loop->index + 1 }} </td>
                            <td class="book-link"> <a href="{{ url('view_bookdetail/'. $book->id) }}"> {{ $book->title }} </a> </td>
                            <td> {{ $book->authors }} </td>
                            <td> {{ Carbon\Carbon::parse($book->published_date)->format('d M Y') }} </td>
                            <td> {{ $book->summary }} </td>
                            <td> {{ $book->cover_image }} </td>
                            <td> {{ $book->category_id }} </td>
                            <td> {{ $book->language }} </td>
                            <td><a href="{{ url('view_reviewbooklist/' . $book->id) }}" class="btn btn-warning text-dark">REVIEW</td>
                            <td><a href="{{ url('view_editbooklist/' . $book->id) }}" class="btn btn-warning text-dark">EDIT</td>
                            <td><a href="/view_booklist/{{ $book['id'] }}/delete" class="btn btn-warning text-dark">DELETE</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                                <div class="pagination">
                                    <a href="{{ $books->previousPageUrl() }}" class="paginationbtn" >Previous</a>
                                    @for ($i = 1; $i <= $books->lastPage(); $i++)
                                        <a href="{{ $books->url($i) }}" class="paginationbtn">{{ $i }}</a>
                                    @endfor
                                    <a href="{{ $books->nextPageUrl() }}" class="paginationbtn">Next</a>
                                </div>

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