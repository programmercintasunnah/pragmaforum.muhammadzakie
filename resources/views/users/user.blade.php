@extends('app')
@section('title', 'User - post Pragma Informatika')
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

                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <h4 class="card-title mb-4">Buat Postingan</h4>
                            @if(session('success'))
                            <p class="alert alert-success"> <svg class="icon icon-xs me-2" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>{{ session('success') }}</p>
                            @endif

                            <form action="{{route('addpost')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="selectOne">Forum</label>
                                    <select id="forum" name="forum"
                                        class="form-control @error('forum') is-invalid @enderror">
                                        <option value="">Pilih Forum</option>
                                        @foreach($forum as $key => $fo)
                                        <option value="{{$fo->id}}">{{$fo->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('forum')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <h4 class="card-title mb-4">Postingan</h4>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection