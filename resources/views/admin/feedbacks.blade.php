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
                    <h4 class="card-title">Feedbacks</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered">
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
                          <tr>
                            <td> 201111-2024-02-10 </td>
                            <td> Homepage UI </td>
                            <td> "The font size is too small on mobile." </td>
                            <td> Suggestion </td>
                            <td> John Smith </td>
                            <td> User123 </td>
                            <td> 2024-02-17 </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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
                            <td> Payment Flow </td>
                            <td> Encountered an error during checkout. </td>
                            <td> Bug Report </td>
                            <td> Emily Johnson </td>
                            <td> User123 </td>
                            <td>  </td>
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