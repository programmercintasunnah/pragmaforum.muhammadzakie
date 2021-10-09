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
                <div class="col-xl-4 col-md-12 col-12 mb-6">
                    <div class="list-group">
                        @foreach($postingan as $key => $post)
                        <a href="/user/postinganku/{{$post->id}}" class="list-group-item list-group-item-action">
                            <p class="mb-1 text-dark-success">{{$post->users->username}}</p>
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$post->content}}</h5>
                                <small>{{$post->created_at->diffForHumans()}}</small>
                            </div>
                            <p class="mb-1 text-secondary">{{$post->komentar->count()}} komentar</p>
                        </a>
                        @endforeach
                    </div>

                </div>
                <div class="col-xl-8 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">

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
                                        <h5 class="mb-0 fw-bold">{{($posts->users->username)}}</h5>
                                        <p class="mb-0">{{$posts->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <!-- text -->
                                <p class="mb-4">{{$posts->content}}.</p>
                            </div>
                            <!-- icons -->
                            <div class="mb-4">
                                <span class="me-1 me-md-4">
                                    <i data-feather="message-square" class="icon-xxs
                          text-muted me-2">
                                    </i>
                                    <span>{{$komentar->count()}} komentar</span>
                                </span>
                            </div>
                            @foreach($komentar as $key => $komen)

                            <div class="d-flex
                      align-items-center mb-4">
                                <div>
                                    <img src="{{asset('assets')}}/images/avatar/default.png"
                                        class="avatar avatar-md rounded-circle" alt="">
                                    <span class="text-dark p-2">
                                        {{$komen->users->username}}
                                    </span>
                                    <span>
                                        {{$komen->komen}}
                                    </span>
                                    <div class="ms-14">
                                        <p class="mb-0">{{$komen->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                            <!-- row -->
                            <form action="{{route('komentar')}}" method="post">
                                @csrf
                                <div class="row">

                                    <!-- input -->
                                    <div class="col-xl-12 col-lg-10 col-md-9 col-12 ">

                                        <div class="row g-3 align-items-center">

                                            <div class="col-md-10 col-xxl-9  mt-0 mt-md-3">
                                                <input type="text" hidden name="id" id="id" value="{{$posts->id}}">
                                                <input type="text" id="komen" name="komen"
                                                    class="form-control @error('komen') is-invalid @enderror"
                                                    aria-describedby="name">
                                                @error('komen')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-2 mt-2 col-xxl-2">
                                                <button type="submit" class="btn btn-primary">Comment</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection