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
                    <div class="table-responsive">
                      <table class="table table-bordered">
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
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                  <button class="btn btn-danger dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Not Resolved
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                      <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: blue;">Resolved</a>
                                      <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                  </div>
                              </div>
                          </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 101111-2024-02-10 </td>
                            <td> The Great Gatsby </td>
                            <td> "This book is ****ing amazing!" </td>
                            <td> Offensive </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> DELETE </td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="resolvedDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Resolved
                                </button>
                                <div class="dropdown-menu" aria-labelledby="resolvedDropdown">
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Resolved')" style="color: #3F8EE0;">Resolved</a>
                                  <a class="dropdown-item" href="#" onclick="updateStatus('Not Resolved')" style="color: #981B25;">Not Resolved</a>
                                </div>
                              </div>
                            </td>
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