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
                            <h4 class="isbn">ID: 978-3-16-2000</h4>
                            <h4 class="judulbesar">About Article</h4>
                        {{-- </div> --}}
                        </div>
                        <div class="col-md-6">
                            {{-- <div class="actions"> --}}
                                <a href="#" class="edit-book-button">EDIT</a>
                                <a href="#" class="delete-book-button">DELETE</a>

                            {{-- </div> --}}
                        </div>

                    </div>
                    <br>
                        <div class="row">
                        <div class="col-md-12">                
                            <p class="text-muted"> By John Smith, February 27, 2024 </p>
                            <br>
                            <p class="text-muted"> Books have been an integral part of human civilization for centuries, serving as vessels of knowledge, entertainment, and inspiration. From ancient scrolls to modern e-readers, the written word has captivated minds and hearts across cultures and generations.</p>
                            <br>
                            <p class="text-muted"> Diving into Different Genres</p>
                            <p class="text-muted"> One of the most fascinating aspects of literature is its diversity. Whether you're drawn to the thrilling suspense of a mystery novel, the heartwarming tales of romance, or the epic adventures of fantasy, there's a genre for every taste and inclination. Each genre offers a unique experience, transporting readers to distant lands, introducing them to unforgettable characters, and exploring timeless themes.</p>
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
