@extends('_parts/_layouts')
@section('content')
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">{{ $judul }}</h4>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-0">
              <table id="tblData" class="table table-hover table-striped dt-responsive" style="width: 100%;">
                <thead>
                  <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>No. Tlp.</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Level</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pegawai as $row)
                  <tr>
                    <td>{{ $row->foto_pegawai }}</td>
                    <td>{{ $row->nama_pegawai }}</td>
                    <td>{{ $row->tlp_pegawai }}</td>
                    <td>{{ $row->email_pegawai }}</td>
                    <td>{{ $row->jabatan_pegawai }}</td>
                    <td>{{ $row->level_pegawai }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /Main content -->

</div>
@endsection

@push('script')
<script type="text/javascript">
  $(document).ready(function() {

    $('#tblData').DataTable({
      info: false,
      searching: false,
      lengthChange: false,
      pageLength: 25
    });


  });
</script>
@endpush
