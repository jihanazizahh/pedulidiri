@extends('layouts.app')
@section('content')

        <div class="row"></div>
        <div class="col-12">
                <h1>Data user</h1>
    <div class="col-12">
    <button type="button" class="btn btn-dark btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
    </button>


    </div>

        <table class="table" table-hover>
            <thead>
                <th>NIK</th>
                <th>Nama</th>
                <th>Telpon</th>
                <th>Email</th>
            </thead>
            @foreach ($perjalanan as $no => $p)
                <tr>
                    <td>{{ $no+1}}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->telpon }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="user/delete/{{ $p->id }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
        <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-describedby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/perjalanan/store" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">NIk</label>
                  <input name="nik" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nik">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telpon</label>
                    <input name="telpon" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="telpon">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                  </div>

                <button type="submit" class="btn btn-dark">Submit</button>
              </form>
        </div>
      </div>
    </div>
  @stop
