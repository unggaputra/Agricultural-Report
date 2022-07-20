@extends('dashboard')
@section('Content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Data</h4>
                        {{-- <textarea name="" id="" cols="30" rows="10">{{$lahan}}</textarea> --}}
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
                                <a class="nav-link" id="pills-desa-tab" data-toggle="pill" href="#pills-desa" role="tab"
                                    aria-controls="pills-desa" aria-selected="false">Desa</a>
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
                                <a class="nav-link" id="pills-riwayattanam-tab" data-toggle="pill"
                                    href="#pills-riwayattanam" role="tab" aria-controls="pills-riwayattanam"
                                    aria-selected="false">Riwayat Tanam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-riwayatpembelian-tab" data-toggle="pill"
                                    href="#pills-riwayatpembelian" role="tab" aria-controls="pills-riwayatpembelian"
                                    aria-selected="false">Riwayat Pembelian Pupuk</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-petani"
                                role="tabpanel"aria-labelledby="pills-petani-tab">
                                <div class="" style="height:590px">
                                    <table class="table">
                                        <form action="/petani/store" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="Nama">
                                                    <label>Nomor Telepon</label>
                                                    <input type="text" class="form-control" name="telepon"
                                                        placeholder="No Telp">
                                                    <div class="update ml-auto mr-auto">
                                                        <button type="submit" value="Simpan Data"
                                                            class="btn btn-primary btn-round">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-lahan" role="tabpanel" aria-labelledby="pills-lahan-tab">
                                <div class="" style="height:590px">
                                    <table class="table">
                                        <form action="/lahan/store" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <label>Petani</label>
                                                <select name="id_petani" class="form-control" name="id_petani">
                                                    <option value="">Pilih Petani</option>
                                                    @foreach ($petani as $val)
                                                        <option value="{{ $val->id_petani }}">{{ $val->id_petani }}<a> -
                                                            </a>{{ $val->nama_petani }}</option>
                                                    @endforeach
                                                </select>
                                                <label>lokasi</label>
                                                <select name="id_lokasi" class="form-control" name="id_lokasi">
                                                    <option value="">Pilih Lokasi</option>
                                                    @foreach ($lokasi as $val)
                                                        <option value="{{ $val->id_lokasi }}">{{ $val->nama_lokasi }}<a> -
                                                            </a>{{ $val->nama_desa }}</option>
                                                    @endforeach
                                                </select>
                                                <label>Luas Lahan</label>
                                                <input type="text" class="form-control" name="luas"
                                                    placeholder="Lahan">
                                                <div class="update ml-auto mr-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-round">Tambah</button>
                                                </div>
                                            </div>
                                        </form>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-lokasi" role="tabpanel"
                                aria-labelledby="pills-lokasi-tab">
                                <div class="" style="height:590px">
                                    <table class="table">
                                        <form action="/lokasi/store" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Lokasi</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="Lokasi">
                                                    <label>Desa</label>
                                                    <select name="id_desa" class="form-control">
                                                        <option value="">Pilih Desa</option>
                                                        @foreach ($desa as $val)
                                                            <option value="{{ $val->id_desa }}">{{ $val->nama_desa }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="update ml-auto mr-auto">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-round">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-desa" role="tabpanel" aria-labelledby="pills-desa-tab">
                                <div class="" style="height:590px">
                                    <table class="table">
                                        <form action="/desa/store" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Desa</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="Desa">
                                                    <div class="update ml-auto mr-auto">
                                                        <button type="submit" value="Simpan Data"
                                                            class="btn btn-primary btn-round">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-bibit" role="tabpanel"
                                aria-labelledby="pills-bibit-tab">
                                <div class="" style="height: 590px">
                                    <table class="table">
                                        <form action="/bibit/store" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Nama Bibit</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="Bibit">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Tanaman</label>
                                                    <input type="text" class="form-control" name="tanaman"
                                                        placeholder="Tanaman">
                                                </div>
                                                <div class="update ml-auto mr-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-round">Tambah</button>
                                                </div>
                                            </div>
                                        </form>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-pupuk" role="tabpanel"
                                aria-labelledby="pills-pupuk-tab">
                                <div class="" style="height: 590px">
                                    <table class="table">
                                        <form action="/pupuk/store" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Nama Pupuk</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        placeholder="Pupuk">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Pupuk</label>
                                                    <input type="text" class="form-control" name="jenis"
                                                        placeholder="Jenis Pupuk">
                                                </div>
                                                <div class="update ml-auto mr-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-round">Tambah</button>
                                                </div>
                                            </div>
                                        </form>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-riwayattanam" role="tabpanel"
                                aria-labelledby="pills-riwayattanam-tab">
                                <div class="" style="height: 590px">
                                    <table class="table">
                                        <form action="/riwayat/store" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Pemilik Lahan</label>
                                                    <select name="id_lahan" class="form-control">
                                                        <option value="">Pilih Lahan</option>
                                                        @foreach ($lahan as $val)
                                                            <option value="{{ $val->id_lahan }}">{{ $val->id_lahan }}.
                                                                {{ $val->nama_petani }} - {{ $val->nama_lokasi }} -
                                                                {{ $val->luas }}M<sup>2</sup></option>
                                                        @endforeach
                                                    </select>


                                                    <label>Bibit</label>
                                                    <select name="id_bibit" class="form-control">
                                                        <option value="">Pilih Bibit</option>
                                                        @foreach ($bibit as $val)
                                                            <option value="{{ $val->id_bibit }}">
                                                                {{ $val->nama_bibit }}<a> - </a>{{ $val->jenis_tanaman }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label>Jumlah bibit</label>
                                                    <input type="text" class="form-control" name="jumlah_bibit"
                                                        placeholder="jumlah_bibit">
                                                    <label>Pupuk</label>
                                                    <select name="id_pupuk" class="form-control">
                                                        <option value="">Pilih Pupuk</option>
                                                        @foreach ($pupuk as $val)
                                                            <option value="{{ $val->id_pupuk }}">
                                                                {{ $val->nama_pupuk }}<a> - </a>{{ $val->jenis_pupuk }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label>Jumlah Pupuk</label>
                                                    <input type="text" class="form-control" name="jumlah_pupuk"
                                                        placeholder="jumlah_upuk">
                                                    <label>Tanggal Mulai</label>
                                                    <input type="date" name="start_date" class="form-control">
                                                    <label>Tanggal Panen</label>
                                                    <input type="date" name="end_date" class="form-control">
                                                    <label>Hasil Panen</label>
                                                    <input type="text" name="hasil" class="form-control"
                                                        placeholder="Hasil">
                                                    <div class="update ml-auto mr-auto">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-round">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-riwayatpembelian" role="tabpanel"
                                aria-labelledby="pills-riwayatpembelian-tab">
                                <div class="" style="height:590px">
                                    <table class="table">
                                        <form action="/transaksi/store" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Pembeli</label>
                                                    <select name="id_petani" class="form-control">
                                                        <option value="">Pilih Petani</option>
                                                        @foreach ($petani as $val)
                                                            <option value="{{ $val->id_petani }}">{{ $val->id_petani }} -
                                                                {{ $val->nama_petani }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label>Pupuk</label>
                                                    <select name="id_pupuk" class="form-control">
                                                        <option value="">Pilih Pupuk</option>
                                                        @foreach ($pupuk as $val)
                                                            <option value="{{ $val->id_pupuk }}">{{ $val->id_pupuk }}<a>.
                                                                </a>{{ $val->nama_pupuk }}<a> -
                                                                </a>{{ $val->jenis_pupuk }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label>Jumlah Pupuk</label>
                                                    <input type="text" name="jumlah" class="form-control"
                                                        placeholder="Jumlah">
                                                </div>
                                                <div class="update ml-auto mr-auto">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-round">Tambah</button>
                                                </div>
                                            </div>
                                        </form>
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
