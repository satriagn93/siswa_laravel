@extends('layouts.app')

@section('title', 'Minor page')



@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        {{--                alert===================================================--}}
        @if(session('sukses'))<div class="alert alert-success alert-dismissible col-lg-8" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-check-circle"></i>
            {{session('sukses')}}
        </div>
        @elseif(session('delete'))
            <div class="alert alert-danger alert-dismissible col-lg-8" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <i class="fa fa-times-circle"></i>
                {{session('delete')}}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-8">
                <div class="ibox ">
                    <div class="ibox-title">
                        <a href="/siswa/create" class="btn btn-default btn-xs">Create</a>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Npm</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data_siswa as $siswa)
                            <tr>
                                <td>{{$siswa->npm}}</td>
                                <td>{{$siswa->nama}}</td>
                                <td>{{$siswa->jenis_kelamin}}</td>
                                <td>{{$siswa->agama}}</td>
                                <td>
                                    <button class="btn btn-info btn-xs" type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau dihapus?')"><i class="fa fa-warning"></i>Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
