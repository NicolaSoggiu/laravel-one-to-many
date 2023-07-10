@extends('admin.layouts.base')

@section('contents')
    <h1 class="main-title py-3">Add new project</h1>
    <form method="POST" action="{{ route('admin.projects.store') }}" novalidate>
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >
            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select class="form-select" aria-label="Default select example" name="type_id" class="form-control @error('type_id') is-invalid @enderror">
            <option selected>Choose a type...</option>
            @foreach($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
            @error('type_id') {{ $message }} @enderror
        </div>
        </div>

        <div class="mb-3">
            <label for="url_image" class="form-label">Immagine</label>
            <input 
                type="url"
                class="form-control @error('url_image') is-invalid @enderror"
                id="url_image"
                name="url_image"
                value="{{ old('url_image') }}"
            >
            <div class="invalid-feedback">
                @error('url_image') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="repo" class="form-label">Nome repository</label>
            <input
                type="text"
                class="form-control @error('repo') is-invalid @enderror"
                id="repo"
                name="repo"
                value="{{ old('repo') }}"
            >
            <div class="invalid-feedback">
                @error('repo') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="languages" class="form-label">Linguaggi</label>
            <input
                type="text"
                class="form-control @error('languages') is-invalid @enderror"
                id="languages"
                name="languages"
                value="{{ old('languages') }}"
            >
            <div class="invalid-feedback">
                @error('languages') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea
                class="form-control @error('description') is-invalid @enderror"
                id="description"
                rows="3"
                name="description">{{ old('description') }}</textarea>
            <div class="invalid-feedback">
                @error('description') {{ $message }} @enderror
            </div>
        </div>

        <button class="btn btn-primary">Salva</button>
    </form>
@endsection


<style lang="scss" scoped>
    .main-title{
        color: white;
    }

    form{
        color: white;
    }
</style>