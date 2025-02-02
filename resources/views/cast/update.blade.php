@extends('template.master')
@section('content')


            <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Cast</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('cast.update', $casts->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Nama">nama Cast</label>
                      <input name="Nama" type="text" class="form-control @error('Nama') {{ 'is-invalid' }} @enderror" id="Nama"  placeholder="Masukan Nama" value="{{ $casts->Nama }}">
                    </div>
                    @error('Nama')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Umur">Umur</label>
                      <input name="Umur" type="text" class="form-control @error('Umur') {{ 'is-invalid' }} @enderror" id="Umur"  placeholder="Masukan Umur" value="{{ $casts->Umur }}">
                    </div>
                    @error('Umur')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="Bio"> Bio</label>
                      <input name="Bio" type="text" class="form-control @error('Bio') {{ 'is-invalid' }} @enderror" id="Bio"  placeholder="Masukan Bio" value="{{ $casts->Bio }}">
                    </div>
                    @error('Bio')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="px-3 d-flex justify-content-between align-items-center">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
    
    <!-- /.container-fluid -->
  </section>
<!-- /.content -->

@endsection