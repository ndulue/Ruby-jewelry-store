<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!--== Head Area Start ==-->
@section('head')
Success
@endsection
@include('partials.head')
<!--== Head Area Start ==-->

<body>
<!--== Header Area Start ==-->
@include('partials.header')
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
@section('title')
Success
@endsection
@include('partials.title')
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  m-auto text-center">
                <div class="error-page-content-wrap">
                    <h2>Success</h2>
                    <h3>Thank you</h3>
                    @if (session()->has('success'))
                    <p>{{session()->get('success')}}</p>
                    @else
                        {{ URL::previous() }}
                    @endif
                    <a href="{{route('index.layout')}}" class="btn-add-to-cart">Back to Home Page</a>
                </div>
            </div>
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
