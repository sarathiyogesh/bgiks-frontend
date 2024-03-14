@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-20 pb-20">
        </section>
        <section class="page-section bg-white pb-60">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title mb-30">Credentials</h1>

                        <div class="box-one mb-40">
                            <h2 class="hs-line-2 mb-20">{!! Helpers::getcontent("section_1_70") !!}</h2>
                            <div class="section-text white">
                                {!! Helpers::getcontent("section_1_71") !!}
                            </div>
                        </div>


                        <h3 class="hs-line-3 mb-10">{!! Helpers::getcontent("section_2_72") !!}</h3>

                        <div class="row mt-20">
                            <div class="col-md-4 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">
                                <div class="box-two d-flex align-items-center mb-20">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_74') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_73") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="2s">
                                <div class="box-two d-flex align-items-center mb-20">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_76') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_75") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="3s">
                                <div class="box-two d-flex align-items-center mb-20">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_78') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_77") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="3s">
                                <div class="box-two d-flex align-items-center mb-20">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_80') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_79") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-4 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="3s">
                                <div class="box-two d-flex align-items-center mb-20">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_82') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_81") !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section bg-gray-lighter">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-6">
                        <div class="inner-pad-02">
                            <h4 class="page-title mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">{!! Helpers::getcontent("section_3_83") !!}</h4>
                            <div class="section-text black">
                                {!! Helpers::getcontent("section_3_85") !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-xs-20">
                        <div class="img-rounded">
                            <img src="{!! Helpers::getcontent('section_3_83') !!}">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section">
            <div class="container relative">
                <div class="row mb-30 d-flex align-items-center">
                    <div class="col-md-12">
                        <div class="page-title color-blue mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">{!! Helpers::getcontent("section_4_86") !!}</div>
                        <div class="section-text black">
                            {!! Helpers::getcontent("section_4_87") !!}
                        </div>
                    </div>
                </div>

                <?php
                    //$images = Helpers::getmultipleimage('section_4_88');
                ?>

                <div class="row">
                    <div class="col-md-4">
                        <div class="post-prev-img">
                            <a href="/frontend/images/certificate-02.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/certificate-02.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-xs-20">
                        <div class="post-prev-img">
                            <a href="/frontend/images/certificate-01.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/certificate-01.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section bg-gray-lighter">
            <div class="container relative">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="inner-pad-02">
                            <div class="page-title color-blue mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">{!! Helpers::getcontent("section_5_89") !!}</div>
                            <div class="section-text black">
                                {!! Helpers::getcontent("section_5_91") !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-xs-20s">
                        <div class="img-rounded">
                            <img src="{!! Helpers::getsingleimage('section_5_90') !!}">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section">
            <div class="container relative">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 xs-order-2 mt-xs-20">
                        <div class="img-rounded">
                            <img src="{!! Helpers::getsingleimage('section_6_93') !!}">
                        </div>
                    </div>
                    <div class="col-md-6 xs-order-1">
                        <div class="inner-pad-01">
                            <div class="page-title color-blue mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">{!! Helpers::getcontent("section_6_92") !!}</div>
                            <div class="section-text black">
                                {!! Helpers::getcontent("section_6_94") !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section bg-gray-lighter">
            <div class="container relative">
                <div class="row mb-30">
                    <div class="col-md-12">
                        <h4 class="page-title mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">{!! Helpers::getcontent("section_7_95") !!}</h4>
                        <div class="section-text black">
                            {!! Helpers::getcontent("section_7_97") !!}
                        </div>
                    </div>
                </div>

                <h5 class="hs-line-3 mb-20">Images</h5>
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-01.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-01-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-02.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-02-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-03.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-03-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-04.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-04-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-05.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-05-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-06.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-06-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-07.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-07-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-08.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-08-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-09.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-09-thumb.jpg" alt="" /></a>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="post-prev-img mb-30">
                            <a href="/frontend/images/program-10.jpg" class="lightbox-gallery-2 mfp-image"><img src="/frontend/images/program-10-thumb.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection