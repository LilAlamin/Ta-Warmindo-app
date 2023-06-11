@extends('layout.layout')

@section('container')


    <img src="{{ asset("img/gochujang-noodles_for-web-removebg-preview.png") }}" alt="indo" width="100%" height="" style="margin-left: -35%">
    
    <form action="" method="post" >
        @csrf
        <h1 class="fw-bold">Halo!</h1>
        <h5 class="fw-bold">Belum Punya Akun?, buat  dulu yuk!</h5>
        <label for="" class="form-label mt-3 text-muted">Nama</label>
        <input type="text" name="nama" class="form-control border-warning">
        <label for="" class="form-label text-muted">Username</label>
        <input type="text" name="username" class="form-control border-warning">
        <label for="" class="form-label text-muted">Password</label>
        <input type="text" name="password" class="form-control border-warning">
        <label for="" class="form-label text-muted">Jenis Akun</label>
        <select name="user_type" id="" disabled>
            <option value="pembeli" selected>Pembeli</option>
        </select>
        <br>
        <button type="submit" class="btn btn-warning fw-semibold">Buat Akun</button>
        <p>Sudah punya Akun?, <a href="/login" style="color:rgb(255, 166, 0)">Masuk disini</a></p>
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
            margin-left: 70%;
            width: 30%;
            margin-top: 10%;
        }
        p{
            margin-top: -7%;
        }
        a{
            text-decoration: none;
        }
    </style>
@endsection