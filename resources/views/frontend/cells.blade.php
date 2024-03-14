@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-20 pb-20">
        </section>
        <section class="page-section bg-white pb-0">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title mb-30">{!! Helpers::getcontent("section_1_35") !!}</h1>

                        <div class="box-one mb-40">
                            <div class="section-text white">
                                {!! Helpers::getcontent("section_1_36") !!}
                            </div>
                        </div>

                        <div class="hs-line-3 mb-20 m-center mb-xs-20">More information coming soon.</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section pt-20">
            <div class="container relative">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="img-rounded">
                            <img src="{!! Helpers::getsingleimage('section_2_38') !!}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-xs-20">
                        <div class="inner-pad-01">
                            <div class="page-title color-blue mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">{!! Helpers::getcontent("section_1_37") !!}</div>
                            <div class="section-text black">
                                {!! Helpers::getcontent("section_2_39") !!}
                            </div>
                            <div class="d-flex align-items-center mt-20">
                                <div class="me-3"><img src="/frontend/images/icons/SDNB_Vaishnav_College-Logo.png"></div>
                                <div class="text-center section-text black">SDNB Vaishnav College for Women</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection