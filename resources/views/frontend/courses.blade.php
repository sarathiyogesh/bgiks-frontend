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

                        <div class="row mt-20 local-scroll">
                            <div class="col-md-3 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="1s">
                                <a href="#faculty-assist-programs">
                                    <div class="box-two d-flex align-items-center justify-content-center m-flex-start">
                                        <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_18') !!}"></div>
                                        <div class="text-center section-text">{!! Helpers::getcontent("section_2_17") !!}</div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="2s">
                                <a href="#student-assist-programs">
                                    <div class="box-two d-flex align-items-center justify-content-center m-flex-start">
                                        <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_20') !!}"></div>
                                        <div class="text-center section-text">{!! Helpers::getcontent("section_2_19") !!}</div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="3s">
                                <a href="#elearning-courses">
                                    <div class="box-two d-flex align-items-center justify-content-center m-flex-start">
                                        <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_22') !!}"></div>
                                        <div class="text-center section-text">{!! Helpers::getcontent("section_2_21") !!}</div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 wow fadeInDown mb-xs-20" data-wow-delay="0.3s" data-wow-duration="3s">
                                <a href="#library">
                                    <div class="box-two d-flex align-items-center justify-content-center m-flex-start">
                                        <div class="me-3"><img src="{!! Helpers::getsingleimage('section_2_24') !!}"></div>
                                        <div class="text-center section-text">{!! Helpers::getcontent("section_2_23") !!}</div>
                                    </div>
                                </a>
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
                <?php $i = 0; ?>
                @foreach($courses as $course)
                    <?php 
                        $remaining = $i%2;
                        $desc = $clear = trim($course->description);
                        // $desc = $clear = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($course->description))))));
                    ?>
                    @if($remaining == 0)
                        <div class="row mt-60 d-flex align-items-center mt-xs-30 mb-xs-30">
                            <div class="col-md-6">
                                <div class="inner-pad-02">
                                    <div class="page-title white mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">{!! $course->course_name !!}</div>
                                    <div class="section-text">
                                        {!! substr($desc, 0, 650) !!}...
                                    </div>
                                    <div class="mt-30">
                                        <a href="{{ url('course/'.$course->slug) }}" class="btn btn-mod btn-color btn-round btn-small">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-xs-20">
                                <div class="img-rounded">
                                    <img src="{{ env('BGIKS_ADMIN_URL').$course->image }}">
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row mt-60 d-flex align-items-center mt-xs-30">
                            <div class="col-md-6 xs-order-2 mt-xs-20">
                                <div class="img-rounded">
                                    <img src="{{ env('BGIKS_ADMIN_URL').$course->image }}">
                                </div>
                            </div>
                            <div class="col-md-6 xs-order-1">
                                <div class="inner-pad-01">
                                    <div class="page-title white mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">{!! $course->course_name !!}</div>
                                    <div class="section-text">
                                        {!! substr($desc, 0, 650) !!}....
                                    </div>
                                    <div class="mt-30">
                                        <a href="{{ url('course/'.$course->slug) }}" class="btn btn-mod btn-color btn-round btn-small">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <?php $i++; ?>
                @endforeach

                <!-- <div class="row mt-60 d-flex align-items-center mt-xs-30">
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
                </div> -->

                
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

        <section class="small-section pt-0">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title color-blue mb-10">
                            IKS Assist Programs
                        </div>
                        <div class="section-text-alt black">
                            <p>These are courses which are curated, designed and facilitated online by Bharath Gyan IKS, for in class delivery by the existing faculty of the respective colleges.</p>
                            <p>These courses are designed to help colleges meet their IKS Credit requirements by offering credit courses that fall under the IKS discipline.</p>
                            <p>These programs from Bharath Gyan IKS, take the load off the college in designing IKS courses and preparing course content for consumption by both Faculty and Students.</p>
                            <p>Colleges can subscribe to these IKS Assist Programs once they have these courses passed in their Academic Council / Board of Studies as applicable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section bg-gray-lighter" id="faculty-assist-programs">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title color-blue mb-10">
                            Faculty Assist Programs
                        </div>
                        <div class="section-text-alt black">
                            <p>On the college subscribing to these IKS Assist Programs, the nominated faculty from these colleges will gain access to an online library of course support materials in Audio Visual format, ebook format and article format, as well as to a Quiz Databank.</p>
                            <p>Faculty of the college will also gain access to Video lectures from Bharath Gyan. These video lectures will be aligned with the design of the course, to equip the faculty on the content they should deliver as part of this course in each class / lecture. This will help the faculty refresh themselves prior to every lecture of the course.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section" id="student-assist-programs">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title color-blue mb-10">
                            Student Assist Programs
                        </div>
                        <div class="section-text-alt black">
                            <p>Students desirous of gaining online access to the course material may subscribe to the Student Assist Program, which will give them access, beyond the classroom, to an online library of course support materials in Audio Visual format, ebook format and article format, as well as to online Quizzes. This is open to students registered for the IKS courses for which their institutions have registered with Bharath Gyan IKS for Faculty Assist programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section bg-gray-lighter" id="elearning-courses">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title color-blue mb-10">
                            eLearning Courses
                        </div>
                        <div class="section-text-alt black">
                            <p>In addition, Bharath Gyan IKS also has eLearning courses to offer educational institutions, to supplement their inhouse IKS course delivery needs. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section" id="library">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title color-blue mb-10">
                            Library
                        </div>
                        <div class="section-text-alt black">
                            <p>Students desirous of availing access to the content of their courses beyond the respective course semester, can opt for subscription to the Library Membership. Resources in the Library will be organized as per the course structure to ensure that the students can relate them to their courses completed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection