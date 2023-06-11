@extends('layout.navbar')

@section('cover')
    <div class="d-flex justify-content-around con">
        <div class="tulisan animate__animated animate__bounceInLeft animate__delay-2">
            <h3>This Is New Era Of</h3>
            <h2 class="fw-bold">WARMINDO</h2>
            <p>Apa yang ingin kamu makan hari ini??</p>
        </div>
        <div class="mangkok animate__animated animate__bounceInRight animate__delay-2">
            <img src="{{ asset("img/mie goreng.png") }}" alt="mie">
        </div>
    </div>
@endsection

{{-- Bagian Form --}}
@section('container')
   
    <form action="" method="post" class="form d-flex justify-content-start" id="myForm">
        @csrf
        <div class="pesan">
            <h5>Silahkan Pesan Makanan</h5>
            <label for="" class="form-label text-muted">Makanan</label>
            <br>
            <select class="form-select border-warning" name="makanan" required id="makanan">
            @foreach ($makanan as $mak)
                <option value="{{ $mak->makanan }}">{{ $mak->makanan }}</option>
            @endforeach
            </select>
            <label for="" class="form-label text-muted">Jumlah Pesan</label>
            <br>
            <input type="text" name="total" class="border-warning form-control" id="jumlah" required>
            <br>    
            <button type="submit" class="btn btn-warning fw-semibold mt-2">Tambah Pesanan</button>
        </div>
    </form>

    <div class="table-container">
    <table class="table table-hovered table-bordered border-dark mt-2 ">
        <thead>
        <tr class="table-bordered border-dark table-header" style="background-color:orange;">
            <td class="fw-bold">Nama Pemesan</td>
            <td class="fw-bold">Pesanan</td>
            <td class="fw-bold">Jumlah Pesan</td>
        </tr>
        </thead>

        @if (count($data)==0)
            <tr>
                <td colspan="3">Data Tak Ditemukan</td>
            </tr>
        @endif
         @foreach ($data as $pesan)
             <tr>
                <td>{{ $pesan->name }}</td>
                <td>{{ $pesan->makanan }}</td>
                <td>{{ $pesan->total }}</td>
             </tr>
         @endforeach
    </table>
</div>


    <style>
        .con{
            background-color: orange;
            background-position: 100%;
        }
        .mangkok img{
            margin-left:10%;
            margin-top: -8%;
        }
        .tulisan{
            color: rgb(255, 255, 255);
            margin-top: 12%;
        }
        .tulisan h2{
            font-size: 4rem;
            letter-spacing: 5px;
        }
        .tulisan h3{
            letter-spacing: 2px;
        }
        .tulisan p{
            font-family: Arial, Helvetica, sans-serif;
        }
        .tab{
            max-height: 500px;
            overflow: scroll;
            
        }
        body::-webkit-scrollbar{
            display: none;
        } 
        .table-container::-webkit-scrollbar{
            display: none;
        } 
        .table-container {
        height: 500px; /* Atur tinggi sesuai kebutuhan */
        overflow-y: auto;
        margin-top:2%;
        }

        /* CSS untuk mengatur header tabel */
        .table-header {
        position: sticky;
        top: 0;
        background-color: #f1f1f1;
        font-weight: bold;
        }
    </style>
<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form secara langsung

        var name = document.getElementById("makanan").value;
        var total = document.getElementById("jumlah").value;

        if (name === '' || total === '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Harap isi semua field input!',
            });
            return;
        }

        // Lanjutkan dengan pengiriman form jika validasi berhasil
        this.submit();
    });
</script>
    
@endsection