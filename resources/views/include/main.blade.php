

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Dress Collecton</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                @if(isset($rs))
                @foreach ($rs as $rse)

                <div class="col-lg-3">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <div class="row">
                                        <div class="col-md-2">
                                             <form action="{{ url('/') }}/detail" method="get">
                                                <input type="text" name="id" value="{{ $rse->id }}" hidden>
                                            <li><button type="submit" name="submit" style="border: none;"><i class="fa fa-eye"></i></button></li>
                                            </form>       
                                        </div>
                                        <div class="col-md-2">
                                            <form action="{{ url('/') }}/buy" method="get">
                                                <input type="text" name="id" value="{{ $rse->id }}" placeholder="{{ $rse->id }}" hidden>
                                            <li><button type="submit" name="submit" style="border: none;" style=""><i class="fa fa-shopping-cart"></i></button></li>
                                            </form>        
                                        </div>
                                    </div>
                                    
                                    
                                </ul>
                            </div> 
                            <img src="assets/img/collection/{{ $rse->img }}.webp" alt="">
                        </div>
                        <div class="down-content">
                            <h6>{{ $rse->name }}</h6>
                            <span>£{{ $rse->price }}.00</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->


