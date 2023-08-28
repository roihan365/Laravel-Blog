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
                      <span class="info-box-number">asd</span>
                    </div>
                  </div>
            </div>
            <div class="col col-4">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-calendar"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Event</span>
                      <span class="info-box-number">123</span>
                    </div>
                  </div>
            </div>
            <div class="col col-4">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-user"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Pengguna Terdaftar</span>
                      <span class="info-box-number">123</span>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
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
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td>
                        <img src="https://e0.pxfuel.com/wallpapers/688/852/desktop-wallpaper-pin-oleh-aury-otaku-di-doraemon-dengan-gambar-doraemon-kartun-yellow-doraemon.jpg" alt="" class="img-fluid" width="50px" height="50px">
                      </td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      <td>5</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5
                      </td>
                      <td>Win 95+</td>
                      <td>5.5</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6
                      </td>
                      <td>Win 98+</td>
                      <td>6</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      <td>7</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>Win XP</td>
                      <td>6</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.7</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Firefox 1.5</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Firefox 2.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Firefox 3.0</td>
                      <td>Win 2k+ / OSX.3+</td>
                      <td>1.9</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Camino 1.0</td>
                      <td>OSX.2+</td>
                      <td>1.8</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Camino 1.5</td>
                      <td>OSX.3+</td>
                      <td>1.8</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Netscape 7.2</td>
                      <td>Win 95+ / Mac OS 8.6-9.2</td>
                      <td>1.7</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Netscape Browser 8</td>
                      <td>Win 98SE+</td>
                      <td>1.7</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>Gecko</td>
                      <td>Netscape Navigator 9</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>
                        <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="far fa-eye"></i></a>
                        <a href="" class="btn btn-primary"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                    
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
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
@endsection