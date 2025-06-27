@extends('../../include/layout/master')

@section('title','- Contact')

@section('content')


<!-- Quote Start -->
<div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">Drop Us A Line</h1>
                <!-- <p class="mb-4">Kasd vero erat ea amet justo no stet, et elitr no dolore no elitr sea kasd et dolor diam tempor. Nonumy sed dolore no eirmod sit nonumy vero lorem amet stet diam at. Ea at lorem sed et, lorem et rebum ut eirmod gubergren, dolor ea duo diam justo dolor diam ipsum dolore stet stet elitr ut. Ipsum amet labore lorem lorem diam magna sea, eos sed dolore elitr.</p> -->
                <form action="{{ url('/') }}/contact" method="post">
                    @csrf
                    <div class="row gx-1">
                        <div class="col-6">
                            <div class="form-floating">
                                <input name="name" type="text" class="form-control" placeholder="John Doe" required>
                                <label>Full Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control" placeholder="name@example.com" required>
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-floating">
                            <input name="message" type="text" class="form-control" placeholder="name@example.com" required style="height: 120px;">
                                <label>Message</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button  type="submit" name="submit" class="btn btn-primary w-100 h-100">Request A Quote</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/quote.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


@stop