<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h5 class="judulkecil">
                  FILTERED RESULTS
            </h5>
           <hr class="linep">
        </div>

        <div class="grid-container3">
            @foreach($reviews as $review)
            <div class="grid-item">
               <div class="row ratingrapi2">
                  <div class="col">
                     <p class="lightp33 authorisibuku">{{ $review->user->name }}</p>
                     <div class ="row ratingrapi">
                        @for($i = 0; $i < intval($review->rating); $i++)
                        <p class="rate2">★</span>
                        @endfor
                        <p class="rate2" style="padding-right:10px;"></span>
                        <p class="lightp31 authorisibuku" >
                           {{ $review->rating }} .0
                        </p>
                        <p class="lightp31 authorisibuku" >
                           ({{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }})
                        </p>
                     </div>
                  </div>

                  <div class="col text-right">
                     <p class="lightp authorisibuku" onclick="window.location.href='/report/{{ $review->id }}'">REPORT</p>
                  </div>
               </div>

               <p class="teksbuku2">
                  {{ $review->review_text }}
               </p>

               <hr class="linev">
            </div>
            @endforeach


            
            
            
        </div>
    </div>
</section>