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
                        <h4 class="card-title m-0">Add Notification</h4>
                        <br>
                        <form class="form-sample" action='/view_addnotification' method='post'>
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name='subject' class="form-control placeholders" placeholder="Type Title"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Recipients</label>
                                        <select name='user_id' class="form-control" placeholder="Choose">
                                            @foreach($users as $user) 
                                                <option value='{{ $user->id }}'>{{ $user->email}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea  type="text" name='content' class="form-control" style="height: 200px;" placeholder="Type Content"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row1">
                                {{-- <a href="#" class="draft-book-button">SAVE TO DRAFT</a>
                                <a href="#" class="delete-book-button">DELETE</a> --}}
                                <input type='submit' href="#" class="save-book-button" value='SEND'>
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
