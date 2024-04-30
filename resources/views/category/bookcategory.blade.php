<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h5 class="judulkecil">
                @if($search == '')
                FILTERED RESULTS
                @else
                Search results for '{{ $search }}' and {{ $search_category }} Category
                @endif
            </h5>
           <hr class="linep">
        </div>

        <div class="grid-container">
            @foreach($books as $book)
            <div class="grid-item">

                <div class="row newscont2">
                <img src="{{ $book->cover_image }}" style='height:170px; width:110px' class="img-fluid img-bestseller nwrbook2" alt="" onclick="window.location.href='/add_bookshelf/{{ $book->id }}';"></td>
                     <div class="column textboxt2">
                        <p class="lightp3" onclick="window.location.href='/add_bookshelf/{{ $book->id }}';">
                            {{ $book->category->category_name }}
                        </p>
                        <p class="titlep3" onclick="window.location.href='/add_bookshelf/{{ $book->id }}';">
                            {{ $book->title }}
                        </p>
                        <p class="lightp32" onclick="window.location.href='/add_bookshelf/{{ $book->id }}';">
                            {{ $book->title }}
                        </p>
                        @if(!$book->isBookshelved())
                        <div class="btn-box">
                            <a href="/add_bookshelf/{{ $book->id }}" class="btn1">
                                <div class="row allignbuyon">
                                <p class="btnkcl2">+</p>
                                <p class="btnkcl1">BOOKSHELF</p>
                                </div>
                            </a>
                        </div>
                        @else
                        <div class="btn-box">
                            <a href="/add_bookshelf/{{ $book->id }}" class="btn1">
                                <div class="row allignbuyon" >
                                <p class="btnkcl1">SAVED</p>
                                </div>
                            </a>
                        </div>
                         @endif
                     </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>