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
                    <div class="table-responsive">
                      <table class="table table-bordered datatable">
                        <thead>
                          <tr>
                            <th> ID</th>
                            <th> Title </th>
                            <th> Feedback </th>
                            <th> Type </th>
                            <th> Reporter </th>
                            <th> Date Submitted </th>
                            <th> Date Resolved </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($feedbacks as $feedback)
                          <tr>
                            <td> {{ $feedback->id }} </td>
                            <td> {{ $feedback->title }} </td>
                            <td> {{ $feedback->content }} </td>
                            <td> {{ $feedback->type }} </td>
                            <td> {{ $feedback->user->name }} </td>
                            <td> {{ Carbon\Carbon::parse($feedback->created_at)->format('d M Y') }}</td>
                            <td> 
                              @if($feedback->date_resolved == null) Not Resolved
                              @else {{Carbon\Carbon::parse($feedback->date_resolved)->format('d M Y') }}
                              @endif 
                            </td>

                            <td> 

                              @if($feedback->status == 'on progress')
                                <a href="/view_feedbacks/{{ $feedback['id'] }}/approved" class="btn btn-success text-dark">Resolve
                                <a href="/view_feedbacks/{{ $feedback['id'] }}/declined" class="btn mx-2 btn-danger text-dark">Reject
                              @else 
                                {{ $feedback->status }}
                              @endif 
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                                <div class="pagination">
                                    <a href="{{ $feedbacks->previousPageUrl() }}" class="paginationbtn" >Previous</a>
                                    @for ($i = 1; $i <= $feedbacks->lastPage(); $i++)
                                        <a href="{{ $feedbacks->url($i) }}" class="paginationbtn">{{ $i }}</a>
                                    @endfor
                                    <a href="{{ $feedbacks->nextPageUrl() }}" class="paginationbtn">Next</a>
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