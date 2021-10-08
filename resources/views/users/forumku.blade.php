@extends('app')
@section('title', 'User - Forum Pragma Informatika')
@section('content')

<div id="">
    {{-- @include("/partials/header") --}}
    <!-- Container fluid -->
    <div class="container-fluid px-6 py-4">
        @include('users/header')
        <!-- content -->
        <div class="py-6">
            <!-- row -->
            <div class="row">
                <div class="col-xl-8 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5
                      align-items-center">
                                <!-- avatar -->
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{asset('assets')}}/images/avatar/default.png" alt=""
                                            class="avatar avatar-md rounded-circle">
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Muhammad Zakie</h5>
                                        <p class="mb-0">19 minutes ago</p>
                                    </div>
                                </div>
                                <div>
                                    <!-- dropdown -->
                                    <div class="dropdown dropstart">
                                        <a href="#" class="text-muted text-primary-hover" id="dropdownprojectFive"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="more-vertical" class="icon-xxs"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownprojectFive">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else
                                                here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <!-- text -->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen disse
                                    var ius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros
                                    dolor interdum nulla, ut commodo diam libero vitae erat.</p>
                                {{-- <img src="../assets/images/blog/blog-img-1.jpg" class="rounded-3 w-100" alt=""> --}}
                            </div>
                            <!-- icons -->
                            <div class="mb-4">
                                <span class="me-1 me-md-4"><i data-feather="heart"
                                        class="icon-xxs text-muted me-2"></i><span>20 Like</span></span>
                                <span class="me-1 me-md-4"><i data-feather="message-square" class="icon-xxs
                          text-muted me-2"></i><span>12 Comment</span></span>
                                <span><i data-feather="share-2" class="icon-xxs
                          text-muted me-2"></i><span>Share</span></span>
                            </div>
                            <div class="border-bottom border-top py-5 d-flex
                      align-items-center mb-4">
                                <!-- avatar group -->
                                <div class="avatar-group me-2 me-md-3">
                                </div>
                                <div><span>You and 20 more liked this</span></div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <div class="col-xl-1 col-lg-2 col-md-2 col-12 mb-3 mb-lg-0">
                                    <!-- avatar -->
                                    <img src="{{asset('assets')}}/images/avatar/default.png"
                                        class="avatar avatar-md rounded-circle" alt="">
                                </div>
                                <!-- input -->
                                <div class="col-xl-11 col-lg-10 col-md-9 col-12 ">

                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-2 col-xxl-1">
                                            <label for="name" class="col-form-label ">Name</label>
                                        </div>
                                        <div class="col-md-8 col-xxl-9  mt-0 mt-md-3">
                                            <input type="password" id="name" class="form-control"
                                                aria-describedby="name">
                                        </div>
                                        <div class="col-md-2 col-xxl-2">
                                            <button type="submit" class="btn btn-primary">Post</button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-12 mb-6">
                    <div class="list-group">
                        @foreach($forumku as $key => $fo)
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$fo->title}}</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">2 forum</p>
                            <p class="mb-1">100 postingan</p>
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection