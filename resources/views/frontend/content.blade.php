@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-20 pb-20">
        </section>
        <section class="page-section bg-white pb-60 pb-xs-40">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title mb-30">Content</h1>

                        <div class="box-one mb-40">
                            <h2 class="hs-line-2 mb-20">{!! Helpers::getcontent("section_1_40") !!}</h2>
                            <div class="section-text white">
                                {!! Helpers::getcontent("section_1_41") !!}
                            </div>
                            <div class="mt-20">
                                <a href="{!! Helpers::getcontent('section_1_43') !!}" target="_blank" class="btn btn-mod btn-blue btn-round btn-small">{!! Helpers::getcontent("section_1_42") !!}</a>
                            </div>
                        </div>


                        <h3 class="hs-line-3 mb-10">{!! Helpers::getcontent("section_2_44") !!}</h3>

                        <div class="row mt-20">
                            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">
                                <div class="box-two mh-1 d-flex align-items-center mb-20">
                                    <div class="me-2"><img src="{!! Helpers::getsingleimage('section_2_46') !!}"></div>
                                    <div class="text-left section-text">{!! Helpers::getcontent("section_2_45") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="2s">
                                <div class="box-two mh-1 d-flex align-items-center mb-20">
                                    <div class="me-2"><img src="{!! Helpers::getsingleimage('section_2_48') !!}"></div>
                                    <div class="text-left section-text">{!! Helpers::getcontent("section_2_47") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="3s">
                                <div class="box-two mh-1 d-flex align-items-center mb-20">
                                    <div class="me-2"><img src="{!! Helpers::getsingleimage('section_2_50') !!}"></div>
                                    <div class="text-left section-text">{!! Helpers::getcontent("section_2_49") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="3s">
                                <div class="box-two mh-1 d-flex align-items-center mb-20">
                                    <div class="me-2"><img src="{!! Helpers::getsingleimage('section_2_52') !!}"></div>
                                    <div class="text-left section-text">{!! Helpers::getcontent("section_2_51") !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section bg-blue bg-scroll" data-background="/frontend/images/section-02.jpg">
            <div class="container relative">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5">
                        <div class="img-rounded">
                            <img src="{!! Helpers::getsingleimage('section_3_55') !!}">
                        </div>
                        <div class="hs-line-5 mt-20 text-center">
                            {!! Helpers::getcontent("section_3_54") !!}
                        </div>
                    </div>
                    <div class="col-md-7 mt-xs-30">
                        <div class="inner-pad-01">
                            <div class="page-title white mb-20 wow fadeInDown m-center" data-wow-delay="0.3s" data-wow-duration="1s">{!! Helpers::getcontent("section_3_53") !!}</div>
                            <div class="count-container">
                                <div class="count-inner-container">
                                    <div class="row mb-30 mb-xs-0">
                                        <div class="col-4 col-md-4">
                                            <div class="count-wrapper">
                                                <span class="count-number">{!! Helpers::getcontent("section_3_57") !!}</span>
                                                <span class="count-symbol">+</span>  
                                            </div>
                                            <div class="count-descr">{!! Helpers::getcontent("section_3_56") !!}</div>
                                        </div>

                                        <div class="col-4 col-md-4">
                                            <div class="count-wrapper">
                                                <span class="count-number">{!! Helpers::getcontent("section_3_59") !!}</span>
                                                <span class="count-symbol">+</span>  
                                            </div>
                                            <div class="count-descr">{!! Helpers::getcontent("section_3_58") !!}</div>
                                        </div>

                                        <div class="col-4 col-md-4">
                                            <div class="count-wrapper">
                                                <span class="count-number">{!! Helpers::getcontent("section_3_61") !!}</span>
                                                <span class="count-symbol">+</span>  
                                            </div>
                                            <div class="count-descr">{!! Helpers::getcontent("section_3_60") !!}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-md-4">
                                            <div class="count-wrapper">
                                                <span class="count-number">{!! Helpers::getcontent("section_3_63") !!}</span>
                                                <span class="count-symbol">+</span>  
                                            </div>
                                            <div class="count-descr">{!! Helpers::getcontent("section_3_62") !!}</div>
                                        </div>

                                        <div class="col-4 col-md-4">
                                            <div class="count-wrapper">
                                                <span class="count-number">{!! Helpers::getcontent("section_3_65") !!}</span>
                                                <span class="count-symbol">+</span>  
                                            </div>
                                            <div class="count-descr">{!! Helpers::getcontent("section_3_64") !!}</div>
                                        </div>

                                        <div class="col-4 col-md-4">
                                            <div class="count-wrapper">
                                                <span class="count-number">{!! Helpers::getcontent("section_3_67s") !!}</span>
                                                <span class="count-symbol">+</span>  
                                            </div>
                                            <div class="count-descr">{!! Helpers::getcontent("section_3_66") !!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-30 m-center">
                                <a href="{!! Helpers::getcontent('section_3_69') !!}" target="_blank" class="btn btn-mod btn-color btn-round btn-small">{!! Helpers::getcontent("section_3_68") !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection