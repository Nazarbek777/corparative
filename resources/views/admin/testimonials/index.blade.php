@extends('layouts.admin')
@section('title', 'Список отзывов')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Список отзывов</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admins.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Отзывы</li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="main-content p-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="px-2 py-3">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="bold">Отзывы</h4>
                                        <div class="">
                                            <div class="dataTables_filter">
                                                <a href="{{ route('testimonials.create') }}" class="btn btn-sm btn-primary">Добавить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="testimonialsList">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Имя (РУ)</th>
                                            <th>Должность (РУ)</th>
                                            <th>Компания</th>
                                            <th>Отзыв (РУ)</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($testimonials as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name_ru }}</td>
                                                <td>{{ $item->position_ru }}</td>
                                                <td>{{ $item->company_name }}</td>
                                                <td>{!! Str::limit($item->testimonial_ru, 50) !!}</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('testimonials.show', $item->id) }}" class="avatar-text avatar-md d-none">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <a href="{{ route('testimonials.edit', $item->id) }}" class="avatar-text avatar-md">
                                                            <i class="feather feather-edit-3"></i>
                                                        </a>
                                                        <form action="{{ route('testimonials.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="border-0 bg-transparent js-delete-btn" type="submit"  onclick="return confirm('Ushbu faoliyatni o‘chirishni xohlaysizmi?')">
                                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="O'chirish" aria-label="O'chirish">
                                                                    <i class="feather-trash-2"></i>
                                                                </a>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @if ($testimonials->isEmpty())
                                    <div class="card-body">
                                        <p class="text-center">На данный момент Testimonial нет.</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
