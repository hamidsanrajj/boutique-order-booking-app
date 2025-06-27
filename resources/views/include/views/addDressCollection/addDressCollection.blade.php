@extends('../../include/layout/master')

@section('title','- Detail')

@section('content')


    <section>
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <!-- Add Dress -->
                <form action="{{ url('/') }}/add-dress-collection" method="post">
                @csrf
                <div class="form m-4">
                    <h2 class="mb-4">Add Dress Collection</h2>
                    <div class="form-group">
                        <label>Dress Image</label>
                        <input type="text" name="img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <input type="text" name="rating" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>


@stop