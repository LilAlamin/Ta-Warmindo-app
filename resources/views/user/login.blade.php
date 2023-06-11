@extends('layout.layout')

@section('container')

    <img src="{{ asset("img/gochujang-noodles_for-web-removebg-preview.png") }}" alt="indo" width="100%" height="" style="margin-left: -35%">
    
    <form action="" method="post" class="form d-flex justify-content-center ">
        @csrf
    <div class="input">
        <h1 class="fw-bold">Halo!</h1>
        <h5 class="fw-bold">Sudah Punya Akun?, masuk dulu yuk!</h5>
       <label for="" class="form-label mt-2 text-muted mt-3">Username</label>
        <input type="text" name="username"  class="form-control border-warning">
        <label for="" class="form-label text-muted">Password</label>
        <input type="password" name="password" id="passwordInput" class="form-control border-warning">
        <input type="checkbox" id="showPasswordCheckbox" onchange="togglePasswordVisibility()" class="form-check-input mt-3">
        <label for="showPasswordCheckbox" class="fw-semibold pw">Show Password</label>
        <br>
        <button type="submit" class="btn btn-warning mt-2 btn-md fw-semibold">Login</button>
        <p>Belum punya Akun?, <a href="/login/create" style="color:rgb(255, 166, 0)">Daftar disini</a></p>
    </div>
    
    </form>

    <style>
        label{
            display: block;
        }
        form{
            margin-top: -50%;
            margin-left: 70%;
        }
        button{
            margin-left: 300px;
        }
        p{
            margin-top: -8%
        }
        a{
            text-decoration: none;
        }
        .pw{
            margin-top: -5%;
            margin-left: 6%;
        }
    </style>

    <script>
        function togglePasswordVisibility() {
        var passwordInput = document.getElementById("passwordInput");
        var showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

        if (showPasswordCheckbox.checked) {
            passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
    }
    </script>
@endsection