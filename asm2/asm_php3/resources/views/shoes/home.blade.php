@extends('layouts.app')

@section('title', 'Trang chủ')
@section('content')
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.converse.vn/media/wysiwyg/homepage/CHUCK_70_ENG_Tertiary_Desktop.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.converse.vn/media/wysiwyg/Mailing/Mailing_Desktop.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="      https://www.converse.vn/media/weltpixel/owlcarouselslider/images/r/u/run-star-trainer-eng-secondary-desktop_2_.gif
" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div class="categories">
    <h3 class="title text-center mt-4 mb-2">
        Bộ sưu tập nổi bật
    </h3>
    <div class="row">
        <div class="col-md-3"><a href=""><img class="img-thumbnail" src="https://www.converse.vn/media/wysiwyg/trending/Chuck_70_1_.jpg" alt=""></a></div>
        <div class="col-md-3"><a href=""><img class="img-thumbnail" src="https://www.converse.vn/media/wysiwyg/trending/Classic_Chuck_1_.jpg" alt=""></a></div>
        <div class="col-md-3"><a href=""><img class="img-thumbnail" src="https://www.converse.vn/media/wysiwyg/trending/elevation_1_.jpg" alt=""></a></div>
        <div class="col-md-3"><a href=""><img class="img-thumbnail" src="https://www.converse.vn/media/wysiwyg/trending/Comfort_1_.jpg" alt=""></a></div>
    </div>
</div>
<div class="sales bg-danger">
    <h3 class="title text-center mt-4 mb-2 pt-4 text-warning" >
        Giảm giá sốc
    </h3>
    <div class="row m-4 p-4">
        <div class="col"><a href=""><img class="img-thumbnail" src="https://www.converse.vn/media/weltpixel/owlcarouselslider/images/s/e/secondary_desktop.jpg" alt=""></a></div>
    </div>
</div>
<div class="products">
    <h3 class="title text-center mt-4 mb-2">
        Các sản phẩm khác
    </h3>
    <div class="row">
    @foreach ($shoes as $shoe)
        <div class="col-3 mt-2">
            <div class="card" style="width: 18rem;">
                <img src="{{ $shoe->image }}" class="card-img-top" alt="{{ $shoe->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $shoe->name }}</h5>
                  <p class="card-text">{{ $shoe->content }}</p>
                  <a href="{{ route('shoes.show', $shoe->id) }}" class="btn btn-primary">Xem chi tiết</a>
                </div>
                </div>
        </div>
    @endforeach
    </div>
    <!-- Hiển thị liên kết phân trang -->
    {{ $shoes->links('pagination::bootstrap-4') }}
</div>
@endsection
