@extends('template.master'  )
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
                <form action="{{ route('cast.store') }}" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieGenre">Nama Cast</label><br>
                      <input type="text" class="form-control" @error('Nama') {{'is invalid'}} @enderror id="castNama" name="Nama" placeholder="Enter cast Name..." value="{{ old('Nama') }}">
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieGenre">Umur</label><br>
                      <input type="text" class="form-control" @error('Umur') {{'is invalid'}} @enderror id="castUmur" name="Umur" placeholder="Enter your age..." value="{{ old('Umur') }}">
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieGenre">Bio</label><br>
                      <input type="text" class="form-control" @error('Bio') {{'is invalid'}} @enderror id="castBio" name="Bio" placeholder="add bio..." value="{{ old('Bio') }}">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="row">
                  <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                  </div>
                  
                  <div class="card-footer">
                    <a href="{{ route ('cast.index') }}" button type="submit" class="btn btn-secondary">kembali</a>
                  </div>
                 </div>
                </form>
            </div>
        </div>

        
        <!-- /.container-fluid -->
      </section>
    <!-- /.content -->
@endsection