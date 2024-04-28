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
                        <h4 class="card-title m-0">Add Book</h4>
                        <br>
                        <form class="form-sample">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>ISBN</label>
                                        <input type="text" class="form-control placeholders" placeholder="Type ISBN"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control placeholders" placeholder="Type Title"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Author(s)</label>
                                        <input type="text" class="form-control" placeholder="Type Author"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Publisher</label>
                                        <input type="text" class="form-control" placeholder="Type Publisher"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Publication Date</label>
                                        <input class="form-control" placeholder="dd/mm/yyyy" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cover</label>
                                        <label for="coverUpload" class=" form-control upload-label">Upload Picture Here</label>
                                        <input type="file" class="form-control-file" id="coverUpload" accept="image/*" onchange="previewImage(event)">
                                        <img src="#" id="coverPreview" alt="Cover Preview" style="display: none; max-width: 100%; margin-top: 10px;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Genre</label>
                                        <select class="form-control" placeholder="Choose Genre">
                                            <option>Fiction</option>
                                            <option>Thriller & Suspense</option>
                                            <option>Mystery & Detective</option>
                                            <option>Romance</option>
                                            <option>Science Fiction & Fantasy</option>
                                            <option>Nonfiction</option>
                                            <option>Biography & Memoir</option>
                                            <option>History</option>
                                            <option>Social Issues</option>
                                            <option>Graphic Novels</option>
                                            <option>Teens & Young Adult</option>
                                            <option>Children's</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Language</label>
                                        <select class="form-control" placeholder="Choose Language">
                                            <option>Indonesian</option>
                                            <option>English</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Summary</label>
                                        <input type="text" class="form-control summary" placeholder="Type Description"/>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Buy On</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> GRAMEDIA
                                            </label>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Add Link" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> PERIPLUS
                                            </label>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Add Link" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> BOOKS & BEYOND
                                            </label>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Add Link" />
                                    </div>
                                </div>

                            </div>
                            <div class="row row1">
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
