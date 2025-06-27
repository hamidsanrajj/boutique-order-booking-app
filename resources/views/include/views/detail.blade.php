@extends('../../include/layout/master')

@section('title','- Detail')

@section('content')


    <section>
        <div class="container">
            <div class="row" style="margin-top: 200px;">

                @if(isset($rs))
                @foreach ($rs as $rse)

                <div class="col-md-6">
                    <!-- <h1 class="mb-4">{{ $rse->name }}</h1> -->
                    <!-- <h2>£{{ $rse->price }}</h2> -->
                    <img src="assets/img/collection/{{ $rse->img }}.webp" alt="" width="600" height="800">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h3>{{ $rse->name }}</h3>
                    <h3>£{{ $rse->price }}.00</h3>
                    <h3 class="dropdown-content">
                        <ul class="stars">
                            <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                        </ul>
                    </h3> 
                    <!-- <button class="btn btn-success mt-4">Add To Cart</button> -->
                    <form action="{{ url('/') }}/buy" method="get">
                        <input type="text" name="id" value="{{ $rse->id }}" placeholder="{{ $rse->id }}" hidden>
                    <button class="btn btn-warning mt-4">Buy Now</button>
                    </form>      
                    
                    <!-- <button class="btn btn-success mt-4" disabled>Buy through Whatsapp</button>                       -->
                </div>

                @endforeach
                @endif

            </div>
        </div>
    </section>


@stop