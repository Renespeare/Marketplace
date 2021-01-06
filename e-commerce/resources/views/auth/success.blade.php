@extends('layouts.app')

@section('title')
    ArtSneakers.id - Stay Hype
@endsection

@section('content')
 <!-- Page Content -->
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/images/success-logo.svg" alt="" class="mb-4" />
              <h2>Welcome to ArtSneakersId!</h2>
              <p>Register Successed</p>
              <div>
                <a class="btn btn-dashboard w-50 mt-4" href="/dashboard.html">
                  My Dashboard
                </a>
                <a class="btn btn-signup w-50 mt-2" href="/index.html">
                  Go To Shopping
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection