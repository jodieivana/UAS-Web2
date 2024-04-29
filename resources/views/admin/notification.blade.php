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
                        <h4 class="card-title m-0">Notification</h4>
                        <a href="{{ url('view_addnotification') }}" class="add-book-button">+ Add Notification</a>
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
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Title </th>
                            <th> Content </th>
                            <th> Date Sent </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($notifications as $notification)
                          <tr>
                            <td> {{ $loop->index + 1}} </td>
                            <td> {{ $notification->subject }} </td>
                            <td> {{ $notification->content }} </td>
                            <td> {{ Carbon\Carbon::parse($notification->created_at)->format('d M Y') }} </td>
                            <td class="book-link"> <a class="btn btn-warning text-dark" href="edit_notif/{{ $notification->id }}"> Edit </a> </td>
                            <td class="book-link"> <a class="btn btn-warning text-dark" href="delete_notif/{{ $notification->id }}"> Delete </a> </td>
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