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
                    <h1 class="h3 mb-4 text-gray-800">Tambah Penjualan</h1>

                    <form action="{{ route('penjualan.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-4 mb-3">
                                <label for="">Nama User</label>
                                <select name="id_user" id="" class="form-control">
                                    <option value="" disabled selected>Pilih User</option>
                                    @foreach ($data as $key => $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="">Kode Transaksi</label>
                                <input name="kode_transaksi" type="text" class="form-control" value="{{ $kode_transaksi }}">
                            </div>
                            <div class="col-4 mb-3">
                                <label for="">Tanggal Transaksi</label>
                                <input name="tanggal_transaksi" type="date" class="form-control" placeholder="Masukan Tanggal Transaksi">
                            </div>
                        </div>
                        
                        <div class="table-transaction">
                            <div align="right" class="mb-3">
                                <button type="button" class="btn btn-sm btn-primary mx-3" id="tambah-barang">Tambah Barang</button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Total Bayar</th>
                                        <th scope="col">Nominal Bayar</th>
                                        <th scope="col">Kembalian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select name="id_barang[]" id="" class="form-control">
                                                <option value="" disabled selected>Pilih Barang</option>
                                                @foreach ($barang as $b)
                                                    <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input value="" type="number" class="form-control" name="jumlah[]">
                                        </td>
                                        <td>
                                            <input value="" type="number" class="form-control" name="qty[]">
                                        </td>
                                        <td>
                                            <input value="" type="number" class="form-control" name="harga[]">
                                        </td>
                                        <td>
                                            <input value="" type="number" class="form-control" name="total_harga[]">
                                        </td>
                                        <td>
                                            <input value="" type="number" class="form-control" name="total_bayar[]">
                                        </td>
                                        <td>
                                            <input value="" type="number" class="form-control" name="nominal_bayar[]">
                                        </td>
                                        <td>
                                            <input value="" type="number" class="form-control" name="kembalian[]">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script>
        //jquery untuk membuat row baru setiap kali tombol "Tambah Barang" diklik
        $('#tambah-barang').click(function() {
            let tbody = $('tbody');
            let newRow = '<tr>';

            newRow += "<td><select name='id_barang[]' class='form-control'>";
            newRow += "<option value='' disabled selected>Pilih Barang</option>";
            newRow += "@foreach ($barang as $b)";
            newRow += "<option value='{{ $b->id }}'>{{ $b->nama_barang }}</option>";
            newRow += "@endforeach";
            newRow += "</select></td>";

            newRow += "<td><input value='' type='number' class='form-control' name='jumlah[]'</td>";

            newRow += "<td><input value='' type='number' class='form-control' name='qty[]'></td>";

            newRow += "<td><input value='' type='number' class='form-control' name='harga[]'>";

            newRow += "<td><input value='' type='number' class='form-control' name='total_harga[]'>";

            newRow += "<td><input value='' type='number' class='form-control' name='total_bayar[]'>";

            newRow += "<td><input value='' type='number' class='form-control' name='nominal_bayar[]'>";

            newRow += "<td><input value='' type='number' class='form-control' name='kembalian[]'>";

            newRow += '</tr>';

            tbody.append(newRow);
        });
    </script>
</body>

</html>