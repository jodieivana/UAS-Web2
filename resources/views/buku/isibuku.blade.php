<section class="product_section layout_padding">
   <div class="container ">
      <div class="grid-container2">
         <div class="grid-item">

            <div>
               <img src="{{ $book->cover_image }}" class="img-fluid img-bestseller nwrbook3" style='width: 300px' alt="" ></td>
               <div class="column ">
                  
                  @if(!$book->isBookshelved())
                  <div class="btn-box4">
                     <a href="/add_bookshelf/{{ $book->id }}" class="btn1">
                        <div class="row allignbuyon">
                           <p class="btnkcl2">+</p>
                           <p class="btnkcl1">BOOKSHELF</p>
                        </div>
                     </a>
                  </div>
                  @else
                  <div class="btn-box5">
                     <a href="/add_bookshelf/{{ $book->id }}" class="btn1">
                        <div class="row allignbuyon">
                           <p class="btnkcl1">SAVED</p>
                        </div>
                     </a>
                  </div>
                  @endif    
                  
                  <div class="btn-box5">
                     <a href="{{ url($book->buy_on) }}" class="btn1">
                        <div class="row allignbuyon">
                           <p class="btnkcl5" onclick="window.location.href='{{ $book->buy_on }}';">BUY ON</p>
                           {{-- <i class="fa fa-caret-down" aria-hidden="true"></i> --}}
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="grid-item">

            <div class="teksisibuku">
               <h1 class="judulbuku">
                  {{ $book->title }}
               </h1>
               <p class="lightp32 authorisibuku" onclick="window.location.href='index.html';">
                  {{ $book->authors }}
               </p>

               <div class ="row ratingrapi">
                  @for($i = 0; $i < intval($book->book_rating); $i++)
                  <p class="rate2">★</span>
                  @endfor

                  <p class="rate2" style="padding-right:10px;"></span>
                  <p class="lightp31 authorisibuku" >
                     {{ $book->book_rating }}.0
                  </p>
               </div>

               <div class="column ">
                  
                  <p class="teksbuku">
                     {{ $book->summary }}
                  </p>

                  {{-- <p class="teksbuku">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
             --}}
               </div>

               <div class="row ratingrapi">
                  <div class="col">
                     <p class="lightp33 authorisibuku">Written in {{ $book->language }}</p>
                  </div>
                  <div class="col text-right">
                     <p class="lightp33 authorisibuku">First published {{ Carbon\Carbon::parse($book->published_date)->format('d M Y') }}</p>
                  </div>
               </div>


            </div>
         </div>
      </div>


   </div>
</section>