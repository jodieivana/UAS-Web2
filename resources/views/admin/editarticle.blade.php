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
                        <h4 class="card-title m-0">Edit Article</h4>
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
                                        <label>Author(s)</label>
                                        <input type="text" class="form-control placeholders" placeholder="Type Title"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Genre</label>
                                        <select class="form-control" placeholder="Choose Genre">
                                            <option>Fiction</option>
                                            <option>Non Fiction</option>
                                            <option>Drama</option>
                                            <option>Science Fiction</option>
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cover</label>
                                        <label for="coverUpload"style="height: 100px;" class=" form-control upload-label">Upload Picture Here</label>
                                        <input type="file" class="form-control-file" id="coverUpload" accept="image/*" onchange="previewImage(event)" >
                                        <img src="#" id="coverPreview" alt="Cover Preview" style="display: none; max-width: 100%; margin-top: 10px;">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row1">
                                <a href="#" class="draft-book-button">SAVE TO DRAFT</a>
                                <a href="#" class="delete-book-button">DELETE</a>
                                <a href="#" class="save-book-button">PUBLISH</a>
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
