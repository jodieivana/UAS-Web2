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
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Title </th>
                            <th> Content </th>
                            <th> Recipients </th>
                            <th> Sender </th>
                            <th> Date Sent </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> New Book Release </td>
                            <td> Check out our latest book release! </td>
                            <td> All </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td class="book-link"> <a href="{{ url('view_draftnotification') }}"> Draft </a> </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> New Book Release </td>
                            <td> Check out our latest book release! </td>
                            <td> All </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td class="disabled-sent"> Sent </a> </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> New Book Release </td>
                            <td> Check out our latest book release! </td>
                            <td> All </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td class="disabled-sent"> Sent </a> </td>
                          </tr>
                          <tr>
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