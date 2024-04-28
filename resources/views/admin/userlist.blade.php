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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <th> Register Date </th>
                            <th> Last Login </th>
                            <th> Account Status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                          <tr>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ Carbon\Carbon::parse($user->created_at)->format('d M Y') }}</td>
                            <td> {{ Carbon\Carbon::parse($user->last_login)->format('d M Y') }}</td>
                            <td> 
                              @if($user->account_status == 'active')<label class="badge badge-success">ACTIVE</label> @endif
                              @if($user->account_status == 'banned')<label class="badge badge-danger">BANNED</label> @endif
                            </td>
                            <td> 
                              @if($user->account_status == 'active')<a href="/view_userlist/{{ $user['id'] }}/ban" class="btn btn-warning text-dark">Ban @endif
                              @if($user->account_status == 'banned')<a href="/view_userlist/{{ $user['id'] }}/ban" class="btn btn-warning text-dark">Activate @endif 
                            </td>
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