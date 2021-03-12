

@foreach($sliderItems as $sliderItem)
  <!-- Hero Slider Item Start -->
  <div class="hero-slide-item swiper-slide">

  <!-- Hero Slider Bg Image Start -->
  <div class="hero-slide-bg">
      <img src="{{ asset($sliderItem->picture) }}" alt="Slider Image" />
  </div>
  <!-- Hero Slider Bg image End -->

  <!-- Hero Slider Content Start -->
  <div class="container">
      <div class="hero-slide-content">
          <h4 class="subtitle">{{ $sliderItem->subtitle }}</h4>
          <h2 class="title">
          {{ $sliderItem->title }}
          </h2>
          <p>{{ $sliderItem->description }}</p>
          <a href="#" class="btn-link">See Project</a>
      </div>
  </div>
  <!-- Hero Slider Content End -->

  </div>
  <!-- Hero Slider Item End -->
@endforeach