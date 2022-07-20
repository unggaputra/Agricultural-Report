@extends('dashboard')
@section('Content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Data</h4>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-transaksi-tab" data-toggle="pill" href="#pills-transaksi"
                                    role="tab" aria-controls="pills-transaksi" aria-selected="true">Riwayat Pembelian Pupuk</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-transaksi" role="tabpanel" aria-labelledby="pills-transaksi-tab">
                                <div class="" style="height:270px">
                                    <table class="table">
                                        @foreach ($riwayat_pembelian_pupuk as $val)
                                        <form action="/transaksi/update" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                  <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="{{$val->id_transaksi}}">
                                                    <label>Nama Petani</label>
                                                    <select name="id_petani" class="form-control">
                                                        <option value="{{$val->id_petani}}">{{$val->id_petani}} - {{$val->nama_petani}}</option>
                                                        @foreach ($petani as $val)
                                                        <option name="id_petani" value="{{$val->id_petani}}">{{$val->id_petani}} - {{$val->nama_petani}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label>Nama Pupuk</label>
                                                    @foreach ($riwayat_pembelian_pupuk as $val)
                                                    <select name="id_pupuk" class="form-control">
                                                        <option value="{{$val->id_pupuk}}">{{$val->id_pupuk}} - {{$val->nama_pupuk}}</option>
                                                        @endforeach
                                                        @foreach ($pupuk as $val)
                                                        <option name="id_pupuk" value="{{$val->id_pupuk}}">{{$val->id_pupuk}} - {{$val->nama_pupuk}}</option>
                                                        @endforeach
                                                    </select>
                                                    @foreach ($riwayat_pembelian_pupuk as $val)
                                                    <label>Jumlah Pupuk</label>
                                                    <input type="text" class="form-control" name="jumlah" value="{{$val->jumlah_karung}}">
                                                    @endforeach
                                                <div class="update ml-auto mr-auto">
                                                    <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                                                  </div>
                                                </div>
                                              </div>
                                        </form>
                                        @endforeach
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
