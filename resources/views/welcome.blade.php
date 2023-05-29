<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('fontawesome/all.min.css') }}">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<style>
    .news-item {
        padding: 16px 32px 16px 32px;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/anti-cellulite-massage-luxury-spa.jpg') }});
        background-size: cover;
        background-position: center center;
    }

    .news-item:hover {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
        background-size: cover;
        background-position: center center;
        background-blend-mode: screen;
        background-size: cover;
        background-color: #0880AE !important;
    }
</style>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container bd-subnavbar ">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Logo.svg') }}" alt="Khan Tech">
        </a>
        <div class="brand-text ">
            <span class="brand-text-top">Need Help?</span><br>
            <a class="brand-text-bottom" style="text-decoration: none" href="tel:5145439936">(514) 543-9936</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">

                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li class="dropdown position-static">
                                    <a class="dropdown-item dropdown-toggle " href="#" id="multilevelDropdownMenu1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multilevel Action 1</a>
                                    <ul class="dropdown-menu dropdown-menu-special"style="right: -100%;" aria-labelledby="multilevelDropdownMenu1">
                                        <li style="border-top: none;"><a class="dropdown-item" href="#">Action</a></li>

                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Book now</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Contact</a>
                </li>
                <div class="brand-text2">
                    <span class="brand-text-top">Need Help?</span><br>
                    <a class="brand-text-bottom" style="text-decoration: none" href="tel:5145439936">(514) 543-9936</a>
                </div>
            </ul>
        </div>
    </div>
</nav>
<div class="container margin-top">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 img-fluid" >
                    <img src="{{ asset('../img/Pic.svg') }}" alt="Khan Tech" class="img-fluid d-none d-lg-block">
                    <img src="{{ asset('../img/beautiful-girl-is-engaged-yoga-studio (1).jpg') }}" alt="Khan Tech" class="img-fluid d-block d-lg-none">
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0" style="padding-left: 0px!important;background-color: #F5F5F5">
                    <div class="container without-p-r pr-0">
                        <div class="mt-4">
                            <h6 class="text-primary">Pharmaceuticals</h6>
                            <h4 class="font-weight-medium">A Sure Way To Get Rid Of Your Back</h4>
                            <h4 class="font-weight-medium">Ache Problem</h4>
                            <span class="text-dark">If you have tried everything, but still seem to suffer from snoring, don’t give up. Before turning to surgery, consider shopping for anti-snore devices. These products do not typically require a prescription, are economically priced and may just be the answer that you are looking for. However, as is the case when shopping for anything, there are a lot of anti-snore devices out there and…</span><br><br><br>
                            <small class="" style="color: #727272">28 Feb 2021</small><small style="color: #0880AE"> Jim Sullivan</small><i class="fa-regular fa-clock" style="margin-left:30px; font-size: small"></i><small style="color: #727272"> 6 min read</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
            <h2 class="">Our Latest News</h2>
            <div class="mt-3 news-item"
                 style="border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/anti-cellulite-massage-luxury-spa.jpg') }});background-size: cover;background-position: center center;">
                <h5 class="text-white">Basic Swedish Back Massage Techniques</h5>
                <small class="text-white">28 Feb 2021</small>
            </div>
            <div class="mt-3 news-item"
                 style="border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/close-up-man-writing-code-laptop.jpg') }});background-size: cover;background-position: center center;">
                <h5 class="mt-3 text-white">How to Learn Coding for Beginners</h5>
                <small class="text-white">28 Feb 2021</small>
            </div>
            <div class="mt-3 news-item"
                 style="border-radius: 0px;padding: 16px 32px 16px 32px;background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{ asset('img/side-view-cropped-unrecognizable-business-people-working-common-desk.jpg') }});background-size: cover;background-position: center center;">
                <h5 class="mt-3 text-white" >Google’s Influence Over Think Tanks</h5>
                <small class="text-white">28 Feb 2021</small>
            </div>
        </div>
    </div>
