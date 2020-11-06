@extends('dashboard.dashboard_utama')
@section('content')


@foreach($data as $datas)
            <form action="{{ route('pasien.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="name">Nomor RM</label>
                    <input type="text" class="form-control" id="nomor_rm" name="nomor_rm" value="{{ $datas->nomor_rm }}">
                </div>
                <div class="form-group">
                        <label for="username">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $datas->nama_lengkap }}">
                    </div>
               
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
    @endforeach
    @endsection