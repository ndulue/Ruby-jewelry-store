<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!--== Head Area Start ==-->
@section('head')
404
@endsection
@include('partials.head')
<!--== Head Area Start ==-->

<body>
<!--== Header Area Start ==-->
@include('partials.header')
<!--== Header Area End ==-->

<!--== Page Title Area Start ==-->
@section('title')
404
@endsection
@include('partials.title')
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  m-auto text-center">
                <div class="error-page-content-wrap">
                    <h2>404</h2>
                    <h3>PAGE NOT BE FOUND</h3>
                    <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is
                        temporarily unavailable.</p>
                    <div class="sidebar-search">
                        <form action="#">
                            <input type="search" placeholder="type Keyword"/>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <a href="index.html" class="btn-add-to-cart">Back to Home Page</a>
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