</div>
@if (!$reviews->isEmpty())
    <div class="container-fluid mt-5 pt-5" style="background-color: #F5F5F5">
        <div class="container ">
            <div class="row justify-content-between">
                <div class="col-12 text-center mt-5">
                    <h1>Testimonials</h1>
                </div>
                @foreach ($reviews as $review)
                    <div class="col-12 col-sm-6 col-md-6 mt-5 five-columns ">
                        <div class="testimonial-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <span class="testimonial-name">{{$review->employee}}</span><br>
                                        <span class="testimonial-position">{{$review->company}}</span><br>
                                        <span class="testimonial-text">{{$review->review}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="square">
                            <div class="diagonal-border-square"></div>
                        </div>
                        <div class="diagonal-gradient-square"></div>
                        <div class="border-div"></div>

                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="">
                                    <img class="testimonial-avatar"
                                         src="{{asset('img/d5ccbad2112445bc5336399da1f1aefa.png')}} ">
                                </div>
                            </div>
                            <div class="col-9 ">
                                <span class="testimonial-name">{{$review->reviewer}}</span><br>
                                @php
                                    $rating = $review->rating;
                                    $maxRating = 5;
                                    $fullStars = floor($rating);
                                    $halfStar = ($rating - $fullStars) >= 0.5;
                                @endphp

                                <span class="rating">
                            @for ($i = 0; $i < $fullStars; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor

                                    @if ($halfStar)
                                        <i class="fas fa-star-half-alt"></i>
                                    @endif

                                    @for ($i = ceil($rating); $i < $maxRating; $i++)
                                        <i class="far fa-star"></i>
                                    @endfor
                        </span>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="pagination">
                        {{ $reviews->links('pagination::default', ['paginator' => $reviews->withQueryString()->onEachSide(1)]) }}
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
@else
    <br>
@endif

<div class="container-fluid " style="background-color: #434343">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 mt-5">
                <div class="mt-4">
                    <h5 class="text-white">Departments</h5>
                    <div class="mt-3">
                        <span class="text-light">Medical</span><br>
                        <span class="text-light">Pharmaceuticals</span><br>
                        <span class="text-light">Medical Equipment</span><br>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="mt-4">
                    <h5 class="text-white">Quick Links</h5>
                    <div class="mt-3">
                        <span class="text-light">What do we do?</span><br>
                        <span class="text-light">Our expertise</span><br>
                        <span class="text-light">Request an Appointment</span><br>
                        <span class="text-light">Book with a Specialist</span><br>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="mt-4">
                    <h5 class="text-white">Head Office</h5>
                    <div class="mt-3">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-map-marker-alt text-white me-2 mt-1"></i>
                            <a class="text-light" style="text-decoration: none" href="https://www.google.com/maps/search/?api=1&query=4517+Washington+Ave+Manchester+Kentucky+39495" target="_blank">4517 Washington Ave. Manchester, Kentucky 39495</a>
                        </div>
                        <div class="d-flex align-items-start">
                            <i class="fas fa-envelope text-white me-2 mt-1"></i>
                            <a class="text-light" style="text-decoration: none" href="mailto:darrell@mail.com">darrell@mail.com</a>
                        </div>
                        <div class="d-flex align-items-start">
                            <i class="fas fa-phone text-white me-2 mt-1"></i>
                            <span class="text-light">(671) 555-0110</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="mt-3">
                    <img src="{{ url('img/Frame 1.svg') }}" alt="Logo" class="img-fluid">
                    <div class="mt-3">
                        <span class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit tincidunt ut sed. Velit euismod integer convallis ornare eu.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid " style="background-color: #434343">
    <div class="container ">
        <div class="row justify-content-between ">
            <div class="col-3 mt-5 mb-5 ">
                <div class="mt-2">
                    <span class="footer-close-title ">©2021 All Rights Reserved</span><br>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="{{ asset('fontawesome/all.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('bootstrap/js/main.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
