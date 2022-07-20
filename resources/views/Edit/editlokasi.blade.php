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
                                <a class="nav-link active" id="pills-lokasi-tab" data-toggle="pill" href="#pills-lokasi"
                                    role="tab" aria-controls="pills-lokasi" aria-selected="true">Lokasi</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-lokasi" role="tabpanel" aria-labelledby="pills-lokasi-tab">
                                <div class="" style="height:230px">
                                    <table class="table">
                                        @foreach ($lokasi as $lok)
                                        <form action="/lokasi/update" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                  <label>Lokasi</label>
                                                  <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="{{$lok->id_lokasi}}">
                                                  <input type="text" class="form-control" name="nama" value="{{$lok->nama_lokasi}}">
                                                    <label>Desa</label>
                                                    <select name="id_desa" class="form-control">
                                                        <option value="{{$lok->id_desa}}">{{$lok->nama_desa}}</option>
                                                        @foreach ($desa as $val)
                                                        <option name="id_desa" value="{{$val->id_desa}}">{{$val->nama_desa}}</option>
                                                        @endforeach
                                                    </select>
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
