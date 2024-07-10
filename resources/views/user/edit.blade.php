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
                    <h1 class="h3 mb-4 text-gray-800">Edit Pengguna</h1>

                    <form action="
                    {{ route('user.update', $edit->id) }}
                     " method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <input value="{{ $edit->nama_lengkap }}" name="nama_lengkap" type="text" class="form-control" placeholder="Masukan Nama Anda">
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Level</label>
                          <select name="id_level" class="form-control">
                            <option value="" disabled selected>Pilih Level</option>
                            @foreach ($data as $key => $item)
                            <option value="{{ $item->id }}" {{ $edit->id_level == $item->id ? 'selected' : '' }}>{{ $item->nama_level }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input value="{{ $edit->email }}" name="email" type="text" class="form-control" placeholder="Masukan Email Anda">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Masukan Password Anda">
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