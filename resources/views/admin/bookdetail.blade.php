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
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        
                    <div class="row">
                        <div class="col-md-6">                              
                        {{-- <div class="isbn-container"> --}}
                            <h4 class="isbn">ISBN: 978-3-16-148410-0</h4>
                            <h4 class="judulbesar">To Kill a Mockingbird</h4>
                        {{-- </div> --}}
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="actions"> --}}
                                <a href="{{ url('view_editbooklist') }}" class="edit-book-button">EDIT</a>
                                <a href="#" class="delete-book-button">DELETE</a>

                            {{-- </div> --}}
                        </div>

                    </div>
                    <br>
                        <div class="row">
                        <div class="col-md-7">                
                            <p class="text-muted"> Author(s): Harper Lee </p>
                            <p class="text-muted"> Publishers: J. B. Lippincott & Co. </p>
                            <p class="text-muted"> Publication Date: July 11, 1960 </p>
                            <p class="text-muted"> Genre: Fiction, Drama </p>
                            <p class="text-muted"> Language: English </p>
                            <p class="text-muted"> Buy On: Gramedia (gramed.com/123) </p>
                        
                        
                            <h4 class="card-title">SUMMARY</h4>
                            <p class="text-muted"> A classic novel set in the American South during the Great Depression  </p>
                        </div>
                        <div class="col-md-5">
                            <div class="book-cover">
                                <img src="admin/assets/images/byron.png" alt="Book Cover" class="ukuranbuku">
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
