@extends('dashboard.dashboard_utama')

@section('content')
<div class="row">
  <!-- form input mask -->
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Pasien Baru</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>


        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form action="{{ route('pasien.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-4 col-sm-6  ">
              <div class="form-group row {{$errors->has('nomor_rm')?' has-error':''}}" >
                <div class="col-md-12 col-sm-3  form-group has-feedback">
                  <input name="nomor_rm" type="text" class="form-control" id="inputSuccess2" placeholder="nomor_rm">
                    @if($errors->has('Nomor_RM'))
                  <span class="help-block">{{$errors->first('Nomor_RM')}}</span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 col-sm-3  form-group has-feedback">
                  <input nama="Nomor_Identitas"type="text" class="form-control" id="inputSuccess2" placeholder="Nomor Identitas">
                  <span  aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group row {{$errors->has('Nama_Lengkap')?' has-error':''}}">
                <div class="col-md-12 col-sm-3  form-group has-feedback">
                  <input nama="NamaLengap"type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nama Lengkap">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group row">
               <div class="col-md-12 col-sm-3  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="inputSuccess3" placeholder="Panggilan">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
              </div>
            </div>

            <div class="form-group row">
             <div class="col-md-12 col-sm-3  form-group has-feedback">
              <input type="text" class="form-control" id="inputSuccess3" placeholder="Tempat Lahir">
              <span aria-hidden="true"></span>
            </div>
          </div>

          <div class="form-group row {{$errors->has('Tanggal_Lahir')?' has-error':''}}">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tgl Lahir</label>
            <div class="col-md-8 col-sm-8  form-group has-feedback">
              <input type="date" class="form-control" id="inputSuccess3" placeholder="Tanggal Lahir">
              <span aria-hidden="true"></span>
            </div>
          </div>


        </div>


        <div class="col-md-2 col-sm-5 ">
          <div class="form-group row{{$errors->has('Title')?' has-error':''}}">
            <div class="col-md-12 col-sm-3 ">
              <select name="title" class="form-control">
                <option>Title</option>
                <option>Tn</option>
                <option>Ny</option>

              </select>
            </div>
          </div>
          <div class="form-group row{{$errors->has('Jenis_Kelamin')?' has-error':''}}">
            <div class="col-md-12 col-sm-3 ">
              <select class="form-control">
                <option>JenisKel</option>
                <option>P</option>
                <option>W</option>

              </select>
            </div>
          </div>
          <div class="form-group row">
           <div class="col-md-12 col-sm-3 ">
            <select class="form-control">
              <option>Agama</option>
              <option>Islam</option>
              <option>Kristen</option>
              <option>Protestan</option>
              <option>Hindu</option>
              <option>Budha</option>
              <option>Kepercayaan</option>

            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12 col-sm-3 ">
            <select class="form-control">
              <option>Status</option>
              <option>Kawin</option>
              <option>Belum Kawin</option>
              <option>Janda</option>
              <option>Duda</option>
              <option>Dibawah Umur</option>

            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12 col-sm-3 ">
            <select class="form-control">
              <option>Pendidikan</option>
              <option>Sarjana</option>
              <option>Diploma</option>
              <option>SLTA</option>
              <option>SMP</option>
              <option>SD</option>
              <option>Lainya</option>

            </select>
          </div>
        </div>
        <div class="form-group row">
          <fieldset>
            <div class="control-group">
              <div class="controls">
                <div class="col-md-12 xdisplay_inputx">
                  <input name="TglDaftarMembership" type="text" class="form-control" id="single_cal2" placeholder="Tgl Daftar Baru" aria-describedby="inputSuccess2Status2">

                </div>
              </div>
            </div>
          </fieldset>
        </div>

      </div>

      <div class="col-md-3 col-sm-2 ">

       <div class="form-group row">
        <div class="col-md-12 col-sm-12  form-group has-feedback">
          <input type="tel" class="form-control" id="inputSuccess5" placeholder="Phone">
          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12 col-sm-12  form-group has-feedback">
          <input type="email" class="form-control has-feedback-right" id="inputSuccess4" placeholder="Email">
          <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
        </div>
      </div>

      <div class="form-group row">
       <div class="col-md-12 col-sm-3  form-group has-feedback">
        <input type="text" class="form-control" id="inputSuccess3" placeholder="Pekerjaan">
        <span aria-hidden="true"></span>
      </div>
    </div>

    <div class="form-group row">
     <div class="col-md-12 col-sm-3  form-group has-feedback">
      <input type="text" class="form-control" id="inputSuccess3" placeholder="PenanggungJawab">
      <span aria-hidden="true"></span>
    </div>
  </div>
  <div class="form-group row">
   <div class="col-md-12 col-sm-3  form-group has-feedback">
    <input type="text" class="form-control" id="inputSuccess3" placeholder="Telpon Penganggungjawab">
    <span aria-hidden="true"></span>
  </div>
