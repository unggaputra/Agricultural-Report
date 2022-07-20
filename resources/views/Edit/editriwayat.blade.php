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
                                <a class="nav-link active" id="pills-riwayattana-tab" data-toggle="pill" href="#pills-riwayattanam"
                                    role="tab" aria-controls="pills-riwayattanam" aria-selected="true">Riwayat Tanam</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-riwayattanam" role="tabpanel" aria-labelledby="pills-riwayattanam-tab">
                                <div class="" style="height:700px">
                                    <table class="table">
                                        @foreach ($riwayat_tanam as $val)
                                        <form action="/riwayat/update" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="{{$val->id_riwayat_tanam}}">
                                                <label>Pemilik Lahan</label>
                                                    <select  name="id_lahan" class="form-control">
                                                        <option value="{{$val->id_lahan}}">{{$val->id_lahan}}. {{$val->nama_petani}} - {{$val->nama_lokasi}} - {{$val->nama_desa}}</option>
                                                        @foreach ($lahan as $lh)
                                                        <option name="id_lahan" value="{{$lh->id_lahan}}">{{$lh->id_lahan}}. {{$lh->nama_petani}} - {{$lh->nama_lokasi}} - {{$lh->nama_desa}}</option>
                                                        @endforeach
                                                    </select>
                                                <label>Bibit</label>
                                                <select name="id_bibit" class="form-control">
                                                    <option value="{{$val->id_bibit}}">{{$val->nama_bibit}} - {{$val->jenis_tanaman}}</option>
                                                    @foreach ($bibit as $item)
                                                    <option name="id_bibit" value="{{$item->id_bibit}}">{{$item->nama_bibit}} - {{$item->jenis_tanaman}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Jumlah bibit</label>
                                                <input type="text" class="form-control" name="jumlah_bibit" value="{{$val->jumlah_bibit}}">
                                                <label>Pupuk</label>
                                                <select name="id_pupuk" class="form-control">
                                                    <option value="{{$val->id_pupuk}}">{{$val->nama_pupuk}} - {{$val->jenis_pupuk}}</option>
                                                    @foreach ($pupuk as $p)
                                                    <option name="id_pupuk" value="{{$p->id_pupuk}}">{{$p->nama_pupuk}} - {{$p->jenis_pupuk}}</option>
                                                    @endforeach
                                                </select>
                                                <label>Jumlah Pupuk</label>
                                                <input type="text" class="form-control" name="jumlah_pupuk" value="{{$val->jumlah_pupuk}}">
                                                <label>Tanggal Mulai</label>
                                                <input type="date" name="start_date" class="form-control" value="{{$val->start_date}}">
                                                <label>Tanggal Panen</label>
                                                <input type="date" name="end_date" class="form-control" value="{{$val->end_date}}">
                                                <label>Hasil Panen</label>
                                                <input type="text" name="total_hasil" class="form-control" value="{{$val->total_hasil}}">
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
