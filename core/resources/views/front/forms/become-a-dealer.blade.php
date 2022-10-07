@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
{{__('Become a Dealer')}}
@endsection

@section('content')
<!-- Page Title-->
@include('includes.title', ['banner' => '', 'title'=>'Become a Dealer'])
<!-- Page Content-->

    @include('includes.alert')

<!-- start section -->
<section class="bg3-c">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5 col-md-9 md-margin-7-rem-bottom">
                <span class="alt-font margin-20px-bottom text-black opacity-6 d-inline-block text-uppercase font-weight-500 letter-spacing-1px">Dealership at Harrison</span>
                <h4 class="alt-font font-weight-600 text-extra-dark-gray w-95">Why become a dealer for Harrison</h4>
                <p class="w-80 lg-w-95">This content will be soon replaced with something that explains why should you become a dealer of Harrison products.</p>
            </div>
            <div class="col-12 col-lg-7 col-md-9 padding-55px-lr md-padding-5px-left sm-padding-50px-right">
                <figure class="image-back-offset-shadow position-right w-100">
                    <img class="border-radius-6px" src="{{ asset('assets/harrison/images/our-services-01.jpg') }}" alt=""/>
                    <span class="bg-gradient-light-purple-light-orange border-radius-6px overlay"></span>
                </figure>
            </div>
        </div>
    </div>

    <div class="container mt50">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 px-lg-0">
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                    
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn ">
                        <div class="feature-box h-100 feature-box-left-icon bg-light-yellow feature-box-dark-hover bg-light-gray padding-4-rem-all lg-padding-3-half-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Crown icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">Get an Edge</span>
                                <p>You will be able to connect with new clients looking for an architect/Interior designer in your region. Appear in Harrison's search and get an opportunity to be hired by brands & individuals.</p>
                            </div>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="feature-box h-100 feature-box-left-icon bg-light-yellow feature-box-dark-hover bg-light-gray padding-4-rem-all lg-padding-3-half-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Cube-Molecule icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">Increased Branding</span>
                                <p>Your association with the Harrison brand helps in creating better branding for yourself in your region and also helps in you being recognised as a professional.</p>
                            </div>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    
                    <div class="col col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                        <div class="feature-box h-100 feature-box-left-icon bg-light-yellow feature-box-dark-hover bg-light-gray padding-4-rem-all lg-padding-3-half-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Sand-watch2 icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">Direct Customers</span>
                                <p>People who search for Interior designers or Architects on our website have either started their projects already or are almost ready to begin. This reduces your communication and conversion cycle.</p>
                            </div>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    <div class="col col-md-9 wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="feature-box h-100 feature-box-left-icon bg-light-yellow feature-box-dark-hover bg-light-gray padding-4-rem-all lg-padding-3-half-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Gear-2 icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-dark-gray d-block margin-10px-bottom alt-font font-weight-500">It's Free</span>
                                <p>Harrison does not ask you for any fees or registration charges. It's all about your credentials and how efficiently you have been working with your current customers. There may be reference/ credential verifications before you are enrolled.</p>
                            </div>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>

</section>
<!-- end section -->

