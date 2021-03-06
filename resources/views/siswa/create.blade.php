@extends('layouts.app')

@section('title', 'Minor page')



@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-8">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5> Form Siswa </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="/siswa/post" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">NPM</label>
                                <div class="col-sm-4"><input name="npm" type="text" class="form-control"></div>
                            </div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-4"><input name="nama" type="text" class="form-control"></div>
                            </div>
                            <div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Kelamin</label>

                                <div class="col-sm-4"><select name="jenis_kelamin" class="form-control m-b">
                                        <option value="0">==pilih==</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group  row"><label class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-4"><input name="agama" type="text" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row">
                                <div class="col-sm-4 col-sm-offset-2">

                                    <a href="/siswa" class="btn btn-white btn-sm">Cancel</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
