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
                                <a class="nav-link active" id="pills-petani-tab" data-toggle="pill" href="#pills-petani"
                                    role="tab" aria-controls="pills-petani" aria-selected="true">Petani</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-petani" role="tabpanel"aria-labelledby="pills-petani-tab">
                                <div class="" style="height:250px">
                                    <table class="table">
                                        @foreach ($petani as $val)
                                        <form action="/petani/update" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                              <div class="form-group">
                                                <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="{{$val->id_petani}}">
                                                <label>Nama</label>
                                                <input type="text" required="required" class="form-control" name="nama" value="{{$val->nama_petani}}">
                                                <label >Nomor Telepon</label>
                                                <input type="text" required="required" class="form-control" name="no" value="{{$val->no_telepon}}">
                                                <div class="update ml-auto mr-auto">
                                                    <button type="submit" value="Simpan Data" class="btn btn-primary btn-round">Simpan</button>
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
