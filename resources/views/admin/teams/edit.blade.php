@extends('layouts.admin')

@section('content')
    <form action="{{ route('teams.update', $team->id) }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Редактировать команду</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admins.dashboard') }}">Главная</a></li>
                            <li class="breadcrumb-item">Команды</li>
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
                                    <h5 class="card-title">Детали команды</h5>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="nav-tab-items-wrapper nav nav-justified invoice-overview-tab-item">
                                        <li class="nav-item">
                                            <a href="#uzContent" class="nav-link active" data-bs-toggle="tab" data-bs-target="#uzContent">O'zbekcha</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#enContent" class="nav-link" data-bs-toggle="tab" data-bs-target="#enContent">English</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#ruContent" class="nav-link" data-bs-toggle="tab" data-bs-target="#ruContent">Русский</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        @foreach (['uz', 'en', 'ru'] as $lang)
                                            <div class="tab-pane fade show {{ $lang == 'uz' ? 'active' : '' }}" id="{{ $lang }}Content">
                                                <div class="form-group pb-3">
                                                    <label for="name_{{ $lang }}">Имя ({{ strtoupper($lang) }}):</label>
                                                    <input type="text" class="form-control" id="name_{{ $lang }}" name="name_{{ $lang }}" value="{{ old('name_' . $lang, $team->{'name_' . $lang}) }}" required>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="position_{{ $lang }}">Должность ({{ strtoupper($lang) }}):</label>
                                                    <input type="text" class="form-control" id="position_{{ $lang }}" name="position_{{ $lang }}" value="{{ old('position_' . $lang, $team->{'position_' . $lang}) }}" required>
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
                                    <h5 class="card-title">Дополнительно</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="form-group pb-3">
                                        <label for="image">Новое изображение:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="form-group pb-3">
                                        @if (!empty($team->image))
                                            <div class="mb-3">
                                                <img src="{{ asset('storage/' . $team->image) }}" alt="Текущее изображение" class="img-fluid rounded" width="150">
                                            </div>
                                        @else
                                            <p class="text-muted">Изображение не загружено.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>
    <script>
        // Tillarni o'zgartirish uchun tugmalarni ulash
        document.querySelectorAll('.nav-link').forEach((tab) => {
            tab.addEventListener('click', function (e) {
                // Hozirgi faollikni o'chirish
                document.querySelectorAll('.tab-pane').forEach((pane) => {
                    pane.classList.remove('active', 'show');
                });

                // Yangi tilni faollashtirish
                const targetId = this.getAttribute('data-bs-target');
                const targetTab = document.querySelector(targetId);

                if (targetTab) {
                    targetTab.classList.add('active', 'show');
                }
            });
        });
    </script>
@endsection
