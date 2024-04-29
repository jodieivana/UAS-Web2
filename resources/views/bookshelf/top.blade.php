<section class="bookshelftop_section">
         <div class="container-fuild">
            <div class="box">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                           <h3>BOOKSHELF</h3>
                           <hr class="line">
                        </div>
                        <form action="bookshelf" method='post'>
                           @csrf
                           <input class="" value='{{ $search }}' type="search" name='search' placeholder="Search books from your Bookshelf" aria-label="Search" style="color: #152E7A; border: none; border-radius: 30px;">
                           <input type='submit'>
                        </form>

                     
                     
                     </div class="row ">

                        <ul class="row filterbook">

                        <p class="tagfilter"> FILTER </p>
                        <p class="tagfilter"> | </p>

                           <li class="nav-item active">
                              <a class="nav-link filterbookp" href="#">ALL</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link filterbookp" href="#">READ</a>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link filterbookp" href="#">CURRENTLY READING</a>
                           </li>

                           <li class="nav-item">
                              <a class="nav-link filterbookp" href="#">WANT TO READ</a>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
</section>