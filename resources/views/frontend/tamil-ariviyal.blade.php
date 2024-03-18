@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-20 pb-20">
        </section>
        <section class="page-section bg-white pb-10">
            <div class="container relative">
                <div class="row d-flex align-items-center justify-content-between course-avail">
                    <div class="col-md-5">
                        <div class="page-title color-blue">Tamil Ariviyal</div>
                    </div>
                    <div class="col-md-7">
                        <div class="d-flex justify-content-end color-grey fs-12 uppercase fw-600 mb-10">Available As</div>
                        <ul>
                            <li>FACULTY assist program</li>
                            <li>STUDENT assist program</li>
                            <li>private e-learnng</li>
                            <li>library</li>
                        </ul>
                    </div>
                </div>

                <hr class="black mt-20 mb-20">
            </div>
        </section>

        <section class="small-section pt-0 pb-30">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="img-rounded">
                            <img src="/frontend/images/tamil-ariviyal.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section bg-gray-lighter">
            <div class="container relative">
                <div class="row d-flex align-items-center">
                    <div class="col-md-12">
                        <div class="page-title color-blue mb-20 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1s">Introduction to the Course</div>
                        <div class="section-text black">
                            <p>This course showcases the sciences in Tamil as a language, a land, a people, a culture and a knowledgebase. This course is expected to inculcate an urge to learn more about Tamil and from its knowledgebase to see what had made the Tamil region and its people properouos for millennia, so that, the same can be applied relevantly today.</p> 

                            <p>This package here is meant to assist Faculty teaching this course as well as Students enrolled in this course at an educational institution where this course is being offered as part of the curriculum.</p>

                            <p>This package defines a structure by which the Faculty can teach this novel subject in their classes.
                            Data and knowledge from various sources have been compiled, curated and put together as this package to assist the Faculty to take this knowledge to their students along with their own personal experiences and knowledge accumulated through the years.</p>

                            <p>For the student, this acts as a refresher point, where they can gain access to the knowledge provided by the Faculty in the same structured manner in which was taught by the Faculty.</p> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section">
            <div class="container relative">
                <div class="row d-flex align-items-center">
                    <div class="col-md-12">
                        <div class="section-text black">
                            <p>This Tamil Ariviyal  package is the introductory part of a series on exploring and understanding Science in Tamil. This package is designed to be covered by the Faculty as an Elective subject in Colleges over a semester. Its structure provides for a right balance of classroom sessions and activities to be designed by the Faculty based on the content available in this package. For a student, this package will also provide Quizzes as a means to enjoy the learning by challenge themselves and at the same time, to assess how much of this subject they have assimilated.</p>

                            <p>This package is available to Faculty and Students for the duration of the semester for which subscribed.</p>  

                            <p>Students wanting to gain longer time access to this content beyond their semester, can do so by subscribing to the Library Program after their semester is over.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="small-section pt-0">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="buy-course">
                            <div class="box-three">
                                <h3 class="hs-line-6 mb-0 color-orange">Register for this Course</h3>
                                <div class="hs-line-3 white">Choose a relevant course type.</div>
                            </div>

                            <div class="course-list">
                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-md-7">
                                        <div class="hs-line-7 mb-0 color-blue">Faculty Assist Program</div>
                                        <div class="hs-line-3 white fw-500">This course type is designed for Faculty of Colleges & Universities</div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="d-flex justify-content-end">
                                            <a href="javascript:;" class="btn btn-mod btn-blue btn-round btn-small">Register for faculty assist program</a>
                                        </div>
                                    </div>
                                </div>

                                <hr class="white mt-30 mb-30">

                                <div class="row d-flex align-items-center justify-content-between">
                                    <div class="col-md-7">
                                        <div class="hs-line-7 mb-0 color-blue">Student Assist Program</div>
                                        <div class="hs-line-3 white fw-500">This course type is designed for UG & PG Students</div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="d-flex justify-content-end">
                                            <a href="javascript:;" class="btn btn-mod btn-blue btn-round btn-small">Register for student assist program</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection