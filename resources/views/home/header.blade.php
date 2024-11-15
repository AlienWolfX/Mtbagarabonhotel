<div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <!-- Left Logo and Brand Section -->
        <div class="col-lg-3 bg-dark d-none d-lg-flex align-items-center justify-content-center">
            <a href="{{url('homes')}}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center" >
                <!-- Logo Image -->
                <div>
                     <img src="/img/logo.png" alt="Logo" class="logo-img me-2">
                </div>
                <!-- Brand Name -->
                <div>
                      <h1 class="m-0 text-primary text-uppercase hotel-name">Mt.Bagarabon<br>Hotel</h1>  
               </div>                    
            </a>
        </div>

        <!-- Right Navbar and Links -->
        <div class="col-lg-9">
            <!-- Contact Information -->
           
              

            <!-- Navbar Links Section -->
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-primary text-uppercase hotel-name-mobile">Mt.Bagarabon Hotel</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0 text-center">
                        <a href="{{url('homes')}}" class="nav-item nav-link">Home</a>
                        <a href="{{url('about_us')}}" class="nav-item nav-link">About</a>
                        <a href="{{url('our_rooms')}}" class="nav-item nav-link">Rooms</a>
                        <a href="{{url('services')}}" class="nav-item nav-link">Services</a>           
                        <a href="{{url('hotel_gallery')}}" class="nav-item nav-link">Gallery</a>
                        <a href="{{url('my_bookings')}}" class="nav-item nav-link">My Booking</a>      
                        <a href="{{url('contact_us')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav">
                        @if (Route::has('login'))
                            @auth
                                <form style="padding: 20px" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <input class="btn btn-success" type="submit" value="Logout">
                                </form>
                            @else
                                <a href="{{url('/login')}}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Login</a>
                                <a href="{{url('/register')}}" class="nav-item nav-link"><i class="fa fa-user-plus me-2"></i>Register</a>
                            @endauth
                        @endif 
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Styling for Logo and Brand Alignment -->
<style>
    /* Logo Image Styling */
    .logo-img {
        width: 50px; /* Adjust size as needed */
        height: auto;
        margin-left:auto;
    }

    /* Brand Text Styling */
    .hotel-name {
        font-size: 1.5rem;
        line-height: 1.2;
        text-align: center;
    }

    .hotel-name-mobile {
        font-size: 1.2rem;
        line-height: 1.2;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 200px;
    }

    /* Active Link Color */
    .navbar-nav .nav-link.active, .navbar-nav .nav-link:focus {
        color: orange !important;
    }

    /* Adjust font size for larger screens */
    @media (min-width: 992px) {
        .hotel-name {
            font-size: 1.8rem;
        }
    }

    /* Adjust navbar brand size for smaller screens */
    @media (max-width: 991px) {
        .navbar-brand {
            max-width: 70%;
        }
    }
</style>

<!-- JavaScript to Set Active Link Based on URL -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const currentUrl = window.location.href;

        navLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    });
</script>  
