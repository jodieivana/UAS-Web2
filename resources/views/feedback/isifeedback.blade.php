<section class="discoverhome_section">
         <div class="container-fuild">
            <div class="box">
            <div class="heading_container heading_center">
                  <h3>
                     FEEDBACK
                  </h3>
                  <hr class="linek">
            </div>
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <div class="subscribe_form ">
                     
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                          <form class="py-2 px-4" action="/submit_feedback"  method="POST" autocomplete="off">
                                             @csrf
                                             <div class=" filterdis1">
                                                   <h5 class="isistars">TITLE:</h5>
                                                   <input type="text" name='title' class="form-control placeholders" placeholder="Type Title"/>
                                             </div>

                                             <div class=" filterdis1">
                                                   <h5 class="isistars">TYPE:</h5>
                                                   <select name="type" id="readstatus" class="readstatus classic">
                                                      <option value="complaint">COMPLAINT</option>
                                                      <option value="suggestion">SUGGESTION</option>
                                                   </select>
                                             </div>
                                             <div class="form-group row mt-4">
                                                <div class="col">
                                                   <textarea class="form-control tmptreview" name="content" rows="6 " placeholder="Write us your feedback now." maxlength="200"></textarea>
                                                </div>
                                             </div>

                                             <div class="mt-3 text-right">
                                                <input class ="btnrevisi" type='submit' value='SUBMIT FEEDBACK'>
                                           
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