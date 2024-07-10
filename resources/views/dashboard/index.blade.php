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
                    <h1 class="h3 mb-4 text-gray-800">Dashboard Page</h1>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quaerat repellendus provident aliquid perspiciatis 
                        quae odit laboriosam magni obcaecati, explicabo doloremque. 
                        Omnis eos minima voluptatem quidem. Iusto, dolor. Obcaecati, aut enim?
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur 
                        est quos esse sapiente. Est tempora magnam blanditiis quisquam! Autem 
                        doloremque soluta nesciunt dolores consequuntur fuga et praesentium, 
                        ea similique vero?
                    </p>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt 
                        voluptatem quod dolorum. Blanditiis tenetur dolore iure tempora 
                        placeat aliquam quaerat, sed vel accusantium ipsum tempore, quasi 
                        enim est iste velit?
                    </p>

                </div>
                <!-- /.container-fluid -->

            </div>
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