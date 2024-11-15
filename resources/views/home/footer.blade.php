<br><br><br><br><br><br>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="bg-primary">
                    <h3 class="text-white text-uppercase mb-2">Mt.Bagarabon Hotel</h3>
                   
                </div>
            </div>
            <div class="col-lg-3">
                <h6 class="text-primary text-uppercase mb-2">Contact</h6>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Brgy Mabua, Surigao City</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0967 213 4670</p>
                <div class="d-flex pt-2">
                    <a class="btn-social" href="https://www.facebook.com/MtBagarabon"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-social" href="https://www.instagram.com/mtbagarabonph/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-primary text-uppercase mb-2">Company</h6>
                        <a class="btn-link" href="{{url('about_us')}}">About Us</a>
                        <a class="btn-link" href="{{url('contact_us')}}">Contact Us</a>
                       
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-primary text-uppercase mb-2">Services</h6>
                        <a class="btn-link" href="#">Food & Restaurant</a>
                        <a class="btn-link" href="#">Spa & Fitness</a>
                        <a class="btn-link" href="#">Sports & Gaming</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyright">
            <div class="row">
                <div class="col-md-6">
                    &copy; <a href="#" style="color: #fff;">Mt.Bagarabon Hotels</a>, All Rights Reserved.
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <div class="footer-menu">
                        <a href="{{url('homes')}}">Home</a>
                        <a href="#">Cookies</a>
                        <a href="#">Help</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .footer {
        background-color: #0f172a;
        color: #fff;
        padding: 2rem 0;
    }

    .container {
        max-width: 2500px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin: -10px;
    }

    .col-md-6, .col-lg-4, .col-lg-3, .col-lg-5 {
        padding: 10px;
    }

    .col-lg-4 { width: 33.33%; }
    .col-lg-3 { width: 25%; }
    .col-lg-5 { width: 41.66%; }

    .bg-primary {
        background-color: #0d6efd;
        padding: 15px;
        border-radius: 5px;
    }

    .text-primary { color: #0d6efd; }
    .text-white { color: #fff; }
    .text-uppercase { text-transform: uppercase; }

    .mb-2 { margin-bottom: 0.5rem; }
    .mb-3 { margin-bottom: 0.75rem; }
    .mb-4 { margin-bottom: 1rem; }

    .btn-link {
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 0.25rem 0;
    }

    .btn-social {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        border: 1px solid #fff;
        border-radius: 50%;
        margin-right: 0.5rem;
        color: #fff;
        text-decoration: none;
    }

    .copyright {
        border-top: 1px solid rgba(255,255,255,0.1);
        padding-top: 1rem;
        margin-top: 1rem;
        font-size: 0.9rem;
    }

    .footer-menu a {
        color: #fff;
        text-decoration: none;
        margin-left: 1rem;
    }

    @media (max-width: 768px) {
        .col-lg-3, .col-lg-4, .col-lg-5 {
            width: 100%;
        }
        
        .row {
            margin: -5px;
        }
        
        .col-md-6 {
            padding: 5px;
        }
    }
</style>