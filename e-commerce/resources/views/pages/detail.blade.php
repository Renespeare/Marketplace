@extends('layouts.app')

@section('title')
    ArtSneakers.id - Stay Hype
@endsection

@section('content')
 <!-- Page Content -->
 <div class="page-content page-details">
    <section
      class="store-breadcrumbs"
      data-aos="fade-down"
      data-aos-delay="100"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Details</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-gallery mb-3" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img
                :src="photos[activePhoto].url"
                :key="photos[activePhoto].id"
                class="w-100 main-image"
                alt=""
              />
            </transition>
          </div>
          <div class="col-lg-2">
            <div class="row">
              <div
                class="col-3 col-lg-12 mt-2 mt-lg-0"
                v-for="(photo, index) in photos"
                :key="photo.id"
                data-aos="zoom-in"
                data-aos-delay="100"
              >
                <a href="#" @click="changeActive(index)">
                  <img
                    :src="photo.url"
                    class="w-100 thumbnail-image"
                    :class="{ active: index == activePhoto }"
                    alt=""
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="store-details-container" data-aos="fade-up">
      <section class="store-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h1>{{ $product->name }}</h1>
              <div class="owner">By {{ $product->user->store_name }}</div>
              <div class="price">IDR {{ number_format($product->price) }}</div>
            </div>
            <div class="col-lg-3" data-aos="zoom-in">
              {{-- <label for="size">Size -US-</label>
              <select class="form-control mb-4" id="size">
                <option class="disabled" disabled>8</option>
                <option>9</option>
                <option>10</option>
                <option class="disabled" disabled>10.5</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
              </select> --}}
              {{-- <label for="size">Size -US-</label>
              <<select id="my-select">
                <option value="1">One</option>
                <option class="disabled" disabled value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option class="disabled" disabled value="10.5">10.5</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
              </select> --}}

              @auth
                <a href="{{ route('detail-add',['id'=> $product->id, 'user_id'=> Auth::user()->id] ) }}"
                  class="btn btn-success nav-link px-4 text-white btn-block mb-3">
                  Add to cart
                </a>
              @else
                <a
                  data-aos="zoom-in"
                  data-aos-delay="200"
                  class="btn btn-success nav-link px-4 text-white btn-block mb-3"
                  href="{{ route('login') }}"
                  >Sign In First To Add
                </a>
              @endauth
              
              {{-- <form action="/details/1" method="GET" enctype="multipart/form-data">
                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                  <button
                    type="submit"
                    class="btn btn-success nav-link px-4 text-white btn-block mb-3"
                    >Add to Cart
                  </button>
              </form> --}}
             
            </div>
          </div>
        </div>
      </section>

      <section class="store-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              {!! $product->description !!}
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            @foreach($product->galleries as $gallery)
            {
                id: {{ $gallery->id }},
                url: "{{ Storage::url($gallery->photos) }}",
            },
            @endforeach
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
    {{-- <script>
        document.getElementById('my-select').addEventListener('change', function() {
        console.log('You selected: ', this.value);
        var val = this.value;
        });
    </script> --}}
@endpush