</div>
<div class="form-group row">
 <div class="col-md-12 col-sm-3  form-group has-feedback">
  <input type="text" class="form-control" id="inputSuccess3" placeholder="Optional">
  <span aria-hidden="true"></span>
</div>
</div>

</div>

<div class="col-md-3 col-sm-2 ">
    <div class="form-group row">
   <div class="col-md-12 col-sm-3  form-group has-feedback">
    <input type="text" class="form-control" id="inputSuccess3" placeholder="Alamat">
    <span aria-hidden="true"></span>
  </div>
</div>
  <div class="form-group row">
   <div class="col-md-12 col-sm-3  form-group has-feedback">
    <input type="text" class="form-control" id="inputSuccess3" placeholder="RT RW">
    <span aria-hidden="true"></span>
  </div>
</div>

<div class="form-group row">
 <div class="col-md-12 col-sm-3  form-group has-feedback">
  <input type="text" class="form-control" id="inputSuccess3" placeholder="Kelurahan">
  <span aria-hidden="true"></span>
</div>
</div>
<div class="form-group row">
 <div class="col-md-12 col-sm-3  form-group has-feedback">
  <input type="text" class="form-control" id="inputSuccess3" placeholder="Kecamatan">
  <span aria-hidden="true"></span>
</div>
</div>

<div class="form-group row">
 <div class="col-md-12 col-sm-3  form-group has-feedback">
  <input type="text" class="form-control" id="inputSuccess3" placeholder="Provinsi">
  <span aria-hidden="true"></span>
</div>
</div>
<div class="form-group row">
 <div class="col-md-12 col-sm-3  form-group has-feedback">
  <input type="text" class="form-control" id="inputSuccess3" placeholder="Kode Pos">
  <span aria-hidden="true"></span>
</div>
</div>

</div>





</div>



<div class="row">
 <div class="col-md-6 col-sm-12  ">

  <div class="form-group row">
   <div class="col-md-12 col-sm-3  form-group has-feedback">
    <select class="select2_single form-control" tabindex="-1">
      <option>Ruangan</option>
      <option value="AK">Alaska</option>
      <option value="HI">Hawaii</option>
      <option value="CA">California</option>
      <option value="NV">Nevada</option>
      <option value="OR">Oregon</option>
      <option value="WA">Washington</option>
      <option value="AZ">Arizona</option>
      <option value="CO">Colorado</option>
      <option value="ID">Idaho</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NM">New Mexico</option>
      <option value="ND">North Dakota</option>
      <option value="UT">Utah</option>
      <option value="WY">Wyoming</option>
      <option value="AR">Arkansas</option>
      <option value="IL">Illinois</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="OK">Oklahoma</option>
      <option value="SD">South Dakota</option>
      <option value="TX">Texas</option>
    </select>
  </div>

  <div class="col-md-12 col-sm-3  form-group has-feedback">
    <input type="text" class="form-control" id="inputSuccess3" placeholder="Output No RM">
    <span aria-hidden="true"></span>
  </div>

  <div class="col-md-12 col-sm-3  form-group has-feedback">
    <input type="text" class="form-control" id="inputSuccess3" placeholder="ID User" value="{{ Auth::user()->name }}">
    <span aria-hidden="true"></span>
  </div>
</div>
</div>
</div>
<div class="ln_solid"></div>
<div class="form-group row">
  <div class="col-md-9 offset-md-3">

    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-md btn-danger">Cancel</button>   
  </div>
</div>
</form>
</div>
</div>
</div>
<!-- /form input mask -->

</div>
@stop