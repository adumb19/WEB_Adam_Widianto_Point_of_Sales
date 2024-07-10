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
                    <h1 class="h3 mb-4 text-gray-800">Edit Data Penjualan</h1>

                    <form action="{{ route('penjualan.update', $edit->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="">Nama User</label>
                            <select name="id_user" id="" class="form-control">
                                <option value="" disabled selected>Pilih User</option>
                                @foreach ($data as $key => $item)
                                    <option value="{{ $item->id }}" {{ $edit->id_user == $item->id ? 'selected' : '' }}>{{ $item->nama_lengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Kode Transaksi</label>
                            <input value="{{ $edit->kode_transaksi }}" name="kode_transaksi" type="text" class="form-control" placeholder="Masukan Kode Transaksi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tanggal Transaksi</label>
                            <input value="{{ $edit->tanggal_transaksi }}" name="tanggal_transaksi" type="date" class="form-control" placeholder="Masukan Tanggal Transaksi">
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                            <input type="reset" class="btn btn-danger" value="Reset">
                            <a href="{{ url()->previous() }}" class=" btn btn-info">Kembali</a>
                        </div>
                    </form>

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