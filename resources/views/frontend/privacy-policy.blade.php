@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-20 pb-20">
        </section>
        <section class="page-section bg-white pb-60">
            <div class="container relative terms-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title mb-30">{!! Helpers::getcontent("section_1_98") !!}</div>

                        <div class="section-text black">
                            {!! Helpers::getcontent("section_1_99") !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection