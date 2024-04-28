<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .grid-item {
            background-color: #ffffff;
            border: 1px solid #CDD9FE;
            padding: 15px;
            color: #4d4d4d;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .add-book-button {
            color: #ffffff;
            background-color: #152E7A;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .add-book-button:hover {
            background-color: #0f1e57;
        }
    </style>
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
                                <h4 class="card-title all-notif">All Notification</h4>
                            </div>
                            <div class="grid-container">
                                <div class="grid-item">
                                    <p class="subject">Report Resolved</p>
                                    <p class="content-notif">Notification lalallalalala</p>
                                    <p class="tanggal">16 Maret 2024</p>
                                </div>
                            </div>
                            <div class="grid-container">
                                <div class="grid-item">
                                    <p class="subject">Report Resolved</p>
                                    <p class="content-notif">Notification lalallalalala</p>
                                    <p class="tanggal">16 Maret 2024</p>
                                </div>
                            </div>
                            <div class="grid-container">
                                <div class="grid-item">
                                    <p class="subject">Report Resolved</p>
                                    <p >Notification lalallalalala</p>
                                    <p class="tanggal">16 Maret 2024</p>
                                </div>
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