<!-- start section -->
<section id="dealerform" class="wow animate__fadeIn bg-very-light-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                        <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we’ll be in touch soon!</span>
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray">Become a Dealer</h4>
                    </div>
                    <div class="col-12">
                        <!-- start contact form -->
                        <form class="row mt-2 needs-validation" method="Post" action="{{route('form.become-a-dealer.save')}}" novalidate>
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control " name="first_name" type="text" id="first-name"
                                        placeholder="{{__('First Name *')}}" value="{{ old('first_name') }}" required>
                                        
                                    @error('first_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control " name="last_name" type="text" id="last-name"
                                        placeholder="{{__('Last Name *')}}" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control " type="email" name="email" id="contact-email"
                                        placeholder="{{__('E-mail *')}}" value="{{ old('email') }}" required>
                                        
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control " type="text" name="phone" id="contact-tel"
                                        placeholder="{{__('Phone *')}}" value="{{ old('phone') }}" required>
                                        
                                    @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control " type="text" name="state" id="contact-state"
                                        placeholder="{{__('State *')}}" value="{{ old('state') }}" required>
                                        
                                    @error('state')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control " type="text" name="city" id="contact-city"
                                        placeholder="{{__('City')}}" value="{{ old('city') }}" required>
                                        
                                    @error('city')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6  ">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="address" id="address-text"
                                        placeholder="{{__('Your address...')}}">{{ old('address') }}</textarea>
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-6  ">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" id="message-text"
                                        placeholder="{{__('Write your message here...')}}">{{ old('message') }}</textarea>
                                    @error('message')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            @if ($setting->recaptcha == 1)
                            <div class="col-lg-12 mb-4">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                @php
                                $errmsg = $errors->first('g-recaptcha-response');
                                @endphp
                                <p class="text-danger mb-0">{{__("$errmsg")}}</p>
                                @endif
                            </div>
                            @endif

                            <div class="col text-left sm-margin-30px-bottom">
                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="coming-soon.php" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                            </div>
                            <div class="col text-center text-md-right">
                                <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0" type="submit"><span>{{ __('Send message') }}</span></button>
                            </div>
                        </form>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="big-section bg5-e">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-eight-bottom">
                <h6 class="alt-font text-extra-dark-gray font-weight-500">Sample Testimonials</h6>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <!-- start testimonial item -->
            <div class="col col-sm-8 md-margin-50px-bottom xs-margin-35px-bottom">
                <div class="testimonials testimonials-style-01 bg-light-gray padding-3-half-rem-all pr-0 lg-padding-3-rem-all sm-padding-4-rem-all">
                    <i class="testimonials-quotes ti-quote-left icon-large text-fast-blue"></i>
                    <div class="testimonials-bubble text-extra-medium d-block w-75 lg-w-85">Their team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for all your hard work.</div>
                    <div class="w-100 h-1px bg-medium-gray margin-35px-tb lg-margin-30px-tb"></div>
                    <div class="author">
                        <img class="rounded-circle w-60px h-60px margin-15px-right" src="{{ asset('assets/harrison/images/avtar27.jpg') }}" alt="">
                        <div class="d-inline-block align-middle">
                            <span class="alt-font text-medium font-weight-500 line-height-20px text-extra-dark-gray d-block text-uppercase">Shoko Mugikura</span>
                            <span class="d-block text-small text-uppercase">Graphic designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonial item -->
            <!-- start testimonial item -->
            <div class="col col-sm-8 md-margin-50px-bottom xs-margin-35px-bottom">
                <div class="testimonials testimonials-style-01 bg-light-gray padding-3-half-rem-all pr-0 lg-padding-3-rem-all sm-padding-4-rem-all">
                    <i class="testimonials-quotes ti-quote-left icon-large text-fast-blue"></i>
                    <div class="testimonials-bubble text-extra-medium d-block w-75 lg-w-85">Trust us we looked for a very long time and wasted thousands of dollars testing other teams, freelancers, and outsource companies.</div>
                    <div class="w-100 h-1px bg-medium-gray margin-35px-tb lg-margin-30px-tb"></div>
                    <div class="author">
                        <img class="rounded-circle w-60px h-60px margin-15px-right" src="{{ asset('assets/harrison/images/avtar28.jpg') }}" alt="">
                        <div class="d-inline-block align-middle">
                            <span class="alt-font text-medium font-weight-500 line-height-20px text-extra-dark-gray d-block text-uppercase">Jonsan Donner</span>
                            <span class="d-block text-small text-uppercase">Sales manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonial item -->
            <!-- start testimonial item -->
            <div class="col col-sm-8">
                <div class="testimonials testimonials-style-01 bg-light-gray padding-3-half-rem-all pr-0 lg-padding-3-rem-all sm-padding-4-rem-all">
                    <i class="testimonials-quotes ti-quote-left icon-large text-fast-blue"></i>
                    <div class="testimonials-bubble text-extra-medium d-block w-75 lg-w-85">This is an excellent company! I personally enjoyed the energy and the professional support the whole team gave to us into creating website.</div>
                    <div class="w-100 h-1px bg-medium-gray margin-35px-tb lg-margin-30px-tb"></div>
                    <div class="author">
                        <img class="rounded-circle w-60px h-60px margin-15px-right" src="{{ asset('assets/harrison/images/avtar29.jpg') }}" alt="">
                        <div class="d-inline-block align-middle">
                            <span class="alt-font text-medium font-weight-500 line-height-20px text-extra-dark-gray d-block text-uppercase">Mackangy Rose</span>
                            <span class="d-block text-small text-uppercase">Creative director</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonial item -->
        </div>
    </div>
</section>
<!-- end section -->
@endsection
