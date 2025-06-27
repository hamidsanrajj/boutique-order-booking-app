@extends('../../include/layout/master')

@section('title','- Buy')

@section('content')


    <section>
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <!-- Add Dress -->
                @if(isset($rs))
                @foreach ($rs as $rse)

                <form action="{{ url('/') }}/buy" method="post">
                @csrf
                <div class="form m-4">
                    <h2 class="mb-4">Order Booking Needs To Fill</h2>
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                
                

                    <div class="form-group">
                        <input type="text" name="img" value="{{ $rse->img }}" class="form-control" hidden>
                    </div>
                    <div class="form-group">
                        <label>Dress</label>
                        <input type="text" name="dress_name" value="{{ $rse->name }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" value="{{ $rse->price }}" class="form-control" readonly>
                    </div>

                
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary">
                    </div>

                @endforeach
                @endif

                </div>
                </form>
            </div>
        </div>
    </section>


@stop