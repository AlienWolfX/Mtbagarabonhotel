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
           

          <center>

                   <h1 style="font-size: 30px; font-weight:bold; color:white;">Mail send to {{$data->name}}</h1>


                   <form action="{{url('mail',$data->id)}}" method="Post" >

                    @csrf
                   
                    <div class="div_deg">
                        <label style="color: white;">Greeting</label>
                        <input type="text" name="greeting">
                    </div>

                    <div class="div_deg">
                        <label style="color: white;">Mail Body</label>
                        <textarea name="body"></textarea>
                    </div>

                    <div class="div_deg">
                        <label style="color: white;">Action Text</label>
                        <input type="text" name="actiontext">
                    </div>

                    <div class="div_deg">
                        <label style="color: white;">Action Url</label>
                        <input type="text" name="action_url">
                    </div>

                    <div class="div_deg">
                        <label style="color: white;">End Line</label>
                        <input type="text" name="endline">
                    </div>
                    
                   
                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Send mail">
                    </div>
                </form>

          </center>

          </div>
      </div>
    </div>

    <!-- JavaScript files Start-->
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
     <!-- JavaScript files End-->


  </body>
</html>