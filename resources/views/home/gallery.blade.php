      <!-- Add these in your layout file -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
      
      <!-- Gallery HTML -->
      <div class="container-xxl py-5">
          <div class="container">
              <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                  <h6 class="section-title text-center text-primary text-uppercase">Our Gallery</h6>
                  <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Gallery</span></h1>
              </div>
              
              <div class="row g-4">
                  @foreach($gallery as $item)
                  <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="gallery-item">
                          <a href="{{ asset('gallery/' . $item->image) }}" data-lightbox="gallery" data-title="Hotel Image">
                              <img src="{{ asset('gallery/' . $item->image) }}" alt="Hotel Image"
                                   style="height: 200px!important; width: 300px!important;"
                                   class="img-fluid rounded shadow">
                          </a>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>
      
      <style>
          /* Gallery item hover effect */
          .gallery-item {
              overflow: hidden;
              cursor: pointer;
          }
          
          .gallery-item img {
              transition: transform 0.3s ease;
          }
          
          .gallery-item:hover img {
              transform: scale(1.05);
          }
          
          /* Customize the close button */
          .lb-close {
              position: absolute !important;
              right: 10px !important;
              top: 10px !important;
              width: 32px !important;
              height: 32px !important;
              background: rgba(255, 255, 255, 0.8) !important;
              border-radius: 50% !important;
              padding: 5px !important;
              cursor: pointer !important;
          }
          
          /* X icon styling */
          .lb-close:before,
          .lb-close:after {
              content: '';
              position: absolute;
              width: 20px;
              height: 2px;
              background-color: #000;
              top: 15px;
              left: 6px;
          }
          
          .lb-close:before {
              transform: rotate(45deg);
          }
          
          .lb-close:after {
              transform: rotate(-45deg);
          }
          
          /* Lightbox overlay customization */
          .lb-overlay {
              background-color: rgba(0, 0, 0, 0.9) !important;
          }
          
          .lb-data .lb-close {
              opacity: 1 !important;
          }
          
          .lb-nav a.lb-prev,
          .lb-nav a.lb-next {
              opacity: 0.8;
          }
          
          /* Make sure the close button is always visible */
          .lb-data .lb-close:hover {
              opacity: 0.8 !important;
          }
      </style>
      
      <!-- Initialize lightbox -->
      <script>
          lightbox.option({
              'resizeDuration': 200,
              'wrapAround': true,
              'showImageNumberLabel': false,
              'fadeDuration': 200
          });
      </script>