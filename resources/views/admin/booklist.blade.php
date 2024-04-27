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
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title m-0">Book List</h4>
                        <a href="{{ url('view_addbooklist') }}" class="add-book-button">+ Add Book</a>
                      </div>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> ISBN </th>
                            <th> Title </th>
                            <th> Author(s) </th>
                            <th> Publisher </th>
                            <th> Publication Date </th>
                            <th> Summary </th>
                            <th> Cover Image </th>
                            <th> Genre </th>
                            <th> Language </th>
                            <th> Buy On </th>
                            <th> Review </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> <a href="{{ url('view_bookdetail') }}"> To Kill a Mockingbird </a> </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
                            <td><a href="#" class="review-edit-link">EDIT</a></td>
                            <td><a href="#" class="delete-link">DELETE</a></td>
                          </tr>
                          <tr>
                            <td> 978-3-16-148410-0 </td>
                            <td> To Kill a Mockingbird </td>
                            <td> Harper Lee </td>
                            <td> J. B. Lippincott & Co. </td>
                            <td> July 11, 1960 </td>
                            <td> A classic novel set in the American South during the Great Depression... </td>
                            <td> IMG_1080.png </td>
                            <td> Fiction, Drama </td>
                            <td> English </td>
                            <td> Gramedia </td>
                            <td><a href="#" class="review-edit-link">REVIEW</a></td>
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