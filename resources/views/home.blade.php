
@extends('pages.master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">             

<!-- SLIDER SECTION -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('images/slider/image1.jpg') }}" class="d-block w-100" alt="Image 1">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{ asset('images/slider/image2.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{ asset('images/slider/image3.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- SECOND SECTION * OUR PRODUCTS -->
<div class="container-fluid container-second-section">  
    <div class="container ">
        <div class="row text-center mt-5">
            <h2>Our Products</h2>
            <p class="p-header" style="margin-top:30px; margin-bottom:30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quas amet quos, optio ad quia laborum ullam, aspernatur, temporibus possimus provident esse asperiores quasi autem excepturi iusto doloremque dignissimos! Quaerat!</p>
        </div>
        <div class="row">
            <div class="col-md-3" style="padding: 20px;">
                <a href="/loans" style="text-decoration:none;color:black;">
                    <div class="card second-section-card">
                        <div class="row card-row-container">
                            <div class="col-md-4 card-image-container">
                                <img src="{{ asset('images/icons/loans.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 card-text-container">
                                <div class="card-body">
                                    <h5 class="card-title">Loans</h5>
                                    <p class="card-text">Borrow money from NICO.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3" style="padding: 20px;">
                <a href="/savings" style="text-decoration:none;color:black;">
                    <div class="card second-section-card">
                        <div class="row card-row-container">
                            <div class="col-md-4 card-image-container">
                                <img src="{{ asset('images/icons/savings.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 card-text-container">
                                <div class="card-body">
                                    <h5 class="card-title">Savings</h5>
                                    <p class="card-text">Save money with us at NICO.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3" style="padding: 20px;">
                <a href="/agriproductstrading" style="text-decoration:none;color:black;">
                    <div class="card second-section-card">
                        <div class="row card-row-container">
                            <div class="col-md-4 card-image-container" style="padding-top: 22px;">
                                <img src="{{ asset('images/icons/agri.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 card-text-container">
                                <div class="card-body">
                                    <h5 class="card-title">Agri Products Trading</h5>
                                    <p class="card-text">Trade your agricultural products with NICO.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3" style="padding: 20px;">
                <a href="/socialservice" style="text-decoration:none;color:black;">
                    <div class="card second-section-card">
                        <div class="row card-row-container">
                            <div class="col-md-4 card-image-container">
                                <img src="{{ asset('images/icons/social.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 card-text-container">
                                <div class="card-body">
                                    <h5 class="card-title">Social Service</h5>
                                    <p class="card-text">Social Service plans of NICO.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- THIRD SECTION * DOWNLOADABLE FORMS -->
<div class="container-fluid container-third-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 dlforms-image-container" style="padding: 30px;">
                <img src="{{ asset('images/image3.jpg') }}" alt="">
            </div>
            <div class="col-md-6 dlforms-text-container">
                <h2>Downloadable Forms</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, quaerat! Culpa esse est nesciunt a, vel aperiam, alias natus recusandae temporibus vitae repellendus repudiandae ipsam tenetur nisi commodi fugit accusantium!</p>
                <a class="nico-btn-gradient" href="/downloadableforms" style="font-size: 16px;">Get Forms</a>
            </div>
        </div>
    </div>
</div> 

<!-- FOURTH SECTION * NEWS AND UPDATES -->
<div class="container-fluid container-fourth-section">
    <div class="container">
        <div class="row" style="padding:30px;">
            <h3 class="topic-header">News and Updates</h2>
            <hr>
            <div class="row row-cols-md-4 g4">
                <a class="news-card" href="/newsandupdates" style="text-decoration:none; color:black;">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('images/news/news1.jpg') }}" class="card-img-top" alt="..." style="height:25vh;">
                            <div class="card-body">
                                <h5 class="card-title">CDA Director Ruben L. Cunanan at NICO</h5>
                                <p class="card-text">The Cooperative Development Authority (CDA) is a proactive and responsive lead government...</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="news-card" href="/newsandupdates" style="text-decoration:none; color:black;">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('images/news/news2.jpg') }}" class="card-img-top" alt="..." style="height:25vh;">
                            <div class="card-body">
                                <h5 class="card-title">NICO bagged 4 MCN Awards!</h5>
                                <p class="card-text">May 14, 2022 at Dusit Thani Davao City - The Nabunturan Integrated Cooperative (NICO) received the most unexpected awards of the 17th...</p>
                            </div>
                        </div>
                    </div>
                </a>    
                <a class="news-card" href="/newsandupdates" style="text-decoration:none; color:black;">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('images/image3.jpg') }}" class="card-img-top" alt="..." style="height:25vh;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="news-card" href="/newsandupdates" style="text-decoration:none; color:black;">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/icons/plus.svg') }}" class="card-img-top" alt="..." style="height:25vh; 
                                                                                                              padding: 40px;
                                                                                                              margin-bottom: 30px;
                                                                                                              color: #ff0;">
                        <div class="card-body">
                            <h5 class="card-title text-center">View More</h5>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- FIFTH SECTION * ABOUT US -->
<div class="container-fluid container-fifth-section">
    <div class="container">
        <div class="row" style="padding:30px;">
            <div class="col-md-2 text-center news-image-container">
                <img src="{{ asset('images/icons/brand-logo-final.png') }}" alt="" style="height:25vh;">
            </div>  
            <div class="col-md-2 text-center news-image-container">
                <img src="{{ asset('images/icons/nico-logo.png') }}" alt="" style="height:25vh;">
            </div>  
            <div class="col-md-8 news-text-container">
                <p>The Nabunturan Integrated Cooperative (NICO) started out as two separate cooperatives, the Nabunturan Barangay Credit Cooperative Inc., and the Nabunturan Consumers Cooperative Inc. Each has its own set of officers, constitution and by-laws. <br><br>The Nabunturan Barangay Credit Cooperative Inc. was initiated in 1965 by Rev. Fr. John Lennon, a Maryknoll priest, the Parish priest at that time, to respond to farmer’s as well as active in the church to help farmers affected by rat infestation.... <a class="link-know-more" href="/aboutus" style="text-decoration:none;">know more about NICO</a>.</p>
            </div>
        </div>
    </div>
</div>

<!-- SIXTH SECTION * CUSTOMER SERVICE -->
<div class="container-fluid container-sixth-section" id="sixth-section">
    <div class="container">
        <div class="row" style="padding: 30px;">
            <div class="row mb-4">
                <h2>Customer Service</h2>
                <hr>
            </div>
            <div class="row ms-1 d-flex">
                <div class="col-md-3 text-center">
                    <a href="/branches" style="text-decoration:none;
                                               color:black;">
                        <div class="card cs-card sixth-section-card" style="width: 13rem;">
                            <div class="card-body card-container text-center">
                                <img src="{{ asset('images/icons/branches.png') }}" alt="" style="height:5vw;
                                                                                                    margin-bottom:18px;">
                                <h5 class="card-title">NICO Branches</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 border-left faq-container">
                    <h4>Frequently Asked Questions</h4>
                    <div class="row mb-2 ms-1"><a class="nico-btn-plain" href="">How to become a Member?</a><br></div>
                    <div class="row mb-2 ms-1"><a class="nico-btn-plain" href="">What are the benefits of being a Member?</a><br></div>
                    <div class="row ms-1"><a class="nico-btn-plain" href="">How to apply for a loan?</a></div>
                </div>
                <div class="col-md-5 border-left">
                    <h4>Write to us</h4>
                    <div class="row">
                        <div class="col-md-12 pe-4">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        <!-- </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Phone:</strong>
                                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <strong>Subject:</strong>
                                <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Message:</strong>
                                <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
