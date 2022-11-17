@extends('layouts.authmember')

@section('title')
    <title>Member Bidang Dakwah</title>
@endsection

@section('content')
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('../../../assets/img/curved-images/curved8.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card py-lg-3">
                        <div class="card-body text-center">
                            <div class="info mb-4">
                                <img class="avatar avatar-xxl" alt="Image placeholder"
                                    src="https://bidangdakwah.salmanitb.com/public/priba/img/kateg1.png">
                            </div>
                            <h4 class="mb-0 font-weight-bolder">Hai</h4>
                            <p class="mb-4">Enter email to check your member account.</p>
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <form class="form-horizontal" action="{{ route('front.member_check') }}" method="post"
                                novalidate="novalidate">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="email"
                                        name="email">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg bg-gradient-dark mt-3 mb-0">Check</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
