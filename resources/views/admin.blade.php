<!DOCTYPE html>
<html lang="en">

    <head>
        @include("partials/head")
        <title>Admin - Forum PragmaInformatika</title>
    </head>

    <body>
        <!-- Page content -->
        <div id="">
            @include("partials/header")
            <!-- Container fluid -->
            <div class="bg-primary pt-10 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 fw-bold text-white">Welcome Administrator</h3>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-white">Create New Forum</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6 red">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                    <div>
                                        <h4 class="mb-0">Users</h4>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">18</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                    <div>
                                        <h4 class="mb-0">Forum</h4>
                                    </div>

                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">132</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                    <div>
                                        <h4 class="mb-0">Thread</h4>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">12</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                    <div>
                                        <h4 class="mb-0">Solved</h4>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">52</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row  -->
                <div class="row mt-6">
                    <div class="col-md-12 col-12">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white border-bottom-0 py-4">
                                <h4 class="mb-0">Semua Forum</h4>
                            </div>
                            <!-- table  -->
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Nama Forum</th>
                                            <th>Jumlah Forum Dalam Forum</th>
                                            <th>Jumlah Postingan</th>
                                            <th>Solved</th>
                                            <th>Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td class="align-middle">
                                                1
                                            </td>
                                            <td class="align-middle">
                                                CHELSEA FC
                                            </td>
                                            <td class="align-middle">
                                                10
                                            </td>
                                            <td class="align-middle">
                                                100
                                            </td>
                                            <td class="align-middle">
                                                15
                                            </td>
                                            <td class="align-middle">
                                                06/10/2021
                                            </td>
                                            <td class="align-middle">
                                                detail edit delete
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- row  -->
                <div class="row my-6">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
                        <!-- card  -->
                        <div class="card h-100">
                            <!-- card header  -->
                            <div class="card-header bg-white border-bottom-0 py-4">
                                <h4 class="mb-0">Semua Users</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Foto</th>
                                            <th>Username</th>
                                            <th>Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/avatar/avatar-1.jpg" alt=""
                                                            class="avatar-md avatar rounded-circle">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">Front End Developer</td>
                                            <td class="align-middle">3 May, 2021</td>
                                            <td class="align-middle">
                                                detail edit delete
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- card  -->
                    <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                        <div class="card h-100">
                            <!-- card header  -->
                            <div class="card-header bg-white border-bottom-0 py-4">
                                <h4 class="mb-0">Semua Postingan</h4>
                            </div>
                            <!-- table  -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Judul</th>
                                            <th>Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle">Front End Developer</td>
                                            <td class="align-middle">3 May, 2021</td>
                                            <td class="align-middle">
                                                detail edit delete
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        @include("partials/scripts")


    </body>

</html>