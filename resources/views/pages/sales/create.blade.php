@extends('layouts.default')

@section('content')
<div id="layoutSidenav_content">
    <div class="card mx-auto my-5 card-sales shadow-sm">
        <div class="card-header">
            <strong><h3>Masukkan Sales</h3></strong>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <label for="cabang" class="form-label">Pilih Cabang:</label>
                <div class="input-group mb-3">
                <select class="form-select" name="anggaran" id="inputGroupSelect01" required>
                    <option selected disabled>-</option>
                        <option value="KALIABANG">KALIABANG</option>
                        <option value="KALIABANG">THB</option>
                        <option value="KALIABANG">PUP</option>
                        <option value="KALIABANG">TAMBUN</option>
                        <option value="KALIABANG">LAMPUNG</option>
                        <option value="KALIABANG">CIBITUNG</option>
                        <option value="KALIABANG">MAGELANG</option>
                        <option value="KALIABANG">CIREUNDEU</option>
                        <option value="KALIABANG">AREN JAYA</option>
                        <option value="KALIABANG">TAMBUN SUMBERJAYA</option>
                        <option value="KALIABANG">BINTARA</option>
                        <option value="KALIABANG">KAMAL RAYA</option>
                </select>
                </div>
                <label for="tanggal" class="form-label">Tanggal:</label>
                <div class="input-grup mb-3">
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <label for="jumlahSales" class="form-label">Jumlah Sales:</label>
                <div class="input-group mb-5">
                    <span class="input-group-text">Rp.</span>
                    <input type="number" class="form-control">
                </div>
                <div class="input-group">
                        <button class="btn btn-submit" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
