@extends('layouts.admin')

@section('content')
    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" onsubmit="updateEditorContent()">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Редактировать Отзыв</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admins.dashboard') }}">Главная</a></li>
                            <li class="breadcrumb-item">Отзывы</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger m-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Детали Отзыва</h5>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="nav-tab-items-wrapper nav nav-justified invoice-overview-tab-item">
                                        @foreach (['uz', 'en', 'ru'] as $lang)
                                            <li class="nav-item">
                                                <a href="#{{ $lang }}Content" class="nav-link {{ $lang == 'uz' ? 'active' : '' }}" data-bs-toggle="tab">{{ strtoupper($lang) }}</a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="tab-content pt-3">
                                        @foreach (['uz', 'en', 'ru'] as $lang)
                                            <div class="tab-pane fade show {{ $lang == 'uz' ? 'active' : '' }}" id="{{ $lang }}Content">
                                                <div class="form-group pb-3">
                                                    <label for="name_{{ $lang }}">Имя ({{ strtoupper($lang) }}):</label>
                                                    <input type="text" class="form-control" id="name_{{ $lang }}" name="name_{{ $lang }}"
                                                           value="{{ old('name_' . $lang, $testimonial->{'name_' . $lang}) }}" required>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="position_{{ $lang }}">Должность ({{ strtoupper($lang) }}):</label>
                                                    <input type="text" class="form-control" id="position_{{ $lang }}" name="position_{{ $lang }}"
                                                           value="{{ old('position_' . $lang, $testimonial->{'position_' . $lang}) }}" required>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="testimonial_{{ $lang }}">Отзыв ({{ strtoupper($lang) }}):</label>
                                                    <div id="testimonialEditor_{{ $lang }}" style="height:200px;">{!! old('testimonial_' . $lang, $testimonial->{'testimonial_' . $lang}) !!}</div>
                                                    <input type="hidden" id="testimonial_{{ $lang }}" name="testimonial_{{ $lang }}" value="{{ old('testimonial_' . $lang, $testimonial->{'testimonial_' . $lang}) }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Общие данные</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="form-group pb-3">
                                        <label for="company_name">Название компании:</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $testimonial->company_name) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        @foreach (['uz', 'en', 'ru'] as $lang)
        var testimonialEditor{{ ucfirst($lang) }} = new Quill('#testimonialEditor_{{ $lang }}', { theme: 'snow' });
        testimonialEditor{{ ucfirst($lang) }}.root.innerHTML = {!! json_encode(old('testimonial_' . $lang, $testimonial->{'testimonial_' . $lang})) !!};
        @endforeach

        function updateEditorContent() {
            @foreach (['uz', 'en', 'ru'] as $lang)
            document.getElementById('testimonial_{{ $lang }}').value = testimonialEditor{{ ucfirst($lang) }}.root.innerHTML;
            @endforeach
        }
    </script>
@endsection
