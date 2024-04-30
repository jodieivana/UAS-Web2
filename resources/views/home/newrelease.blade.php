<section class="product_section layout_padding">
         <div class="container ">
            <div class="heading_container heading_center">
               <h3>
                  NEW RELEASES
               </h3>
               <hr class="line">
            </div>
            
            <div class="row releasecontent2">

               <div class="releasediv">
                  <div class="row newscont">
                     <p class="headlinep vwrheadline"  onclick="window.location.href='index.html';">
                        BIOGRAPHY & MEMOIR
                     </p>
                     <i class="fa fa-caret-right" aria-hidden="true"></i>
                  </div>
                     

                  <div class="row newscont">
                     <img src="{{ $book_bm[0] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_bm[0]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_bm[0]->id }}';">
                           {{ $book_bm[0] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_bm[0]->id }}';">
                           {{ $book_bm[0] -> authors}}
                        </p>
                     </div>
                  </div>

                  <div class="row newscont">
                     <img src="{{ $book_bm[1] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_bm[1]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_bm[1]->id }}';">
                           {{ $book_bm[1] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_bm[1]->id }}';">
                           {{ $book_bm[1] -> authors}}
                        </p>
                     </div>
                  </div>

                  <div class="row newscont">
                     <img src="{{ $book_bm[1] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_bm[1]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_bm[1]->id }}l';">
                           {{ $book_bm[1] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_bm[1]->id }}';">
                           {{ $book_bm[1] -> authors}}
                        </p>
                     </div>
                  </div>

               </div> 


               <div id="verticle-line"></div>

               <div class="releasediv ">
                  <div class="row newscont">
                     <p class="headlinep vwrheadline"  onclick="window.location.href='index.html';">
                        MYSTERY & DETECTIVE
                     </p>
                     <i class="fa fa-caret-right" aria-hidden="true"></i>
                  </div>
                     
                  <div class="row newscont">
                     <img src="{{ $book_md[0] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_md[0]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_md[0]->id }}';">
                           {{ $book_md[0] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_md[0]->id }}';">
                           {{ $book_md[0] -> authors}}
                        </p>
                     </div>
                  </div>

                  <div class="row newscont">
                     <img src="{{ $book_md[1] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_md[1]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_md[1]->id }}';">
                           {{ $book_md[1] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_md[1]->id }}';">
                           {{ $book_md[1] -> authors}}
                        </p>
                     </div>
                  </div>

                  <div class="row newscont">
                     <img src="{{ $book_md[2] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_md[2]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_md[2]->id }}';">
                           {{ $book_md[2] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_md[2]->id }}';">
                           {{ $book_md[2] -> authors}}
                        </p>
                     </div>
                  </div>
               </div> 

               <div id="verticle-line1"></div>

               <div class="releasediv nwrbawah">
                  <div class="row newscont">
                     <p class="headlinep vwrheadline"  onclick="window.location.href='index.html';">
                        TEENS & YOUNG ADULT
                     </p>
                     <i class="fa fa-caret-right" aria-hidden="true"></i>
                  </div>
                     
                  <div class="row newscont">
                     <img src="{{ $book_tya[0] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_tya[0]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_tya[0]->id }}';">
                           {{ $book_tya[0] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_tya[0]->id }}';">
                           {{ $book_tya[0] -> authors}}
                        </p>
                     </div>
                  </div>

                  <div class="row newscont">
                     <img src="{{ $book_tya[1] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_tya[1]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_tya[1]->id }}l';">
                           {{ $book_tya[1] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_tya[1]->id }}';">
                           {{ $book_tya[1] -> authors}}
                        </p>
                     </div>
                  </div>

                  <div class="row newscont">
                     <img src="{{ $book_tya[1] -> cover_image}}" class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $book_tya[1]->id }}';">
                     <div class="column textboxt">
                        <p class="titlepbk" onclick="window.location.href='buku/{{ $book_tya[1]->id }}l';">
                           {{ $book_tya[1] -> title}}
                        </p>
                        <p class="lightp2" onclick="window.location.href='buku/{{ $book_tya[1]->id }}';">
                           {{ $book_tya[1] -> authors}}
                        </p>
                     </div>
                  </div>
               </div> 

            </div>
         </div>
      </section>