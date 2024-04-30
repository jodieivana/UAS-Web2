<section class="bookshelftop_section">
         <div class="container-fuild">
            <div class="box">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                            <h3>SEARCH BOOKS</h3>
                            <h5 class="subjudulh5">A room without books is like a body without a soul. - Marcus Tullius Cicero</h5>
                           <hr class="linex">
                        </div>

                        <form action="category" method='post'>
                            @csrf
                            <input class="" value='' type="search" name='search' placeholder="Search books" aria-label="Search" style="color: #152E7A; border: none; border-radius: 30px;">
                            <input class="btnrevisi2" type='submit'>

                            <div class="row filterbook2">
                                <div class="row filterdis1">
                                <h5 class="disbook">FILTER BY</h5>
                                    <select name="category_id" id="readstatus" class="readstatus classic selectdis">
                                        <option value='0'>All</option>
                                        @foreach($categories as $category)
                                            <option value='{{ $category->id }}'>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
</section>