@extends('layouts.site')
@section('content')
<style>
    .item_content {
        padding-top: 50px;
        text-align: left;
        margin-left: 200px;
    }
    .item_content h3 {
        font-size: 20px;
        color: #c77676;
        font-family: cursive;
        letter-spacing: 1px;
        line-height: 25px;
    }
    .item_content i {
        margin-right: 20px
    }
</style>
    <div class="section section-presentation-page">
        <div class="parallax filter filter-color-red">
            <div class="image" style="background-image:url('site/assets/img/banner-2.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <h3 class="title-modern">Nền tảng y tế</h3>
                    <h2 class="title-second">Chăm sóc sức khỏe toàn diện</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-we-do-presentation">
        <div class="container">
            <div class="title">
                <h3 class="title-text">Chuyên khoa phổ biến</h3>
            </div>
            <!-- Swiper -->
            <div id="swiper">
                <div class="row">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($specialist as $spec)

                                <div class="swiper-slide transition">
                                    <a href="/info-specialist/{{ $spec->id_specialist }}">
                                        <img src="{{ asset('images/' . $spec->image) }}">
                                        <div class="info">{{ $spec->name_specialist }}</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-we-do-presentation">
        <div class="container">
            <div class="title">
                <h3>Bác sĩ nổi bật</h3>
            </div>
            <div id="swiper">
                <div class="row">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($doctor as $doc)

                                <div class="swiper-slide transition">
                                    <a href="/information-doctor/{{ $doc->id_doctor }}">
                                        <img src="{{ asset('images/' . $doc->image) }}">
                                        <div class="info">{{ $doc->full_name }}</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-plain card-blog">
        <div class="row">
            <div class="col-sm-5">
                <div class="content">
                    <h5 class="card-category text-danger">Lifestyle & Trends</h5>
                    <a href="#link" class="card-title">
                        <h2> Cải thiện hơn cuộc sống của bạn</h2>
                    </a>

                    <p class="text-gray"> Hãy chăm sóc sức khỏe của bản thân</p>
                    <div class="item_content">
                        <h3><i class="far fa-check-circle"></i>Khám sức khỏe định kỳ</h3>
                        <h3><i class="far fa-check-circle"></i>Rửa tay sát khuẩn thường xuyên</h3>
                        <h3><i class="far fa-check-circle"></i>Đeo khẩu trang khi ra ngoài</h3>
                        <h3><i class="far fa-check-circle"></i>Hạn chế tập trung đông người</h3>
                        <h3><i class="far fa-check-circle"></i>Khai báo y tế hằng ngày</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <a href="#link" class="header">
                    <img src="../site/assets/img/anh-suc-khoe.jpg">
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($news as $news)
            <div class="col-md-6">
                <div class="card card-blog card-plain">
                    <a href="" class="header">
                        <img src="{{ asset('images/' . $news->image) }}" class="image-header">
                    </a>
                    <div class="content">
                        <h6 class="card-date">tin tức</h6>
                        <div class="line-divider line-danger"></div>
                        <a href="/news-details/{{ $news->id }}" class="card-title">
                            <h3>{{ $news->title }}</h3>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
