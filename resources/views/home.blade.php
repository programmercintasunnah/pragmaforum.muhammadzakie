@extends('app')
@section('title', 'Forum Pragma Informatika')
@section('content')
<div class="container min-vh-100 d-flex justify-content-center
      align-items-center">
    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-12">
            <!-- content -->
            <div class="text-center">
                <div class="mb-3">
                    <!-- img -->
                    <img src="{{asset('assets')}}/images/avatar/logo-pragma.png" alt="" class="img-fluid">
                </div>
                <!-- text -->
                <h1 class="display-4 fw-bold">Forum Pragma-Informatika</h1>
                <p class="mb-4">selamat datang di forum pragma informatika.</p>
                <!-- button -->
                <a href="/login" class="btn btn-primary">Go To Forum</a>
            </div>
        </div>
    </div>
</div>
@endsection