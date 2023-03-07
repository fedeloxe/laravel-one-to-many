@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="{{route('admin.projects.update', ['project' => $project['slug']])}}" method="POST">
                @csrf
                @method('PUT')
              

                <div class="mb-3">
                  <label for="" class="form-label">Aggiungi titolo</label>
                  <input type="text" class="form-control" id="" aria-describedby="" name="title" value="{{old('title') ?? $project->title}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Aggiungi contenuto</label>
                    <textarea rows="5" class="form-control" id="" aria-describedby="" name="content"></textarea value="{{old('content') ?? $project->content}}">
                </div>
                
                
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Crea il nuovo Post</button>
                </div>
              </form>

        </div>
    </div>
</div>
@endsection