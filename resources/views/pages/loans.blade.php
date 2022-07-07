
@extends('pages.master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/loans.css') }}">

<div class="container-fluid pages-loans-container">
    <img src="{{ asset('images/image1.jpg') }}" alt="" id="header-image">
    <div class="image-text">
        <h1 style="font-weight:600;font-size:48px;">Loans</h1>
        <p style="font-size:18px;">Start your plans now with NICO loans.</p>
    </div>
</div>

<div class="container-fluid">
    <div class="container container-item">
        <div class="row">
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <h2>Regular Loan</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet minus sed sapiente praesentium iure. Quia unde facilis minus suscipit doloribus, dolores nobis ducimus corporis modi necessitatibus laboriosam saepe quas tempora.
                </p>
                <a href="#" class="nico-btn">Download Form</a>
            </div>
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="{{ asset('images/image2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container container-item">
        <div class="row">
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="{{ asset('images/image2.jpg') }}" alt="">
            </div>
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <h2>Salary Loan</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet minus sed sapiente praesentium iure. Quia unde facilis minus suscipit doloribus, dolores nobis ducimus corporis modi necessitatibus laboriosam saepe quas tempora.
                </p>
                <a href="#" class="nico-btn">Download Form</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container container-item">
        <div class="row">
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <h2>Emergency Loan</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet minus sed sapiente praesentium iure. Quia unde facilis minus suscipit doloribus, dolores nobis ducimus corporis modi necessitatibus laboriosam saepe quas tempora.
                </p>
                <a href="#" class="nico-btn">Download Form</a>
            </div>
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="{{ asset('images/image2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container container-item">
        <div class="row">
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="{{ asset('images/image2.jpg') }}" alt="">
            </div>
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <h2>Car Financing Loan</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet minus sed sapiente praesentium iure. Quia unde facilis minus suscipit doloribus, dolores nobis ducimus corporis modi necessitatibus laboriosam saepe quas tempora.
                </p>
                <a href="#" class="nico-btn">Download Form</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container container-item">
        <div class="row">
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <h2>Housing Loan</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet minus sed sapiente praesentium iure. Quia unde facilis minus suscipit doloribus, dolores nobis ducimus corporis modi necessitatibus laboriosam saepe quas tempora.
                </p>
                <a href="#" class="nico-btn">Download Form</a>
            </div>
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="{{ asset('images/image2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container container-item">
        <div class="row">
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="{{ asset('images/image2.jpg') }}" alt="">
            </div>
            <div class="div-item col-lg-6 col-md-6 col-sm-12 col-12">
                <h2>Instant Loan</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet minus sed sapiente praesentium iure. Quia unde facilis minus suscipit doloribus, dolores nobis ducimus corporis modi necessitatibus laboriosam saepe quas tempora.
                </p>
                <a href="#" class="nico-btn">Download Form</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row" style="padding:30px;">
            <h3 class="topic-header">Other LOAN Products</h2>
            <hr>
            <button class="pre-btn"><img src="{{ asset('images/controls/arrow.png') }}" alt=""></button>
            <button class="nxt-btn"><img src="{{ asset('images/controls/arrow.png') }}" alt=""></button>
            <div class="other-loan-products-container col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="other-loan-products-container">    
                        <a href="" class="other-loan-products">
                            <div class="other-loan-products-image-container">
                                <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                            </div>
                            <div class="other-loan-products-text-container">
                                <p class="other-loan-products-title">Instant Loan</p>
                                <p class="other-loan-products-subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                            </div>
                        </a>  
                    </div>
                    <div class="other-loan-products-container">    
                        <a href="" class="other-loan-products">
                            <div class="other-loan-products-image-container">
                                <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                            </div>
                            <div class="other-loan-products-text-container">
                                <p class="other-loan-products-title">Instant Loan</p>
                                <p class="other-loan-products-subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                            </div>
                        </a>  
                    </div>
                    <div class="other-loan-products-container">    
                        <a href="" class="other-loan-products">
                            <div class="other-loan-products-image-container">
                                <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                            </div>
                            <div class="other-loan-products-text-container">
                                <p class="other-loan-products-title">Instant Loan</p>
                                <p class="other-loan-products-subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                            </div>
                        </a>  
                    </div>
                    <div class="other-loan-products-container">    
                        <a href="" class="other-loan-products">
                            <div class="other-loan-products-image-container">
                                <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                            </div>
                            <div class="other-loan-products-text-container">
                                <p class="other-loan-products-title">Instant Loan</p>
                                <p class="other-loan-products-subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                            </div>
                        </a>  
                    </div>
                    <div class="other-loan-products-container">    
                        <a href="" class="other-loan-products">
                            <div class="other-loan-products-image-container">
                                <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                            </div>
                            <div class="other-loan-products-text-container">
                                <p class="other-loan-products-title">Instant Loan</p>
                                <p class="other-loan-products-subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                            </div>
                        </a>  
                    </div>
                    <div class="other-loan-products-container">    
                        <a href="" class="other-loan-products">
                            <div class="other-loan-products-image-container">
                                <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                            </div>
                            <div class="other-loan-products-text-container">
                                <p class="other-loan-products-title">Instant Loan</p>
                                <p class="other-loan-products-subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                            </div>
                        </a>  
                    </div>
                    <div class="other-loan-products-container">    
                        <a href="" class="other-loan-products">
                            <div class="other-loan-products-image-container">
                                <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                            </div>
                            <div class="other-loan-products-text-container">
                                <p class="other-loan-products-title">Instant Loan</p>
                                <p class="other-loan-products-subtitle">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                </p>
                            </div>
                        </a>  
                    </div>
                <!-- <a href="" class="other-loan-products">
                    <div class="other-loan-products-image-container">
                        <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                    </div>
                    <div class="other-loan-products-text-container">
                        <p class="other-loan-products-title">Benefit Loan</p>
                        <p class="other-loan-products-subtitle">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
                </a>   
                <a href="" class="other-loan-products">
                    <div class="other-loan-products-image-container">
                        <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                    </div>
                    <div class="other-loan-products-text-container">
                        <p class="other-loan-products-title">Petty Cash Loan</p>
                        <p class="other-loan-products-subtitle">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
                </a>  
                <a href="" class="other-loan-products">
                    <div class="other-loan-products-image-container">
                        <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                    </div>
                    <div class="other-loan-products-text-container">
                        <p class="other-loan-products-title">Credit Line</p>
                        <p class="other-loan-products-subtitle">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
                </a>  
                <a href="" class="other-loan-products">
                    <div class="other-loan-products-image-container">
                        <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                    </div>
                    <div class="other-loan-products-text-container">
                        <p class="other-loan-products-title">Within Share Capital Loan</p>
                        <p class="other-loan-products-subtitle">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
                </a>  
                <a href="" class="other-loan-products">
                    <div class="other-loan-products-image-container">
                        <img src="{{ asset('images/icons/timer-light.svg') }}" alt="">
                    </div>
                    <div class="other-loan-products-text-container">
                        <p class="other-loan-products-title">Pension Loan</p>
                        <p class="other-loan-products-subtitle">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
                </a>     -->
            </div>
        </div>
    </div>
</div>
<!-- <div class="container-fluid second-carousel" id="second-carousel">
    <div class="container">
        <div id="carousel-loans" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/image1.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Regular Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Salary Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Emergency Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image1.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Housing Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Car Financing Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Benefit Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image1.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Petty Cash Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Credit Line</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Instant Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image1.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Within Share Capital Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Standby Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="loan-item-header">Pension Loan</h5>
                        <p id="loan-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row loan-container">
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Regular Loan</h3>
                <a href="#second-carousel"><button type="button" data-bs-target="#carousel-loans" data-bs-slide-to="0">Learn More</button></a>
                <a href="#second-carousel"><button type="button" data-bs-target="#carousel-loans" data-bs-slide-to="0">Learn More</button></a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Salary Loan</h3>
                <a href="#" data-bs-target="#carousel-loans" data-bs-slide-to="1">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Emergency Loan</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Housing Loan</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Car Financing Loan</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Benefit Loan</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Petty Cash Loan</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Credit Line</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Instant Loan</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Within Share Capital Loan</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Standby Credit</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
        <div class="col-lg-3 loan-item">
            <img id="loan-item-image" src="{{ asset('images/image1.jpg') }}" alt="">
            <div class="overlay">
                <h3>Pension Loan</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
</div> -->


@endsection
