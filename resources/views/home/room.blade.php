<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
        </div>


        <div class="row g-4">
            @foreach ($room as $rooms)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" style="height: 200px; width: 400px" src="room/{{$rooms->image}}" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">₱ {{$rooms->price}}</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{$rooms->room_title}}</h5>
                           
                        </div>
                        
                        <p class="text-body mb-3">{!! Str::limit($rooms->description,100)!!}</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{url('room_details',$rooms->id)}}">Room Detail</a>
    
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
           
        </div>
    </div>
</div>