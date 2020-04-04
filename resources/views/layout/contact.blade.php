<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!--== Head Area Start ==-->
@section('head')
Contact
@endsection
@include('partials.head')
<!--== Head Area Start ==-->

<body>
<!--== Header Area Start ==-->
@include('partials.header')
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
@section('title')
Contact
@endsection
@include('partials.title')
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <!-- Contact Page Content Start -->
            <div class="col-lg-12">
                <!-- Contact Method Start -->
                <div class="contact-method-wrap">
                    <div class="row">
                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-map-marker"></i></span>
                                <div class="method-info">
                                    <h3>Street Address</h3>
                                    <p>Address : No 40 Baria Sreet 133/2 <br> NewYork City, NY, United States.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-phone"></i></span>
                                <div class="method-info">
                                    <h3>Phone Number</h3>
                                    <a href="tel:0(1234)56789012">234(70) 668 18156</a>
                                    <a href="tel:0(1234)56789012">234(90) 284 95997</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-envelope-open-o"></i></span>
                                <div class="method-info">
                                    <h3>Number Fax</h3>
                                    <p>+234 902 849 5997 <br> +234 706 681 8156</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->

                        <!-- Single Method Start -->
                        <div class="col-lg-3 col-sm-6 text-center">
                            <div class="contact-method-item">
                                <span class="method-icon"><i class="fa fa-envelope"></i></span>
                                <div class="method-info">
                                    <h3>Email Address</h3>
                                    <a href="mailto:your@email.here">iamemekandulue@gmail.com</a>
                                    <a href="mailto:your@email.here">mail2emekandulue@yahoo.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Method End -->
                    </div>
                </div>
                <!-- Contact Method End -->
            </div>
            <!-- Contact Page Content End -->
        </div>

        <div class="row">
            <!-- Contact Form Start -->
            <div class="col-lg-9 m-auto">
                <div class="contact-form-wrap">
                    <h2>Request a Quote</h2>

                    <form id="contact_form" method="POST" action="{{route('contact.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="first_name" placeholder="First Name *" required/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="last_name" placeholder="Last Name *" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="email" name="email_address" placeholder="Email Address *" required/>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <input type="text" name="contact_subject" placeholder="Subject *" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-input-item">
                                    <textarea name="message" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                                </div>

                                <div class="single-input-item text-center">
                                    <button type="submit" name="submit" class="btn-add-to-cart">Send Meassage</button>
                                </div>

                                <!-- Form Notification -->
                                <div class="form-messege">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Contact Form End -->
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Footer Area Start -->
@include('partials.footer')
<!-- Footer Area End -->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
@include('partials.js-script')
</body>

</html>
