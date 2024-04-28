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
                        <h4 class="card-title m-0">Article</h4>
                        <a href="{{ url('view_addarticle') }}" class="add-book-button">+ Add Article</a>
                      </div>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Title </th>
                            <th> Author </th>
                            <th> Publication Date </th>
                            <th> Last Modified </th>
                            <th> Topic </th>
                            <th> Status </th>
                            <th> Visibility </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                        
                            <td><a href="{{ url('view_editarticle') }}" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td class="book-link"> <a href="{{ url('view_articledetail') }}"> About Article </a> </td>
                            <td> John Doe </td>
                            <td> 2024-02-10 </td>
                            <td> 2024-02-12 </td>
                            <td> Literature </td>
                            <td> Published </td>
                            <td>
                                <select class="form-control visibility-dropdown">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                </select>
                            </td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
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