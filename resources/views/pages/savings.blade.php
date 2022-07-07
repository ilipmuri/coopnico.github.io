
@extends('pages.master')

@section('content')

<style>
    .pages-savings-container{
        position: relative;
        padding: 0;
        font-family: Roboto,sans-serif;
    }
    #header-image{
        width: 100vw;
        height: 70vh;
    }
    .image-text{
        position: absolute;
        bottom: 25vh;
        left: 100px;
        color: white;
    }
    .second-carousel{
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: #f3f3f3;
    }
    .save-item{
        position: relative;
        padding: 70px;
    }
    #save-item-image{
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }
    .save-item:hover{
        padding: 25px;
        transition: all 0.3s ease-in-out 0s;
    }
    .save-item:hover img{
        opacity: 0.3;
        transition: all 0.3s;
    }
    .save-item:hover .overlay{
        opacity: 1;
        background: #fff 0.3;
        transition: all 0.3s;
    }
    .carousel-item{
        height: 70vh;
        background-size: cover;
    }

    /* ACCORDION CSS */
    .accordion{
        width: 90%;
        max-width: 1000px;
        margin: 2rem auto;
    }
    .accordion-item{
        background-color: #fff;
        color: #111;
        margin: 1rem 0;
        border-radius: 0.5rem;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.25);
    }
    .accordion-item-header{
        padding: 0.5rem 3rem 0.5rem 1rem;
        min-height: 3.5rem;
        line-height: 1.25rem;
        font-weight: bold;
        display: flex;
        align-items: center;
        position: relative;
        cursor: pointer;
    }
    .accordion-item-header::after{
        /* content: "\002b"; */
        content: "\25be";
        font-size: 2rem;
        position: absolute;
        right: 1rem;
        transition: transform 0.2s ease-in-out;
    }
    .accordion-item-header.active::after{
        /* content: "\2212"; */
        transform: rotate(-180deg);
    }
    .accordion-item-body{
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease-in-out;
    }
    .accordion-item-body-content{
        padding: 1rem;
        line-height: 1.5rem;
        border-top: 2px solid;
        border-color: #162;
        /* border-image: linear-gradient(to right, transparent, #162, transparent) 1; */
        /* border-image: #162; */
    }
    /* .accordion-item-header.active + .accordion-item-body{
        max-height: 500px;
    } */


</style>

<div class="container-fluid pages-savings-container">
    <img src="{{ asset('images/image2.jpg') }}" alt="" id="header-image">
    <div class="image-text">
        <h1 style="font-weight:600;font-size:48px;">Savings</h1>
        <p style="font-size:18px;">Save your money with us at NICO.</p>
    </div>
</div>



<div class="accordion">
    <div class="accordion-item">
        <div class="accordion-item-header">
            Regular Savings
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            Time Deposit
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            Double Your Money in 10 years
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            Millenium Savings
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            Family Savers Club
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            Youth Savers Club
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            Tricycle Driver's Savings Program (TDSP)
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            Health Savings Program
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <div class="accordion-item-header">
            Laboratory Cooperative
        </div>
        <div class="accordion-item-body">
            <div class="accordion-item-body-content">
                Lorem ipsum dolors sit amet consectetur adipisicing elit. Distinctio rerum quas voluptates, voluptate qui consequuntur debitis illum blanditiis commodi? Voluptatem a aliquid eos sapiente eveniet, doloribus veritatis placeat quibusdam modi!
            </div>
        </div>
    </div>
</div>
<!--
<div class="container-fluid second-carousel" id="second-carousel">
    <div class="container">
        <div id="carousel-loans" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/image1.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Regular Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Salary Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Emergency Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image1.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Housing Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Car Financing Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Benefit Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image1.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Petty Cash Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Credit Line</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Instant Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image1.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Within Share Capital Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image2.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Standby Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/image3.jpg') }}" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="save-item-header">Pension Loan</h5>
                        <p id="save-item-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas, dicta consequuntur mollitia consectetur quod perferendis a eius suscipit quia autem aperiam fugit aliquid voluptatibus rem. Aliquid nobis suscipit perspiciatis exercitationem?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<script>
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

    accordionItemHeaders.forEach(accordionItemHeader => {
        accordionItemHeader.addEventListener("click", event =>{
            accordionItemHeader.classList.toggle("active");
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if(accordionItemHeader.classList.contains("active")){
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            }
            else{
                accordionItemBody.style.maxHeight = 0;
            }
        })
    });
</script>

@endsection
