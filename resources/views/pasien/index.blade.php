@extends('dashboard.dashboard_utama')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nomor RM</th>
                    <th>nama_lengkap</th>
                
                    <th>Aksi</th>
                  </tr>
                </thead>


                <tbody>
                        @foreach($data as $datas)
                             <tr>
                                <td>{{ $datas->nomor_rm }}</td>
                                <td>{{ $datas->nama_lengkap }}</td>
                              
                                </td>
                                <td>
                                        <form action="{{ route('pasien.destroy', $datas->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="{{ route('pasien.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Ubah</a>
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                            </form>
                                </td>
                              </tr>
                              @endforeach
                </tbody>
              </table>
              <a href="{{ route('pasien.create') }}"><button type="submit" class="btn btn-success">Tambah Pasien</button></a>
            </div>
          </div>
    </div>
@stop