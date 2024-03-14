@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-20 pb-20">
        </section>
        <section class="page-section bg-white pb-60">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title mb-30 mb-xs-20">Courses</div>

                        <div class="box-one mb-40">
                            <div class="hs-line-2 mb-20">Courses by Bharath Gyan<sup>TM</sup> IKS</div>
                            <div class="section-text white">
                                Bharath Gyan<sup>TM</sup> IKS offers a wide variety of courses from multitudes of subjects. We are proud to offer these as KAAS - Knowledge As A Service. The aim of these courses is to create a mindset of appreciation and acceptance of IKS in students, which will help modern applications of IKS to emerge. The courses offered focus on;
                            </div>

                            <div class="row mt-30">
                                <div class="col-md-4">
                                    <div class="section-text d-flex">
                                        <div class="mw-20 me-2"><img src="/frontend/images/icons/star.png" class="star-icon"></div>
                                        <div>The various civilizational practices of India</div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section-text d-flex">
                                        <div class="mw-20 me-2"><img src="/frontend/images/icons/star.png" class="star-icon"></div>
                                        <div>The knowledge, ethos and Kalachar with which they were practiced </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="section-text d-flex">
                                        <div class="mw-20 me-2"><img src="/frontend/images/icons/star.png" class="star-icon"></div>
                                        <div>The commonality in these across India which makes this an 'Ek Bharat Sreshta Bharat'.</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="hs-line-3 mb-10">{!! Helpers::getcontent("section_2_15") !!}</div>
                        <div class="section-text black">
                            {!! Helpers::getcontent("section_2_16") !!}
                        </div>

                        <div class="row mt-20">
                            <div class="col-md-3 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="1s">
                                <div class="box-two d-flex align-items-center justify-content-center m-flex-start">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_18') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_17") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="2s">
                                <div class="box-two d-flex align-items-center justify-content-center m-flex-start">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_20') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_19") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="3s">
                                <div class="box-two d-flex align-items-center justify-content-center m-flex-start">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_22') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_21") !!}</div>
                                </div>
                            </div>

                            <div class="col-md-3 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="3s">
                                <div class="box-two d-flex align-items-center justify-content-center m-flex-start">
                                    <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_24') !!}"></div>
                                    <div class="text-center section-text">{!! Helpers::getcontent("section_2_23") !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section bg-blue bg-scroll" data-background="/frontend/images/section-02.jpg">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-divider">
                            <span>Course List</span>
                        </div>
                    </div>
                </div>

                <div class="row mt-60 d-flex align-items-center mt-xs-30 mb-xs-30">
                    <div class="col-md-6">
                        <div class="inner-pad-02">
                            <div class="page-title white mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">Tamil Ariviyal</div>
                            <div class="section-text">
                                This course showcases the sciences in Tamil as a language, a land, a people, a culture and a knowledgebase. This course is expected to inculcate an urge to learn more about Tamil and from its knowledgebase to see what had made the Tamil region and its people properouos for millennia, so that, the same can be applied relevantly today
                            </div>
                            <div class="mt-30">
                                <a href="tamil-ariviyal" class="btn btn-mod btn-color btn-round btn-small">Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-xs-20">
                        <div class="img-rounded">
                            <img src="/frontend/images/tamil-ariviyal.jpg">
                        </div>
                    </div>
                </div>

                <div class="row mt-60 d-flex align-items-center mt-xs-30">
                    <div class="col-md-6 xs-order-2 mt-xs-20">
                        <div class="img-rounded">
                            <img src="/frontend/images/water-harnessing.jpg">
                        </div>
                    </div>
                    <div class="col-md-6 xs-order-1">
                        <div class="inner-pad-01">
                            <div class="page-title white mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">Water Harnessing</div>
                            <div class="section-text">
                                This course showcases the prowess and understanding with which the Bharatiya civilization had handled and harnessed water. It will bring out how while most ancient civilization grew mainly on the banks of rivers, the Bharatiya civilization not only flourished by the banks of rivers, but they also learnt to bring waters to where they lived. This civilization was thus, wide spread and also leveraged water wisely to produce and trade sustainably for sustained prosperity. It throws light on the various facets in managing water as a resource that is available repeatedly but in a limited yet sufficient manner each time.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="small-section">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title color-blue mb-10">
                            {!! Helpers::getcontent("section_3_25") !!}
                        </div>
                        <div class="section-text black">
                            {!! Helpers::getcontent("section_3_26") !!}
                        </div>
                    </div>
                </div>

                <div class="row mt-40">
                    <div class="col-md-4 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="1s">
                        <div class="course-iks">
                            <div class="mb-1 color-orange uppercase fs-15 fw-700">{!! Helpers::getcontent("section_3_27") !!}</div>
                            <div class="section-text color-grey">
                                {!! Helpers::getcontent("section_3_28") !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="2s">
                        <div class="course-iks">
                            <div class="mb-1 color-orange uppercase fs-15 fw-700">{!! Helpers::getcontent("section_3_29") !!}</div>
                            <div class="section-text color-grey">
                                {!! Helpers::getcontent("section_3_30") !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="3s">
                        <div class="course-iks">
                            <div class="mb-1 color-orange uppercase fs-15 fw-700">{!! Helpers::getcontent("section_3_31") !!}</div>
                            <div class="section-text color-grey">
                                {!! Helpers::getcontent("section_3_32") !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection