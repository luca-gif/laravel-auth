@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-2">
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" value="{{ old('title') }}" name="title" id="title"
                            placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="content">Descrizione</label>
                        <textarea name="content" class="form-control" id="content" cols="50" rows="10">{{ old('content') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
