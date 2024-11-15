<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style type="text/css">
        .table_deg {
            border: 2px solid white;
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg {
            background-color: darkblue;
            padding: 15px;
            color: white;
        }

        td {
            padding: 10px;
            color: white; /* Added rule to change text color to white */
        }

        tr {
            border: 3px solid white;
        }

        .table-responsive {
            overflow-x: auto;
        }

    </style>
</head>
<body>

    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="table-responsive">
                    <table class="table_deg">
                        <tr>
                            <th class="th_deg">Room_Id</th>
                            <th class="th_deg">Customer name</th>
                            <th class="th_deg">Email</th>
                            <th class="th_deg">Phone</th>
                            <th class="th_deg">Arrival Date</th>
                            <th class="th_deg">Leaving Date</th>
                            <th class="th_deg">Room Title</th>
                            <th class="th_deg">Price</th>
                            <th class="th_deg">Status</th>
                            <th class="th_deg">Image</th>
                            <th class="th_deg">Delete</th>
                            <th class="th_deg">Status Update</th>
                        </tr>

                        @foreach ($data as $data)
                        <tr>
                            <td>{{$data->room_id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->start_date}}</td>
                            <td>{{$data->end_date}}</td>
                            <td>{{$data->room->room_title}}</td>
                            <td>{{$data->room->price}}</td>
                            <td>
                                  @if ($data->status == 'approve')
                                            <span style="color: green;">Approved</span>                                    
                                  @endif


                                  @if ($data->status == 'rejected')                                 
                                            <span style="color: red;">Rejected</span>                                    
                                  @endif


                                  @if ($data->status == 'pending')                                
                                            <span style="color: yellow;">Waiting</span>                                 
                                  @endif
                            </td>



                            <td><img style="width: 100px !important;" src="/room/{{$data->room->image}}"></td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('delete_booking',$data->id)}}">Delete</a>
                            </td>
                            <td> 
                              <span style="padding-bottom: 10px"> <a class="btn btn-success" href="{{url('approve_book',$data->id)}}">Approve</a> </span> 
                              <a class="btn btn-warning" href="{{url('reject_book',$data->id)}}">Rejected</a> 
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
</body>
</html>
