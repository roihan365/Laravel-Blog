@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col col-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-newspaper"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Artikel</span>
                      <span class="info-box-number">{{ $jlhArtikel }}</span>
                    </div>
                  </div>
            </div>
            <div class="col col-4">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fa fa-upload"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Artikel Publish</span>
                      <span class="info-box-number">{{ $publish }}</span>
                    </div>
                  </div>
            </div>
            <div class="col col-4">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fa fa-download"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Dalam Draft</span>
                      <span class="info-box-number">{{ $draft }}</span>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
              @if(Session::has('success'))
                  <div class="alert alert-success" id="success-message">
                      {{ Session::get('success') }}
                      @php
                          Session::forget('success');
                      @endphp
                  </div>
              @endif
              <!-- /.card-header -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar Postingan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Artikel</th>
                      <th>Penulis</th>
                      <th>Tanggal Publish</th>
                      <th>Kategori</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($data as $data)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ Str::substr($data->title, 0, 50) . "..." }}</td>
                            <td>{{ $data->user->name }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->categories->name }}</td>
                            <td>
                              <img src="{{ Storage::url($data->image) }}" alt="" class="img-fluid" width="50px" height="50px">
                            </td>
                            <td>
                              <a href="{{ route('artikel.edit', $data->id) }}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                              <form action="{{ route('artikel.destroy', $data->id)}}" method="POST" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              </form>
                              <a href="{{ route('detailblog', $data->slug) }}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                            </td>
                          </tr>  
                      @endforeach                 
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, 
          "lengthChange": true, 
          "autoWidth": false,
          "paging": true,
          "ordering": true,

          // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
      });
    </script>
    <script>
        // Cari elemen dengan ID 'success-message'
        const successMessage = document.getElementById('success-message');
        
        // Hapus pesan sukses setelah 5 detik
        setTimeout(() => {
            if (successMessage) {
                successMessage.remove();
            }
        }, 3000); // Menghilangkan setelah 5 detik (5000 milidetik)
    </script>
@endsection