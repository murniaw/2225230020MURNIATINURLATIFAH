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
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Kontestan Gemuruh FKIP</h1>
        <a href="{{ route('sing.create') }}" class="btn btn-primary">Daftar</a>
    </div>
    <hr />
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif      
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Motivasi</th>
            </tr>
        </thead>
        <tbody>
            @if($sings->count() > 0)
            @foreach ($sings as $sing)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $sing->name }}</td>
                <td class="align-middle">{{ $sing->nim }}</td>
                <td class="align-middle">{{ $sing->jurusan }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('sing.show',$sing->id) }}" type="button" class="btn btn-secondary" >Detail</a>
                        <a href="{{ route('sing.edit',$sing->id) }}"type="button" class="btn btn-warning">Edit</a>
                        <form action="{{ route('sing.destroy', $sing->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?') ">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger m-0">Delete</button>
                        </form>
                      </div>
                </td>
            </tr>
        @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Data masih kosong</td>
            </tr>
        @endif
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>  
</body>
</html>