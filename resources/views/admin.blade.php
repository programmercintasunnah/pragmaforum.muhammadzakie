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
                                    <h3 class="mb-0 fw-bold text-black mt-2">{{ucwords(Auth::user()->name)}}</h3>
                                    <h5 class="mb-0 fw-bold text-black mt-0">{{Auth::user()->username}}</h5>
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
                                    <h1 class="fw-bold">{{$users->count()}}</h1>
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
                                    <h1 class="fw-bold">{{$forum->count()}}</h1>
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
                                        <h4 class="mb-0">Postingan</h4>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">{{$postingan->count()}}</h1>
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
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="bg-white border-bottom-0 py-4">
                            <h4 class="mb-0">Semua Forum</h4>
                        </div>
                        @foreach($forum as $key => $fo)
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-6">
                            <div class="d-md-flex justify-content-between
                                  align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <!-- text -->
                                    <div class="ms-3 ">
                                        <h5 class="mb-1"><a href="#" class="text-inherit">{{$fo->title}}</a></h5>
                                        <p class="mb-0 fs-5 text-muted">{{$fo->content}}</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-10 ms-md-0 mt-3">
                                    <!-- avatar group -->
                                    <div>
                                        15 komentar
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                            <div class="table-resfnsive">
                                <table class="table text-nowrap">
                                    <thead class="table-light">
                                        <tr class="text-center">
                                            <th>Foto</th>
                                            <th>Username</th>
                                            <th>Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $user)
                                        <tr class="">
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{asset('assets')}}/images/avatar/default.png" alt=""
                                                            class="avatar-md avatar rounded-circle">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">{{$user->username}}</td>
                                            <td class="align-middle">{{$user->created_at}}</td>
                                            <td class="align-middle">
                                                detail
                                            </td>
                                        </tr>
                                        @endforeach
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
                            <div class="table-resfnsive">
                                <table class="table text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Judul</th>
                                            <th>Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($postingan as $key => $fst)
                                        <tr>
                                            <td class="align-middle">{{$fst->content}}</td>
                                            <td class="align-middle">{{$fst->created_at}}</td>
                                            <td class="align-middle">
                                                detail
                                            </td>
                                        </tr>
                                        @endforeach
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