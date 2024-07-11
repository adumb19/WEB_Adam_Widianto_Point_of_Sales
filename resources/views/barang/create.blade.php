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
                    <h1 class="h3 mb-4 text-gray-800">Tambah Barang</h1>

                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Nama Barang</label>
                            <input name="nama_barang" type="text" class="form-control" placeholder="Masukan Nama Barang">
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Kategori</label>
                          <select name="id_kategori" class="form-control">
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach ($data as $key => $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Satuan</label>
                            <input name="satuan" type="text" class="form-control" placeholder="Masukan Satuan Barang">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Quantity</label>
                            <input name="qty" type="text" class="form-control" placeholder="Masukan Quantity Barang">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Harga</label>
                            <input name="harga" type="text" class="form-control" placeholder="Masukan Harga Barang">
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