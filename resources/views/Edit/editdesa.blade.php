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
                                <a class="nav-link active" id="pills-desa-tab" data-toggle="pill" href="#pills-desa"
                                    role="tab" aria-controls="pills-desa" aria-selected="true">Desa</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-desa" role="tabpanel" aria-labelledby="pills-desa-tab">
                                <div class="" style="height:180x">
                                    <table class="table">
                                        @foreach ($desa as $val)
                                        <form action="/desa/update" method="post">
                                            @csrf
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="{{$val->id_desa}}">
                                                  <label>Desa</label>
                                                  <input type="text" class="form-control" name="nama" value="{{$val->nama_desa}}">
                                                </div>
                                              </div>
                                                <div class="update ml-auto mr-auto">
                                                  <button type="submit" class="btn btn-primary btn-round">Simpan</button>
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
