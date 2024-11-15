<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <style>
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        /* Specific text color changes */
        h1, 
        label[for="title"],
        label[for="description"],
        label[for="price"],
        label[for="type"],
        label[for="wifi"],
        label[for="image"],
        .div_center h1,
        .div_deg label {
            color: white;
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
                    <h1 style="color: white;">Add Rooms</h1>
                    <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="div_deg">
                            <label style="color: white;">Room Title</label>
                            <input type="text" name="title">
                        </div>
                        <div class="div_deg">
                            <label style="color: white;">Description</label>
                            <textarea name="description"></textarea>
                        </div>
                        <div class="div_deg">
                            <label style="color: white;">Price</label>
                            <input type="number" name="price">
                        </div>
                        <div class="div_deg">
                            <label style="color: white;">Room Type</label>
                            <select name="type">
                                <option selected value="Family Room">Family Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Triple Room">Triple Room</option>
                            </select>
                        </div>
                        <div class="div_deg">
                            <label style="color: white;">Free Wifi</label>
                            <select name="wifi">
                                <option selected value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="div_deg">
                            <label style="color: white;">Upload Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Add Room">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
</body>
</html>