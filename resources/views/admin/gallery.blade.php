<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">


                <center>

                    <h1 style="font-size: 40px; font-weight: bolder; color: white;">Gallery</h1>

                    <div class="row">

                        @foreach($gallery as $gallery)

                        <div class="col-md-4">
                            <img style="height: 200px!important; width: 300px!important;"
                                src="/gallery/{{$gallery->image}}">
                                
                                <a class="btn btn-danger mt-3" href="{{url('delete_gallery',$gallery->id)}}">Delete Image</a>
                        </div>
                        @endforeach

                    </div>

                    <br><br><br>

                    <form action="{{ url('upload_gallery') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label for="image" style="color: white; font-weight:bold;">Upload Image</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <input type="submit" value="Add Image" class="btn btn-primary">
                        </div>
                    </form>

                </center>


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