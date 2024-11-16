<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-image-container">
                    <img class="d-block w-100" src="img/mtbagarabon.jpg" alt="Image">
                </div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Mt.Bagarabon</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Unwind in Paradise!</h1>
                        <a href="{{ url ('our_rooms')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInDown">Our Rooms</a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image-container">
                    <img class="d-block w-100" src="img/pool.jpg" alt="Image">
                </div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 ">Mt.Bagarabon</h6>
                        <h1 class="display-3 text-white mb-4 ">Unwind in Paradise!</h1>
                        <a href="{{url('our_rooms')}}" class="btn btn-primary py-md-3 px-md-5 me-3 ">Our Rooms</a>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<style>

.carousel-control-prev:hover,
.carousel-control-next:hover {
    background: none; /* Ensure no background on hover */
}

.carousel-image-container {
    height: 600px; /* Adjust this value as needed */
    overflow: hidden;
    position: relative;
}

.carousel-image-container img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
    object-fit: cover;
}

.carousel-caption {
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    left: 0;
    right: 0;
    bottom: 0;
    padding: 20px;
}

@media (max-width: 768px) {
    .carousel-image-container {
        height: 400px; /* Smaller height for mobile devices */
    }
}
</style>
