@extends('pointakses.user.layouts.dashboard')

@section('content')
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="600">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Acara</h3>
                    </div>
                    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Nama Event</label>
                                <input type="text" name="title" class="form-control" placeholder="Nama Event" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi Acara</label>
                                <textarea name="description" class="form-control" placeholder="Deskripsi Acara contoh tema acara" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="date">Tanggal Acara</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="type_event">Type Acara</label>
                                <input type="text" name="type_event" class="form-control" placeholder="Contoh Seminar,Lomba,dll" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('user.acara') }}" class="btn btn-secondary">Kembali ke Daftar Acara</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('pointakses.user.include.sidebar_user')
@endsection
