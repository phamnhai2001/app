@extends('layouts.site')
@section('content')
    <div class="wrapper">
        <div class="section section-contact-form">
            <div class="container">

            </div>
        </div>
    </div>
    <div class="section">
        <div class="text-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        @if ($message = Session::get('error'))
                            <div class="alert alert-warning">
                                <div>
                                    <div class="alert-icon">
                                        <i class="material-icons">check</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    <h3>{{ $message }}</h3>
                                </div>
                            </div>
                        @endif
                        <div class="title-area">
                            {{ $specialist->name_specialist }}
                            <div>
                            <img src="{{ asset('images/' . $specialist->image) }}">
                            <p>
                                {!! $specialist->introduce !!}
                            </p>
                        </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <div class="description">
                            <h3>Danh sách bác sĩ</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
