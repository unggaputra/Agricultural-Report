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
                            <div class="" style="overflow-y: scroll; height:590px">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>No</th>
                                        <th>Nama Petani</th>
                                        <th>No Telepon</th>
                                        <th>Opsi</th>
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
                                            <td>
                                                <a href="/petani/edit/{{ $val->id_petani }}">Edit</a>
                                                |
                                                <a href="/petani/delete/{{$val->id_petani }}">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pupuk" role="tabpanel" aria-labelledby="pills-pupuk-tab">
                            <div class="" style="overflow-y: scroll; height:590px">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Nama Pupuk</th>
                                        <th>Jenis Pupuk</th>
                                        <th>Opsi</th>
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
                                            <td>
                                                <a href="/pupuk/edit/{{$val->id_pupuk }}">Edit</a>
                                                |
                                                <a href="/pupuk/delete/{{$val->id_pupuk }}">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-bibit" role="tabpanel" aria-labelledby="pills-bibit-tab">
                            <div class="" style="overflow-y: scroll; height:590px">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Nama Bibit</th>
                                        <th>Jenis Tanaman</th>
                                        <th>Opsi</th>
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
                                                <td>
                                                    <a href="/bibit/edit/{{$val->id_bibit }}">Edit</a>
                                                    |
                                                    <a href="/bibit/delete/{{$val->id_bibit }}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-desa" role="tabpanell" aria-labelledby="pills-desa-tab">
                            <div class="" style="overflow-y: scroll; height:590px">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Desa</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                            ?>
                                            @foreach ($desa as $val)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$val->nama_desa}}</td>
                                                <td>
                                                    <a href="/desa/edit/{{ $val->id_desa }}">Edit</a>
                                                    |
                                                    <a href="/desa/delete/{{$val->id_desa }}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-lokasi" role="tabpanell" aria-labelledby="pills-lokasi-tab">
                            <div class="" style="overflow-y: scroll; height:590px">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Lokasi</th>
                                        <th>Desa</th>
                                        <th>Opsi</th>
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
                                                <td>
                                                    <a href="/lokasi/edit/{{$val->id_lokasi }}">Edit</a>
                                                    |
                                                    <a href="/lokasi/delete/{{$val->id_lokasi }}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-lahan" role="tabpanell" aria-labelledby="pills-lahan-tab">
                            <div class="" style="overflow-y: scroll; height:590px">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Nama Petani</th>
                                        <th>Lokasi</th>
                                        <th>Desa</th>
                                        <th>Luas  (m<sup>2</sup>)</th>
                                        <th>Opsi</th>
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
                                                <td>
                                                    <a href="/lahan/edit/{{$val->id_lahan }}">Edit</a>
                                                    |
                                                    <a href="/lahan/delete/{{$val->id_lahan }}">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-riwayatpembelian" role="tabpanell" aria-labelledby="pills-riwayatpembelian-tab">
                            <div class="" style="overflow-y: scroll; height:590px">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Pupuk</th>
                                        <th>Jenis Pupuk</th>
                                        <th>Jumlah Pupuk (Sak)</th>
                                        <th>Opsi</th>
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
                                            <td>
                                                <a href="/transaksi/edit/{{$val->id_transaksi }}">Edit</a>
                                                |
                                                <a href="/transaksi/delete/{{$val->id_transaksi }}">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-riwayattanam" role="tabpanell" aria-labelledby="pills-riwayattanam-tab">
                            <div class="" style="overflow-y: scroll; height:590px">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Nama Petani</th>
                                        <th>Lokasi</th>
                                        <th>Desa</th>
                                        <th>Bibit</th>
                                        <th>Jumlah Bibit (KG)</th>
                                        <th>Pupuk</th>
                                        <th>Jumlah Pupuk (KG)</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Panen</th>
                                        <th>Total Hasil (KG)</th>
                                        <th>Opsi</th>
                                        <tbody>
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
                                            <td>
                                                <a href="/riwayat/edit/{{$val->id_riwayat_tanam }}">Edit</a>
                                                |
                                                <a href="/riwayat/delete/{{$val->id_riwayat_tanam }}">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      @endsection
