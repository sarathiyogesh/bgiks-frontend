@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="page-section">
            <div class="container relative">
                <div class="page-title mb-40 wow fadeInDown text-center pt-xs-60" data-wow-delay="0.3s" data-wow-duration="1s">IKS Olympiad</div>

                <div class="row d-flex justify-content-center text-center mb-50">
                    <div class="col-md-3">
                        <div class="hs-line-2 mb-30">IKS Olympiad by</div>

                        <div><img src="{!! URL::asset('frontend/images/ikslogo.png') !!}"></div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-6">
                        <div class="hs-line-2 mb-30">Knowledge Partner</div>

                        <div><img src="{!! URL::asset('frontend/images/logo.png') !!}"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="small-section bg-white pt-40 pb-40">
        </section>
    </main>
@endsection