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
                                    <a href="#" class="btn btn-white">A</a>
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
                    <!-- card -->
                    <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                        <div class="card">

                            <!-- card body -->
                            <div class="card-body">
                                <!-- card title -->
                                <h4 class="card-title mb-4">Buat Forum</h4>
                                @if(session('success'))
                                <p class="alert alert-success"> <svg class="icon icon-xs me-2" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>{{ session('success') }}</p>
                                @endif
                                <form action="{{route('addforum')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="textInput">Title</label>
                                        <input type="text" id="title" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Masukkan title" value="{{old('title')}}">
                                        @error('title')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="selectOne">Forum (forum dalam forum)</label>
                                        <select id="forum" name="forum" class="form-control">
                                            <option value="">Pilih Forum</option>
                                            @foreach($forum as $key => $fo)
                                            <option value="{{$fo->id}}">{{$fo->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="content">Content</label>
                                        <textarea id="content" name="content"
                                            class="form-control  @error('content') is-invalid @enderror"
                                            placeholder="Content" rows="4">{{old('content')}}</textarea>
                                        @error('content')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Buat</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-12 col-md-12 col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Semua Forum</h4>

                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Jumlah Postingan</th>
                                                <th>Dibuat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($forum as $key => $fo)
                                            <tr>
                                                <td class="align-middle">{{$fo->title}}</td>
                                                <td class="align-middle">{{$fo->content}}</td>
                                                <td class="align-middle">100</td>
                                                <td class="align-middle">{{$fo->created_at}}</td>
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

                    <!-- row  -->
                    <div class="row my-6">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
                            <!-- card  -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- card title -->
                                    <h4 class="card-title mb-4">Semua User</h4>
                                    <div class="table-responsive">
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
                                                                <img src="{{asset('assets')}}/images/avatar/default.png"
                                                                    alt="" class="avatar-md avatar rounded-circle">
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
                        </div>
                        <!-- card  -->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- card title -->
                                    <h4 class="card-title mb-4">Buat Postingan</h4>
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
            </div>
            <!-- Scripts -->
            @include("partials/scripts")


    </body>

</html>