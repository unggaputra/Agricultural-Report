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
                                <a class="nav-link active" id="pills-bibit-tab" data-toggle="pill" href="#pills-bibit"
                                    role="tab" aria-controls="pills-bibit" aria-selected="true">Pupuk</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-pupuk" role="tabpanel" aria-labelledby="pills-pupuk-tab">
                                <div class="" style="height: 230px">
                                    <table class="table">
                                        @foreach ($pupuk as $val)
                                        <form action="/pupuk/update" method="post">
                                            @csrf
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                    <label>Nama Pupuk</label>
                                                    <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="{{$val->id_pupuk}}">
                                                     <input type="text" class="form-control" name="nama" value="{{$val->nama_pupuk}}">
                                                     <label>Jenis Pupuk</label>
                                                    <input type="text" class="form-control" name="jenis" value="{{$val->jenis_pupuk}}">
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
