@if (Auth::user()->hasRole('operator'))

    @extends('backend.template.main')

    @section('title', 'Edit Video')

    @section('content')
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('panel.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('panel.video.index') }}">Video</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Video</li>
                </ol>
            </nav>

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Edit Video</h1>
                    <p class="mb-0">Ubah Video Yummy Restoran</p>
                </div>
                <div>
                    <a href="{{ route('panel.video.index') }}"
                        class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <i class="fas fa-arrow-left me-1"></i> Back
                    </a>
                </div>
            </div>
        </div>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- form --}}
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <form action="{{ route('panel.video.update', $video->uuid) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name">Url</label>
                        <input type="text" name="url" id="url"
                            class="form-control @error('url') is-invalid @enderror" value="{{ old('url', $video->url) }}">

                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name">Title</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $video->title) }}">

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name">Description</label>
                        <textarea name="description" id="description" cols="5" rows="5"
                            class="form-control  @error('description') is-invalid @enderror">{{ old('description', $video->description) }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="float-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
@else
    @php
        abort(404);
    @endphp

@endif
