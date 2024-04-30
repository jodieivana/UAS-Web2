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
                    <h4 class="card-title">Reports</h4>
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
                            <th> Reason </th>
                            <th> Type </th>
                            <th> Reporter </th>
                            <th> Reported user </th>
                            <th> Action </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($reports as $report)
                          <tr>
                            <td> {{$report->id}}  </td>
                            <td class="book-link"><a href="{{ url('view_bookdetail/'. $report->review->book->id) }}"> {{$report->review->book->title }}</a>  </td>
                            <td> {{$report->content}} </td>
                            <td> {{$report->report_type}} </td>
                            <td> {{$report->reporter_user_id}} </td>
                            <td> {{$report->reported_user_id}} </td>
                            <td> <a href="/view_reports/{{ $report['id'] }}/delete" class="btn btn-warning text-dark">Delete</td>
                            <td> 
                              @if($report->report_status == 'on progress')
                                <a href="/view_reports/{{ $report['id'] }}/approved" class="btn btn-success text-dark">Resolve
                                <a href="/view_reports/{{ $report['id'] }}/declined" class="btn mx-2 btn-danger text-dark">Reject
                              @else 
                                {{ $report->report_status }}
                              @endif
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                                <div class="pagination">
                                    <a href="{{ $reports->previousPageUrl() }}" class="paginationbtn" >Previous</a>
                                    @for ($i = 1; $i <= $reports->lastPage(); $i++)
                                        <a href="{{ $reports->url($i) }}" class="paginationbtn">{{ $i }}</a>
                                    @endfor
                                    <a href="{{ $reports->nextPageUrl() }}" class="paginationbtn">Next</a>
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