<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        input {
            width: 100%;
        }
    </style>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        @include('home.header')
        <!-- Header End -->



        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>


                <div class="row g-4">

                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative" style="padding: 20px">
                                <img class="img-fluid" style="height: 300px; width: 800px" src="/room/{{$room->image}}"
                                    alt="">

                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h3 class="mb-0">{{$room->room_title}}</h3>
                                </div>

                                <p style="padding: 12px">{{$room->description}}</p>

                                <h6 style="padding: 12px">Free wifi : {{$room->wifi}}</h6>
                                <h6 style="padding: 12px">Room Type : {{$room->room_type}}</h6>
                                <h6 style="padding: 12px"> Price: ₱{{$room->price}}</h6>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <h1 style="font-size: 40px!important;">Book Room</h1>

                        @if ($errors)

                        @foreach ($errors->all() as $errors)

                        <li style="color:red">{{$errors}}</li>

                        @endforeach

                        @endif

                        <form action="{{url('add_booking', $room->id)}}" method="Post">

                            @csrf

                            <div>
                                <label>Name</label>
                                <input type="text" name="name" @if (Auth::check()) value="{{ Auth::user()->name }}"
                                    @endif>
                            </div>

                            <div>
                                <label>Email</label>
                                <input type="email" name="email" @if (Auth::check()) value="{{ Auth::user()->email }}"
                                    @endif>
                            </div>

                            <div>
                                <label>Phone</label>
                                <input type="number" name="phone" @if (Auth::check()) value="{{ Auth::user()->phone }}"
                                    @endif>
                            </div>

                            <div>
                                <label>Start Date</label>
                                <input type="date" name="startDate" id="startDate">
                            </div>

                            <div>
                                <label>End Date</label>
                                <input type="date" name="endDate" id="endDate">
                            </div>


                            <div style="padding-top: 20px;">
                                <select id="payment-method" class="form-control" onchange="togglePaymentButton()">
                                    <option value="">Select Payment Method</option>
                                    <option value="pay-at-hotel">Pay at Hotel</option>
                                    <option value="pay-online">Pay Online</option>
                                </select>
                            </div>

                            <input type="hidden" name="payment_status" id="payment-status">
                            <input type="hidden" name="status" id="status">


                            <div style="padding-top: 20px;">

                                <input type="submit" class="btn btn-primary" value="Book Room">
                            </div>


                        </form>





                    </div>

                </div>
            </div>
        </div>

        <br><br><br>







        <!-- Footer Start -->
        @include('home.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        @include('home.script')

        <script type="text/javascript">
            $(function(){
                    var dtToday = new Date();

                    var month = dtToday.getMonth() + 1;

                    var day = dtToday.getDate();

                    var year = dtToday.getFullYear();

              if(month < 10)
                    month = '0' + month.toString();

              if(day < 10)
                    day = '0' + day.toString();

                    var maxDate = year + '-' + month + '-' + day;
                    $('#startDate').attr('min', maxDate);
                    $('#endDate').attr('min', maxDate);

            });

            function togglePaymentButton() {
                var paymentMethod = document.getElementById('payment-method').value;
                var paymentStatusInput = document.getElementById('payment-status');
                var statusInput = document.getElementById('status');

                if (paymentMethod === 'pay-at-hotel') {
                    paymentStatusInput.value = "pay-at-hotel";
                    statusInput.value = "unpaid";
                } else if (paymentMethod === 'pay-online') {
                    paymentStatusInput.value = "pay-online";
                    statusInput.value = "paid";
                    openPaymentTab();
                }
            }

            function openPaymentTab() {
                var url = "{{ url('pay', ['id' => $room->id]) }}";
                var width = 600;
                var height = 400;
                var left = (screen.width - width) / 2;
                var top = (screen.height - height) / 2;
                window.open(url, '_blank', 'width=' + width + ',height=' + height + ',top=' + top + ',left=' + left);
            }
        </script>

</body>

</html>
