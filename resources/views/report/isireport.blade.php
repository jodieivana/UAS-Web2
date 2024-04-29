<section class="discoverhome_section">
         <div class="container-fuild">
            <div class="box">
            <div class="heading_container heading_center">
                  <h3>
                     REPORT
                  </h3>
                  <hr class="linek">
            </div>
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                     
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                          <form class="py-2 px-4" action="/submit_report"  method="POST" autocomplete="off">
                                             @csrf
                                             <input type='hidden' name='review_id' value='{{ $review->id }}'>
                                             <p class="isistar">YOU ARE REPORTING:</p>
                                             <p class="isistar2">“{{ $review->review_text }}”</p>
                                             <div class=" filterdis1">
                                                   <h5 class="isistars">TYPE:</h5>
                                                   <select name="readstatus" id="readstatus" class="readstatus classic">
                                                      <option value="read">SPAM</option>
                                                      <option value="toread">OFFENSIVE</option>
                                                   </select>
                                             </div>
                                             <div class="form-group row mt-4">
                                                <div class="col">
                                                   <textarea class="form-control tmptreview" name="comment" rows="6 " placeholder="Why is it violating? (Write your report) " maxlength="200"></textarea>
                                                </div>
                                             </div>

                                             <div class="mt-3 text-right">
                                                <input type='submit' value='SUBMIT REPORT'>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>

         
                     </div>
                  </div>
               </div>
            </div>
         </div>
</section>