<footer>
    <div class="container">
        <div class="row">
                    <div class="col-md-7">
                        <!-- Menu section -->
                        <div class="row">
                            <div class="col-md-5">
                                <div class="widget_menu">
                                    <h3>COMPANY</h3>
                                    <ul>
                                        <li><a href="#">ABOUT US</a></li>
                                        <li><a href="#">CONTACT US</a></li>
                                        <li><a href="#">PRIVACY POLICY</a></li>
                                        <li><a href="#">TERMS AND CONDITIONS</a></li>
                                    </ul>   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="{{ route('userpage') }}">HOME</a></li>
                                        <li><a href="{{ route('bookshelf') }}">BOOKSHELF</a></li>
                                        <li><a href="{{ route('category') }}">DISCOVER</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>     
                    <div class="col-md-5">
                        <!-- New section -->
                        <div class="full text-right">
                            <div class="logo_footer">
                                <a href="{{ route('userpage') }}"><img width="210" src="home/images/logo.png" alt="#" /></a>
                            </div>
                            <div class="information_f">
                                 <p><strong>FOLLOW US ON</strong></p>
                                 <div class="full text-right ">
                                    <img src="{{ asset('home/images/tiktok.svg') }}" class="img-fluid svgsml" alt="" onclick="window.location.href='index.html';">
                                    <img src="{{ asset('home/images/instagram.svg') }}" class="img-fluid svgsml" alt="" onclick="window.location.href='index.html';">
                                    <img src="{{ asset('home/images/facebook.svg') }}" class="img-fluid svgsml" alt="" onclick="window.location.href='index.html';">
                                    <img src="{{ asset('home/images/linkedin.svg') }}" class="img-fluid svgsml" alt="" onclick="window.location.href='index.html';">
                                 <div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</footer>