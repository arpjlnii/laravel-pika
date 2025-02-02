@extends ('template.master')

@section('content')
          <!-- left column -->
<div class="col-md-12">
            <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Genre</h3>
        </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="{{ route('genre.store') }}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="NamaGenre">Nama Genre</label>
                  <input type="text" class="form-control @error('Nama') {{ 'is-invalid' }} @enderror" class="form-control" id="NamaGenre" name="Nama" placeholder="Masukkan Nama Genre" value="{{ old('Nama') }}">
                  </div>
                  @error('Nama')
                   <span id="terms-error" class="e   rror invalid-feedback" style="display: inline;">{{ $message }}</span>
                   @enderror
                </div>
                <!-- /.card-body -->

                <div class="px-3 d-flex justify-content-between align-items-center">
                <button type="reset" class="btn btn-warning">Reset</button>
                <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
    </div>
</div>
            <!-- /.card -->
@endsection