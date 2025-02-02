      @extends('template.master')
      @section('content')
      <div class="row">

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
          <div class="card-header">
                      <h3 class="card-title">Edit Data Genre</h3>
                    </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  action="{{ route('genre.update', $genres->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="Nama">Nama Genre</label>
            <input name="Nama" type="text" class="form-control @error("Nama") {{"is-invalid"}} @enderror" id="Nama" placeholder="Nama Genre" value="{{ $genres->Nama }}">
          </div>
          @error('Nama')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>
        


          </div>
          <!-- /.card -->
        </div>
      @endsection