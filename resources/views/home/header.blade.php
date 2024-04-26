
<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="200" src="home/images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.html">Bookshelf</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Discover<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li>

                        <form class="form-inline">
                           <div class="input-group">
                              <div class="input-group-prepend" style="margin-right: -10px;">
                                    <span class="input-group-text" style="background-color: #fff; border: none; padding-left: 20px; border-radius: 30px 0px 0px 30px;">
                                       <i class="fa fa-search" aria-hidden="true" style="color: #808080;"></i>
                                    </span>
                              </div>
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="color: #152E7A; border: none; border-radius: 0px 30px 30px 0px;">
                           </div>
                        </form>

                        @if (Route::has('login'))
                            @auth

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">{{ Auth::user()->name }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="route('profile.edit')">PROFILE</a></li>
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOG OUT</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            @else
                            <li class="nav-item">
                                <a class="btn btn-success register-btn" id="registercss" href="{{ route('register') }}">REGISTER</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success login-btn" id="logincss" href="{{ route('login') }}">LOG IN</a>
                            </li>

                            @endauth
                        @endif
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
