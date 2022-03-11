@extends('layouts.app')
@section('content')

        <div class="row"></div>
        <div class="col-12">
                <h1>Data Perjalanan</h1>
    <div class="col-12">
    <button type="button" class="btn btn-dark btn-sm float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
    </button>


    </div>

        <table class="table" table-hover>
            <thead>
                <th>Id User</th>
                <th>Tanggal Perjalanan</th>
                <th>Jam</th>
                <th>Lokasi</th>
                <th>Suhu Tubuh</th>
                <th>Aksi</th>
            </thead>
            @foreach ($perjalanan as $no => $p)
                <tr>
                    <td>{{ $no+1}}</td>
                    <td>{{ $p->tgl_perjalanan }}</td>
                    <td>{{ $p->jam }}</td>
                    <td>{{ $p->lokasi }}</td>
                    <td>{{ $p->suhu_tubuh }}</td>
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
                  <label for="exampleInputEmail1" class="form-label">Id User</label>
                  <input name="id_user" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id_user">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">tgl_perjalanan</label>
                    <input name="tgl_perjalanan" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tgl_perjalanan">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jam</label>
                    <input name="jam" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jam">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lokasi</label>
                    <input name="lokasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="lokasi">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Suhu tubuh</label>
                    <input name="suhu_tubuh" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="suhu_tubuh">
                  </div>

                <button type="submit" class="btn btn-dark">Submit</button>
              </form>
        </div>
      </div>
    </div>
  @stop
