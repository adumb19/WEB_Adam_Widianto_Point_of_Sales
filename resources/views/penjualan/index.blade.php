@include('inc.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('inc.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('inc.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Daftar Penjualan</h1>

                    <div class="table-responsive">
                        <div align='right' class="mb-3">
                          <a href="{{ route('penjualan.create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                          <table class="table table-bordered" id="datatables">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Nama Pengguna</th>
                                      <th>Kode Transaksi</th>
                                      <th>Tanggal Transaksi</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $key => $item)
                                  <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $item->user->nama_lengkap }}</td>
                                      <td>{{ $item->kode_transaksi }}</td>
                                      <td>{{ $item->tanggal_transaksi }}</td>
                                      <td>
                                        <a href="{{ route('penjualan.edit', $item->id) }}" class="btn btn-ss btn-success">Edit</a>
                                        <form action="{{ route('penjualan.destroy', $item->id) }}" method="POST" class="d-inline">
                                          @csrf
                                          <input type="hidden" name="_method" value="DELETE">
                                          <button type="submit" class="btn btn-ss btn-danger show_confirm">Hapus</button>
                                        </form>
                                        <a href="{{ route('detail_penjualan.index') }}" class="btn btn-ss btn-info">Detail</a>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
    
                </div>

                </div>
                <!-- /.container-fluid -->

                
            <!-- End of Main Content -->

            @include('inc.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('inc.logoutModal')

    @include('inc.js')
</body>

</html>