<!DOCTYPE html>
<html>

<head>
    @include('admin.css')


    <style>

        label {
            display: inline-block;
            width: 200px;
        }
        
        .div_deg
        {
            padding-top:30px;
        }

        .div_center
        {
            text-align:center;
            padding-top: 40px;
        }

    </style>


</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">


                <div class="div_center">

                    <h1>Update Rooms</h1>

                    <form action="{{url('edit_room',$data->id)}}" method="Post" enctype="multipart/form-data">

                        @csrf

                        <div class="div_deg">
                            <label >Room Title</label>
                            <input type="text" name="title" value="{{$data->room_title}}">
                        </div>

                        <div class="div_deg">
                            <label >Description</label>
                            <textarea name="description">{{$data->description}}</textarea>
                        </div>

                        <div class="div_deg">
                            <label >Price</label>
                            <input type="number" name="price" value="{{$data->price}}">
                        </div>

                        <div class="div_deg">
                            <label>Room Type</label>
                            <select name="type">

                                <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>

                                <option value="Family Room">Family Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Triple Room">Triple Room</option>

                            </select>
                        </div>


                        <div class="div_deg">
                            <label>Free Wifi</label>
                            <select name="wifi">

                                <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>

                                <option selected value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>


                        <div class="div_deg">
                            <label>Current Image</label>
                            <img width="100" src="/room/{{$data->image}}">
                        </div>


                        <div class="div_deg">
                            <label>Upload Image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Update Room">
                        </div>



                    </form>

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