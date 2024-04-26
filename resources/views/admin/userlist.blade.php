<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
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
                    <h4 class="card-title">User List</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Email</th>
                            <th> Nama </th>
                            <th> Password </th>
                            <th> Register Date </th>
                            <th> Last Login </th>
                            <th> Subscription </th>
                            <th> Account Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> jodie@gmail.com </td>
                            <td> Jodie </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-danger">BANNED</label></td>
                          </tr>
                          <tr>
                            <td> vellyn@gmail.com </td>
                            <td> Pelin </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-warning">INACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> callista@gmail.com </td>
                            <td> Callista </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-success">ACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> jojojo@gmail.com </td>
                            <td> DIIDI </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-success">ACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> natali@gmail.com </td>
                            <td> Naata </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-success">ACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> cooooo@gmail.com </td>
                            <td> Conadi </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-success">ACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> apaja@gmail.com </td>
                            <td> Ada deh </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-success">ACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> pageturner@gmail.com </td>
                            <td> Page Turner </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-warning">INACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> pageturner@gmail.com </td>
                            <td> Page Turner </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-warning">INACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> jisoo@gmail.com </td>
                            <td> Jisoo </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-warning">INACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> jennie@gmail.com </td>
                            <td> Jennie Blackpink </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-warning">INACTIVE</label></td>
                          </tr>
                          <tr>
                            <td> seonho@gmail.com </td>
                            <td> Kim Seon ho </td>
                            <td> ************* </td>
                            <td> 20/02/2024 </td>
                            <td> 20/02/2024 </td>
                            <td> NO </td>
                            <td><label class="badge badge-success">ACTIVE</label></td>
                          </tr>
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