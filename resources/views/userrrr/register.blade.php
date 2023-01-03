<!DOCTYPE html>
<html>
<head>
    <title>The Login Form</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

          
          <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
          <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
    <div class="wrap">
        <form class="login-form" method="POST" action="{{url('/registration-check')}}">
            @csrf
            <div class="form-header">
                <h3>Register Form</h3>
                <p>Register to access your dashboard</p>
            </div>
             <!--Name Input-->
             <div class="form-group">
                <input type="text" name="name"class="form-input" placeholder="Name">
            </div>
            <!--Email Input-->
            <div class="form-group">
               
                <input type="text"name="email" class="form-input" placeholder="email@example.com">
            </div>
             <!--Phone Input-->
            <div class="form-group">
               
                <input type="text"name="phone" class="form-input" placeholder="Phone">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="Password">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" type="submit">Login</button>
            </div>
            <div class="form-footer">
            <a class="btn btn-primary" href="{{url('/home')}}">Home</a>
            </div>
        </form>
    </div>

    {!! Toastr::message() !!}
</body>
</html>