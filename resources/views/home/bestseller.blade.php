<section class="why_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h3>
                OUR TAKE ON THIS WEEK’S BESTSELLERS
            </h3>
            <hr class="line">
        </div>
        
        <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner bestseller-cont">
                @php
                    $imagePath = public_path('home/images/bestseller');
                    $imageFiles = File::files($imagePath);
                    $totalImages = count($imageFiles);
                    $itemsPerSlide = 5;
                @endphp
                
                @if ($totalImages > 0)
                    @foreach (range(0, ceil($totalImages / $itemsPerSlide) - 1) as $index)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="row">
                                @for ($i = $index * $itemsPerSlide + 1; $i <= min($totalImages, ($index + 1) * $itemsPerSlide); $i++)
                                    @php
                                        switch ($itemsPerSlide) {
                                            case 5:
                                                $colClass = 'col-lg-2 col-md-2 col-sm-2';
                                                break;
                                            case 2:
                                                $colClass = 'col-lg-6 col-md-6 col-sm-6';
                                                break;
                                            case 1:
                                                $colClass = 'col-lg-12 col-md-12 col-sm-12';
                                                break;
                                        }
                                    @endphp
                                    <div class="{{ $colClass }} bestseller-container">
                                        <a href="#" class="img-link">
                                            <img src="{{ asset('home/images/bestseller/book' . $i . '.png') }}" class="img-fluid img-bestseller" alt="">
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No images found.</p>
                @endif
            </div>
            <div class="carousel_btn_box">
                <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>


