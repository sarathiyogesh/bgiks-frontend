@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-30 pb-30">
        </section>
        <section class="page-section bg-white pb-60">
            <div class="container relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <h1 class="page-title text-center mb-40">Write to Us</h1>
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="First Name*" name="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Last Name*" name="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Mail ID*" name="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Name of Institution or Organization" name="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Subject" name="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-10">
                                    <button type="button" class="btn btn-mod btn-color btn-medium btn-round">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection