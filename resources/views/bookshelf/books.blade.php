<section class="product_section layout_padding">
         <div class="container ">
            <div class="heading_container">
               <h5 class="judulkecil">
                  @if($search == '')
                  ALL
                  @else
                  SHOWING SEARCH RESULT FOR '{{ $search }}'
                  @endif
               </h5>
               <hr class="linep">
            </div>
            
            <table style="width:100%">
               <tr class="jdltabel">
                  <th>COVER</th>
                  <th>BOOK INFO</th>
                  <th>PROGRESS</th>
                  <th>REVIEW</th>
                  <th></th>
               </tr>
               @foreach($bookshelves as $bookshelf)
               <tr>
                  <td><img src="{{ $bookshelf->book->cover_image }}" style='width: 100px' class="img-fluid img-bestseller nwrbook" alt="" onclick="window.location.href='buku/{{ $bookshelf->book->id }}';"></td>
                  <td>
                     <div class="column textboxt2">
                        <p class="lightp3" onclick="window.location.href='buku/{{ $bookshelf->book->id }}';">
                           {{ $bookshelf->book->category->name }}
                        </p>
                        <p class="titlep3" onclick="window.location.href='buku/{{ $bookshelf->book->id }}';">
                           {{ $bookshelf->book->title }}
                        </p>
                        <p class="lightp32" onclick="window.location.href='buku/{{ $bookshelf->book->id }}';">
                           {{ $bookshelf->book->authors }}
                        </p>
                     </div>
                  </td>
                  <td>
                     <form id='progress_form' action='change_bookshelf_progress/{{ $bookshelf->id }}' method='post'>
                     @csrf
                     <select name="progress" id="progress" class="readstatus classic">
                        <option value="Read" @if($bookshelf->progress == 'Read') selected @endif>READ</option>
                        <option value="To Read" @if($bookshelf->progress == 'To Read') selected @endif>TO READ</option>
                        <option value="Reading" @if($bookshelf->progress == 'Reading') selected @endif>READING</option>
                     </select>
                     </form>
                     <script>
                        document.getElementById("progress").addEventListener("change", function() {
                            document.getElementById("progress_form").submit();
                        });
                    </script>
                  </td>
                  <td>
                     <p class="lightp32" onclick="window.location.href='buku/{{ $bookshelf->book->id }}';">
                        WRITE A REVIEW
                     </p>
                  </td>
                  <td>
                     <div class="btn-box2">
                        <a href="delete_bookshelf/{{ $bookshelf->id }}" class="btn1">
                           DELETE
                        </a>
                     </div>
                  </td>
               </tr>
               @endforeach

            </table>

         </div>
      </section>