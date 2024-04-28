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
                    <h4 class="card-title">Feedbacks</h4>
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
                            <th> ID</th>
                            <th> Book Title </th>
                            <th> Review </th>
                            <th> Reviewer </th>
                            <th> Date Submitted </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($reviews as $review)
                          <tr>
                            <td> {{ $review->id}}</td>
                            <td class="book-link"><a href="{{url('view_bookdetail')}}"> {{ $review->book->title}}</a></td>
                            <td> {{ $review->review_text}}</td>
                            <td> {{ $review->user->name}}</td>
                            <td> {{ Carbon\Carbon::parse($review->created_at)->format('d M Y') }}</td>
                            <td><a href="/view_review/{{ $review['id'] }}/delete" class="btn btn-warning text-dark">Delete</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
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