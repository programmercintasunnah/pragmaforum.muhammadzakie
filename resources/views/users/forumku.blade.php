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
                            @foreach($forumku as $key=> $fo)
                            <h2 class="mb-2">#{{$fo->title}}</h2>
                            <h6 class="mb-5">{{$fo->content}}</h6>
                            @foreach($fo->posts as $key => $p)
                            <div class="d-flex justify-content-between mb-5
                      align-items-center">
                                <!-- avatar -->
                                <div class="d-flex align-items-center">
                                    <div>
                                        <img src="{{asset('assets')}}/images/avatar/default.png" alt=""
                                            class="avatar avatar-md rounded-circle">
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">{{($p->users->username)}}</h5>
                                        <p class="mb-0">{{$p->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <p class="mb-4">{{$p->content}}</p>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <span>
                                    {{($p->komentar->where('post_id',$p->id)->count())}}
                                    komentar
                                </span>
                                <small><a href="/user/postinganku/{{$p->id}}">Kasih komentar</a></small>
                            </div>
                            <div class="mb-4">

                            </div>

                            @foreach($p->komentar as $key => $k)
                            <div class="d-flex
                            align-items-center mb-4">

                                <div>
                                    <img src="{{asset('assets')}}/images/avatar/default.png"
                                        class="avatar avatar-md rounded-circle" alt="">
                                    <span class="text-dark p-2">
                                        {{$k->users->username}}
                                    </span>
                                    <span>
                                        {{$k->komen}}
                                    </span>
                                    <div class="ms-14">
                                        <p class="mb-0">{{$k->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <hr>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-12 mb-6">
                    <div class="list-group">
                        @foreach($forumku as $key => $fo)
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">#{{$fo->title}}</h5>
                                <small>{{$fo->created_at->diffForHumans()}}</small>
                            </div>
                            <p class="mb-1">
                                @if($fo->where('parent_id',$fo->id)->count()!=0)
                                {{$fo->where('parent_id',$fo->id)->count()-1}} forum
                                @endif
                            </p>
                            <p class="mb-1">{{$fo->posts->count()}} postingan</p>
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection