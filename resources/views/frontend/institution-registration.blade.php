@extends('frontend.master')
@section('maincontent')
	<main id="main">
        <section class="small-section bg-white pt-30 pb-30">
        </section>
        <section class="page-section bg-white pb-60">
            <div class="container relative">
                <h1 class="page-title text-center mb-40">Create your Institution account with Bharath Gyan<sup>TM</sup>IKS</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{!! Session::get('success') !!}</div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-danger">{!! Session::get('error') !!}</div>
                        @endif
                        <form action="/institution-registration/post" class="form selectiveForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Institution Name*" name="name" value="{{old('name')}}">
                                        @if($errors->has("name"))
                                            <span id="name-error" class="help-block">{!! $errors->first("name") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Institution Code*" name="code" value="{{old('code')}}">
                                        @if($errors->has("code"))
                                            <span id="name-error" class="help-block">{!! $errors->first("code") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="input-md form-control" placeholder="Password*" name="password" value="{{old('password')}}">
                                        @if($errors->has("password"))
                                            <span id="name-error" class="help-block">{!! $errors->first("password") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="input-md form-control" placeholder="Confirm Password*" name="confirm_password" value="{{old('confirm_password')}}">
                                        @if($errors->has("confirm_password"))
                                            <span id="name-error" class="help-block">{!! $errors->first("confirm_password") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Email Address*" name="email" value="{{old('email')}}">
                                        @if($errors->has("email"))
                                            <span id="name-error" class="help-block">{!! $errors->first("email") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Contact Number*" name="mobile" value="{{old('mobile')}}">
                                        @if($errors->has("mobile"))
                                            <span id="name-error" class="help-block">{!! $errors->first("mobile") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Alternate Number*" name="mobile2" value="{{old('mobile2')}}">
                                        @if($errors->has("mobile2"))
                                            <span id="name-error" class="help-block">{!! $errors->first("mobile2") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Contact Person*" name="contact_person_name" value="{{old('contact_person_name')}}">
                                        @if($errors->has("contact_person_name"))
                                            <span id="name-error" class="help-block">{!! $errors->first("contact_person_name") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Contact Person Number*" name="contact_person_mobile" value="{{old('contact_person_mobile')}}">
                                        @if($errors->has("contact_person_mobile"))
                                            <span id="name-error" class="help-block">{!! $errors->first("contact_person_mobile") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Address*" name="address" value="{{old('address')}}">
                                        @if($errors->has("address"))
                                            <span id="name-error" class="help-block">{!! $errors->first("address") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group selectDiv">
                                        <select class="form-control" name="state">
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option value="{{ $state->id}}" <?php if(old('state') == $state->id){ echo 'selected'; } ?>>{{ $state->state }}</option>
                                            @endforeach
                                            @if($errors->has("state"))
                                                <span id="state-error" class="help-block">{!! $errors->first("state") !!}</span>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control mb-2" placeholder="City" value="{{old('city')}}">
                                        @if($errors->has("city"))
                                            <span id="city-error" class="help-block">{!! $errors->first("city") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="input-md form-control" placeholder="Pincode*" name="pincode" value="{{old('pincode')}}">
                                        @if($errors->has("pincode"))
                                            <span id="name-error" class="help-block">{!! $errors->first("pincode") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Institution Logo</label>
                                        <div class="file-upload-wrapper" data-text="Select your file!">
                                            <input name="logo" type="file" class="file-upload-field" value="{{old('logo')}}">
                                        </div>
                                        @if($errors->has("logo"))
                                            <span id="logo-error" class="help-block">{!! $errors->first("logo") !!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12 text-center mt-40">
                                    <button type="submit" class="btn btn-mod btn-color btn-large btn-round">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection