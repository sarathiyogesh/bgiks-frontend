@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <!-- Fullwidth Slider -->
        <div class="home-section fullwidth-slider bg-dark" id="home">
            <!-- Slide Item -->
            <section class="home-section bg-scroll" data-background="/frontend/images/section-01.jpg">
                <div class="js-height-full container">
                    <div class="home-content">
                        <div class="home-text">
                            <div class="row d-flex align-items-center justify-content-between mb-50 mb-xs-30">   
                                <div class="col-md-5">
                                    <div class="home-inner-content mt-xs-20">
                                        <h1 class="hs-line-1 mb-20">
                                            {!! Helpers::getcontent("section_1_1") !!}
                                        </h1>
                                    </div>
                                </div>

                                <div class="col-md-7 mt-xs-10">
                                    <div class="row mt-30 mt-xs-0">
                                        <div class="col-6 col-md-6">
                                            <div class="card-box-one mb-40 mb-xs-20">
                                                <div class="mb-10"><img src="{!! Helpers::getsingleimage('section_1_3') !!}"></div>
                                                <div class="title">{!! Helpers::getcontent("section_1_2") !!}</div>
                                                <div class="read-more"><a href="courses">read more</a></div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-6">
                                            <div class="card-box-one mb-40 mb-xs-20">
                                                <div class="mb-10"><img src="{!! Helpers::getsingleimage('section_1_5') !!}"></div>
                                                <div class="title">{!! Helpers::getcontent("section_1_4") !!}</div>
                                                <div class="read-more"><a href="cells">read more</a></div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-6">
                                            <div class="card-box-one">
                                                <div class="mb-10"><img src="{!! Helpers::getsingleimage('section_1_7') !!}"></div>
                                                <div class="title">{!! Helpers::getcontent("section_1_6") !!}</div>
                                                <div class="read-more"><a href="content">read more</a></div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-6">
                                            <div class="card-box-one">
                                                <div class="mb-10"><img src="{!! Helpers::getsingleimage('section_1_9') !!}"></div>
                                                <div class="title">{!! Helpers::getcontent("section_1_8") !!}</div>
                                                <div class="read-more"><a href="credentials">read more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hs-line-3 mb-20 m-center mb-xs-10">Frequently asked questions</div>
                                    <div class="faq-cta-container">
                                        <div class="faq-one me-5">
                                            <a href="what-is-iks">
                                                <div class="icon"><img src="/frontend/images/icons/question.png"></div>
                                                What is IKS?
                                            </a>
                                        </div>

                                        <div class="faq-one">
                                            <a href="why-iks">
                                                <div class="icon"><img src="/frontend/images/icons/question.png"></div>
                                                Why IKS?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Slide Item -->
        </div>
    </main>
@endsection