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
                    <h1 class="h3 mb-4 text-gray-800">Edit Barang</h1>

                    <form action="
                    {{ route('barang.update', $edit->id) }}
                     " method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="">Nama Barang</label>
                            <input value="{{ $edit->nama_barang }}" name="nama_lengkap" type="text" class="form-control" placeholder="Masukan Nama Barang">
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Kategori</label>
                          <select name="id_kategori" class="form-control">
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach ($data as $key => $item)
                            <option value="{{ $item->id }}" {{ $edit->id_kategori == $item->id ? 'selected' : '' }}>{{ $item->nama_kategori }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Satuan</label>
                            <input value="{{ $edit->satuan }}" name="satuan" type="text" class="form-control" placeholder="Masukan Satuan Barang">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Quantity</label>
                            <input value="{{ $edit->qty }}" name="qty" type="text" class="form-control" placeholder="Masukan Quantity Barang">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Harga</label>
                            <input value="{{ $edit->harga }}" name="harga" type="text" class="form-control" placeholder="Masukan Harga Barang">
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                            <input type="reset" class="btn btn-danger" value="Reset">
                            <a href="
                            {{ url()->previous() }}
                             " class=" btn btn-info">Kembali</a>
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