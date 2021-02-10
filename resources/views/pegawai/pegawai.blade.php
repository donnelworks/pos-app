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
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pegawai as $row)
                  <tr>
                    td
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- /Main content -->

</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {



  });
</script>
@endsection
