<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h5 class="judulkecil">
                  NOTIFICATION
            </h5>
           <hr class="linep">
        </div>

        <div class="grid-container3">
            @foreach($notifications as $notification)
            <div class="grid-item">

               <div class="row ratingrapi2">
                  <div class="col">
                     <p class="lightp33 authorisibuku">{{ $notification->subject }}</p>

                        <p class="lightp314 authorisibuku" >
                           {{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                        </p>
                  </div>

               </div>

               <p class="teksbuku2" >
                  {{ $notification->content }}               
               </p>

               <hr class="linev">
            </div>
         @endforeach


            
            
            
        </div>
    </div>
</section>