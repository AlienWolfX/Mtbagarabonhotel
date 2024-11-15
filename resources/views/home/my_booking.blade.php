<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')

    <style type="text/css">
        .table_deg {
            border: 5px solid black;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg {
            background-color: #2a2a72;
            padding: 15px;
            color: white;
        }

        td {
            padding: 12px;
            color: black;
        }

        tr {
            border: 2px solid white;
        }

        .status-approved {
            color: #4CAF50;
            font-weight: bold;
        }

        .status-rejected {
            color: #f44336;
            font-weight: bold;
        }

        .status-pending {
            color: #ffd700;
            font-weight: bold;
        }

        .room-image {
            width: 100px;
            height: 70px;
            object-fit: cover;
            border-radius: 5px;
        }

        .table-responsive {
            overflow-x: auto;
            padding: 20px;
        }

        .booking-header {
            text-align: center;
            color: white;
            margin: 20px 0;
            font-size: 24px;
        }
    </style>
    
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        @include('home.header')
        <!-- Header End -->




        <h2 class="booking-header">My Bookings</h2>

        <div class="table-responsive">
            <table class="table_deg">
                <tr>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Room</th>
                    <th class="th_deg">Check In</th>
                    <th class="th_deg">Check Out</th>
                    <th class="th_deg">Total Price</th>
                    <th class="th_deg">Status</th>
                    <th class="th_deg">Room Image</th>
                </tr>
    
                @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->email }}</td>
                    <td>{{$booking->room->room_title}}</td>
                    <td>{{$booking->start_date}}</td>
                    <td>{{$booking->end_date}}</td>
                    <td>₱{{$booking->room->price}}</td>
                    <td>
                        @if($booking->status == 'approve')
                            <span class="status-approved">Approved</span>
                        @elseif($booking->status == 'rejected')
                            <span class="status-rejected">Rejected</span>
                        @else
                            <span class="status-pending">Pending</span>
                        @endif
                    </td>
                    <td>
                        <img class="room-image" src="/room/{{$booking->room->image}}" alt="{{$booking->room->room_title}}">
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
                




        
                    
        <!-- Booking Status Container End -->

        <!-- Footer Start -->
        @include('home.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        @include('home.script')

        <script>
            $(window).scroll(function() {
                sessionStorage.scrollTop = $(this).scrollTop();
            });

            $(document).ready(function() {
                if (sessionStorage.scrollTop != "undefined") {
                    $(window).scrollTop(sessionStorage.scrollTop);
                }
            });
        </script>
    </div>
</body>
</html>
