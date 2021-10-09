<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div>
            <div class="border-bottom pb-4 mb-4 ">
                <div class="mb-2 mb-lg-0">
                    <h3 class="mb-0 fw-bold">Forum Pragma-Informatika</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <!-- Bg -->
        <div class="pt-20 rounded-top" style="background:
        url({{asset('assets')}}/images/background/profile-cover.jpg) no-repeat;
        background-size: cover;">
        </div>
        <div class="bg-white rounded-bottom smooth-shadow-sm ">
            <div class="d-flex align-items-center justify-content-between
          pt-4 pb-6 px-4">
                <div class="d-flex align-items-center">
                    <!-- avatar -->
                    <div class="avatar-xxl avatar-indicators avatar-online me-2
              position-relative d-flex justify-content-end
              align-items-end mt-n10">
                        <img src="{{asset('assets')}}/images/avatar/default.png" class="avatar-xxl
                rounded-circle border border-4 border-white-color-40" alt="">
                        <a href="#!" class="position-absolute top-0 right-0 me-2" data-bs-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Verified">
                            <img src="{{asset('assets')}}/images/svg/checked-mark.svg" alt="" height="30" width="30">
                        </a>
                    </div>
                    <!-- text -->
                    <div class="lh-1">
                        <h2 class="mb-0">{{ucwords(Auth::user()->name)}}
                            <a href="#!" class="text-decoration-none" data-bs-toggle="tooltip" data-placement="top"
                                title="" data-original-title="Beginner">

                            </a>
                        </h2>
                        <p class="mb-0 d-block">{{Auth::user()->username}}</p>
                    </div>
                </div>
                <div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary
              d-none d-md-block">Logout</button>
                    </form>
                </div>
            </div>
            <!-- nav -->
            <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link {{request()->is('user')?'active':''}}" href="/user">Home</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link {{request()->is('user/postinganku/'.$posts->id)?'active':''}}"
                        href="/user/postinganku/{{$posts->id}}">Postingan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->is('user/forumku/'.$posts->id)?'active':''}}"
                        href="/user/forumku/{{$posts->id}}">Forum</a>
                </li>
            </ul>
        </div>
    </div>
</div>