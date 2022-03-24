<title>Login</title>
@include('components\header') 
{{-- @foreach ($user as $name)
    <h1>{{$name}}</h1>
@endforeach
--}}

{{-- <script>
    var name = @json($user);
    console.warn(name);
</script>  --}}
<style>
    .modal-content {
            background-color: #fefefe;
            margin: 5% auto 8% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 30%; /* Could be more or less, depending on screen size */
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

            /* Set a style for all buttons */
            button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

            button:hover {
            opacity: 0.8;
        }

            /* Extra styles for the cancel button */
            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
            .container {
            padding: 16px;
        }

            span.psw {
            float: right;
            padding-top: 16px;
        }

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: red;
            cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
            }
            
</style>

<form class="modal-content animate" action="home" method="post">
    {{ csrf_field() }}
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <p style="color:red;">{{ $error }}</p>
            @endforeach
        </ul>
    </div>
@endif
  </form>
  
@include('components\footer')
{{-- @php
    print_r($user);
@endphp --}}