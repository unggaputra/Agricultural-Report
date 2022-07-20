@extends('dashboard')
@section('Content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Data</h4>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-petani-tab" data-toggle="pill" href="#pills-petani"
                                    role="tab" aria-controls="pills-petani" aria-selected="true">Petani</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-lahan-tab" data-toggle="pill" href="#pills-lahan"
                                    role="tab" aria-controls="pills-lahan" aria-selected="false">Lahan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-lokasi-tab" data-toggle="pill" href="#pills-lokasi"
                                    role="tab" aria-controls="pills-lokasi" aria-selected="false">Lokasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-desa-tab" data-toggle="pill" href="#pills-desa"
                                    role="tab" aria-controls="pills-desa" aria-selected="false">Desa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-bibit-tab" data-toggle="pill" href="#pills-bibit"
                                    role="tab" aria-controls="pills-bibit" aria-selected="false">Bibit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-pupuk-tab" data-toggle="pill" href="#pills-pupuk"
                                    role="tab" aria-controls="pills-pupuk" aria-selected="false">Pupuk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-riwayattanam-tab" data-toggle="pill" href="#pills-riwayattanam"
                                    role="tab" aria-controls="pills-riwayattanam" aria-selected="false">Riwayat Tanam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-riwayatpembelian-tab" data-toggle="pill" href="#pills-riwayatpembelian"
                                    role="tab" aria-controls="pills-riwayatpembelian" aria-selected="false">Riwayat Pembelian Pupuk</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-petani" role="tabpanel"aria-labelledby="pills-petani-tab">
                                <div class="" style="overflow-y: scroll; height:500px">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>No</th>
                                            <th>Nama Petani</th>
                                            <th>No Telepon</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($petani as $val)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$val->nama_petani}}</td>
                                                <td>{{$val->no_telepon}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="pills-pupuk" role="tabpanel" aria-labelledby="pills-pupuk-tab">
                                <div class="" style="overflow-y: scroll; height:500px">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama Pupuk</th>
                                            <th>Jenis Pupuk</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                                ?>
                                            @foreach ($pupuk as $val)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$val->nama_pupuk}}</td>
                                                <td>{{$val->jenis_pupuk}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-bibit" role="tabpanel" aria-labelledby="pills-bibit-tab">
                                <div class="" style="overflow-y: scroll; height:500px">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama Bibit</th>
                                            <th>Jenis Tanaman</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                                ?>
                                                @foreach ($bibit as $val)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$val->nama_bibit}}</td>
                                                    <td>{{$val->jenis_tanaman}}</td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-desa" role="tabpanell" aria-labelledby="pills-desa-tab">
                                <div class="" style="overflow-y: scroll; hight:500px">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Desa</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                                ?>
                                                @foreach ($desa as $val)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$val->nama_desa}}</td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-lokasi" role="tabpanell" aria-labelledby="pills-lokasi-tab">
                                <div class="" style="overflow-y: scroll; hight:500px">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Lokasi</th>
                                            <th>Desa</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                                ?>
                                                @foreach ($lokasi as $val)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$val->nama_lokasi}}</td>
                                                    <td>{{$val->nama_desa}}</td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-lahan" role="tabpanell" aria-labelledby="pills-lahan-tab">
                                <div class="" style="overflow-y: scroll; hight:500px">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama Petani</th>
                                            <th>Lokasi</th>
                                            <th>Desa</th>
                                            <th>Luas</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                                ?>
                                                @foreach ($lahan as $val)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$val->nama_petani}}</td>
                                                    <td>{{$val->nama_lokasi}}</td>
                                                    <td>{{$val->nama_desa}}</td>
                                                    <td>{{$val->luas}}</td>
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-riwayatpembelian" role="tabpanell" aria-labelledby="pills-riwayatpembelian-tab">
                                <div class="" style="overflow-y: scroll; height:500px">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nama Pupuk</th>
                                            <th>Jenis Pupuk</th>
                                            <th>Jumlah Pupuk</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ( $riwayat_pembelian_pupuk as $val)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$val->nama_petani}}</td>
                                                <td>{{$val->nama_pupuk}}</td>
                                                <td>{{$val->jenis_pupuk}}</td>
                                                <td>{{$val->jumlah_karung}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-riwayattanam" role="tabpanell" aria-labelledby="pills-riwayattanam-tab">
                                <div class="" style="overflow-y: scroll; height:500px">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>No</th>
                                            <th>Nama Petani</th>
                                            <th>Lokasi</th>
                                            <th>Desa</th>
                                            <th>Bibit</th>
                                            <th>Jumlah Bibit</th>
                                            <th>Pupuk</th>
                                            <th>Jumlah Pupuk</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Panen</th>
                                            <th>Total Hasil</th>
                                            <?php
                                            $i = 1;
                                            ?>
                                            @foreach ($riwayat_tanam as $val)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$val->nama_petani}}</td>
                                                <td>{{$val->nama_lokasi}}</td>
                                                <td>{{$val->nama_desa}}</td>
                                                <td>{{$val->nama_bibit}}</td>
                                                <td>{{$val->jumlah_bibit}}</td>
                                                <td>{{$val->nama_pupuk}}</td>
                                                <td>{{$val->jumlah_pupuk}}</td>
                                                <td>{{$val->start_date}}</td>
                                                <td>{{$val->end_date}}</td>
                                                <td>{{$val->total_hasil}}</td>
                                            </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">...</div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
