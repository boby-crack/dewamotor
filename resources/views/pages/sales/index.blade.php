@extends('layouts.default')

@section('content')
    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">KALIABANG</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">DetailSales</li>
                        </ol>

                         <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Area Chart Example
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Sales Dewa Motor
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Cabang</th>
                                            <th>Target</th>
                                            <th>Sales</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Cabang</th>
                                            <th>Target</th>
                                            <th>Sales</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 2.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 2.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 2.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>
                                        <tr>
                                            <td>KALIABANG</td>
                                            <td>Rp. 3.000.000</td>
                                            <td>Rp. 3.400.000</td>
                                            <td>11/12/2023</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
@endsection
