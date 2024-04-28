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
                        <br>
                        <h4 class="card-title m-0">Add Newsletter</h4>
                        <br>
                        <form class="form-sample">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control placeholders" placeholder="Type ISBN"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Recipients</label>
                                        <input type="text" class="form-control placeholders" placeholder="Type Title"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <select class="form-control" placeholder="Choose Genre">
                                            <option>admin@gmail.com</option>
                                            <option>admin1@gmail.com</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <input type="text" class="form-control" style="height: 200px;" placeholder="Type Content"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row1">
                                <a href="#" class="draft-book-button">SAVE TO DRAFT</a>
                                <a href="#" class="delete-book-button">DELETE</a>
                                <a href="#" class="save-book-button">ADD BOOK</a>
                            </div>
                        </form>
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
