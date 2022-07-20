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
                                <a class="nav-link active" id="pills-lahan-tab" data-toggle="pill" href="#pills-lahan"
                                    role="tab" aria-controls="pills-lahan" aria-selected="true">Lahan</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-lahan" role="tabpanel" aria-labelledby="pills-lahan-tab">
                                <div class="" style="height:300px">
                                    <table class="table">
                                        @foreach ($lahan as $lh)
                                        <form action="/lahan/update" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                  <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="{{$lh->id_lahan}}">
                                                    <label>Nama Petani</label>
                                                    <select  name="id_petani" class="form-control">
                                                        <option value="{{$lh->id_petani}}">{{$lh->id_petani}} - {{$lh->nama_petani}}</option>
                                                        @foreach ($petani as $val)
                                                        <option name="id_petani" value="{{$val->id_petani}}">{{$val->id_petani}} - {{$val->nama_petani}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label>Nama Lokasi</label>
                                                    <select  name="id_lokasi" class="form-control">
                                                        <option value="{{$lh->id_lokasi}}">{{$lh->nama_lokasi}} - {{$lh->nama_desa}}</option>
                                                        @foreach ($lokasi as $val)
                                                        <option name="id_lokasi" value="{{$val->id_lokasi}}">{{$val->nama_lokasi}} - {{$val->nama_desa}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label>Luas Lahan</label>
                                                    <input type="text" class="form-control" name="luas" value="{{$lh->luas}}">
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
