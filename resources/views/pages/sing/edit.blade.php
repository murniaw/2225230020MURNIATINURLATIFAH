<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container py-4">
      <a class="navbar-brand" href="#">Gemuruh FKIP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('sing.index') }}">Join</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <h1 class="mb-0">Edit Data</h1>
    <hr />
    <form action="{{ route('sing.update', $sing->id) }}" method="POST">
    @csrf
    @method('PUT')
      <div class="row">
        <div class="col mb-3">
          <label class="form-label">Nama</label>
          <input type="text" name="name" class="form-control" placeholder="Nama lengkap" value="{{ $sing->name }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Author</label>
          <input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" value="{{ $sing->nim }}" >
        </div>
        <div class="row mb-3">
          <div class="col mb-3">
            <label class="form-label">Year</label>
            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $sing->jurusan }}" >
          </div>
          <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea name="motivasi" class="form-control" placeholder="Tulis motivasimu mengikuti kegiatan ini" >{{ $sing->motivasi }}</textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>  
</body>
</html>