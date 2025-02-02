@extends ('template.master')


@push('css')
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Cast</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Movie cast</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse ($casts as $key =>$value)
                  <tr>
                    <td>
                      {{ $key + 1}}
                    </td>
                    <td>
                      {{ $value->Nama }}
                    </td>
                    <td>
                        {{ $value->Umur }}
                      </td>
                      <td>
                        {{ $value->Bio }}
                      </td>
                    <td>
                      <form action="{{ route('cast.delete', $value->id) }}" method="POST">
  
                  <a href="{{ route('cast.edit', $value->id) }}" class="btn btn-sm btn-warning">
                  <span>Edit</span>
                  </a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger my-1" value="Delete">
                  </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td>Data Masih Kosong</td>
                  </tr>
                  @endforelse
                  </tbody>
                </table><br>
                <a href="{{ route('cast.create') }}" class="btn btn-primary">Tambah Data</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
@endsection

@push('js')
  <script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <script>
    $(function () {
      $("#table").DataTable({
        "paging": true, "lengthChange": false, "searching": false, "ordering": true,"info": true, "autoWidth": false, "responsive": true,
      });
    });
  </script>
@endpush