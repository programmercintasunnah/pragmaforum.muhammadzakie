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
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <h4 class="card-title mb-4">Buat Postingan</h4>
                            <form>
                                <!-- Input -->
                                <div class="mb-3">
                                    <label class="form-label" for="textInput">Judul</label>
                                    <input type="text" id="textInput" class="form-control" placeholder="Input Text">
                                    <span class="text-muted ">Your password must be 8-20
                                        characters long, contain letters and numbers, and must not
                                        contain spaces, special characters, or emoji.</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="selectOne">Forum</label>
                                    <select id="selectOne" class="form-control">
                                        <option>Pilih Forum</option>
                                        @foreach($forum as $key => $fo)
                                        <option value="{{$key}}">{{$fo->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="textareaInput">Konten</label>
                                    <textarea id="textareaInput" class="form-control" placeholder="Textarea field"
                                        rows="4"></textarea>
                                </div>
                                <button type="button" class="btn btn-primary">Buat</button>
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
                            <div class="d-md-flex justify-content-between
                      align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <!-- text -->
                                    <div class="ms-3 ">
                                        <h5 class="mb-1"><a href="#" class="text-inherit">Slack Figma Design
                                                UI</a></h5>
                                        <p class="mb-0 fs-5 text-muted">Project description and details about...</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-10 ms-md-0 mt-3">
                                    <!-- avatar group -->
                                    <div>
                                        15 komentar
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection