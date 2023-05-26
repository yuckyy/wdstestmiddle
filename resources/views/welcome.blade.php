<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container bd-subnavbar py-2">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Logo.svg') }}" alt="Khan Tech">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Book now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6" style="padding-right: 0px!important;">
                    <img src="{{ asset('img/Pic.svg') }}" alt="Khan Tech" class="img-fluid">
                </div>
                <div class="col-md-6" style="padding-left: 0px!important;background-color: #F5F5F5">
                    <div class="container without-p-r pr-0" >
                        <div class="mt-4">
                            <h6 class="text-primary">Pharmaceuticals</h6>
                            <h4 class="font-weight-medium">A Sure Way To Get Rid Of Your Back</h4>
                            <h4 class="font-weight-medium">Ache Problem</h4>
                            <span class="text-dark">If you have tried everything, but still seem to suffer from snoring, don’t give up. Before turning to surgery, consider shopping for anti-snore devices. These products do not typically require a prescription, are economically priced and may just be the answer that you are looking for. However, as is the case when shopping for anything, there are a lot of anti-snore devices out there and…</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
            <h2 class="">Our Latest News</h2>
            <div class="mt-3 news-item"
                 style="border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/anti-cellulite-massage-luxury-spa.jpg') }});background-size: cover;background-position: center center;">
                <h5 style="color:white;font-weight: medium;">Basic Swedish Back Massage Techniques</h5>
                <small style="font-weight: medium; color:white">28 Feb 2021</small>
            </div>
            <div class="mt-3 news-item"
                 style="border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/close-up-man-writing-code-laptop.jpg') }});background-size: cover;background-position: center center;">
                <h5 style="color:white;font-weight: medium;">How to Learn Coding for Beginners</h5>
                <small style="font-weight: medium; color:white">28 Feb 2021</small>
            </div>
            <div class="mt-3 news-item"
                 style="border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/side-view-cropped-unrecognizable-business-people-working-common-desk.jpg') }});background-size: cover;background-position: center center;">
                <h5 style="color:white;font-weight: medium;">Google’s Influence Over Think Tanks</h5>
                <small style="font-weight: medium; color:white">28 Feb 2021</small>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5 pt-5" style="background-color: #F5F5F5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 text-center mt-5">
                <h1>Testimonials</h1>
            </div>
            @foreach ($reviews as $review)
            <div class="col-2 col-sm-6 col-md-3 mt-5 five-columns ">
                <div class="testimonial-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <span class="testimonial-name">{{$review->employee}}</span><br>
                                <span class="testimonial-position">{{$review->company}}</span><br>
                                <span class="testimonial-text">{{$review->review}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <div class="">
                            <img class="testimonial-avatar"
                                 src="{{asset('img/d5ccbad2112445bc5336399da1f1aefa.png')}} ">
                        </div>
                    </div>
                    <div class="col-9 ">
                        <span class="testimonial-name">{{$review->reviewer}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="pagination">
                    {{ $reviews->links('pagination::default', ['paginator' => $reviews->withQueryString()->onEachSide(1)]) }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #434343">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-3 mt-5">
                <span class="footer-title">Departments</span>
            </div>
            <div class="col-3 mt-5">
                <span class="footer-title">Quick Links</span>
            </div>
            <div class="col-3 mt-5">
                <span class="footer-title">Head Office</span>
            </div>
            <div class="col-3 ">
                a
            </div>
        </div>
    </div>

</div>

</body>
</html>
