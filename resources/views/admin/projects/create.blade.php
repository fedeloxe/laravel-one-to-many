@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="{{route('admin.projects.store')}}" method="POST">
                @csrf
              

                <div class="mb-3">
                  <label for="" class="form-label">Aggiungi titolo</label>
                  <input type="text" class="form-control" id="" aria-describedby="" name="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Aggiungi contenuto</label>
                    <textarea rows="5" class="form-control" id="" aria-describedby="" name="content"></textarea>
                </div>
                
                
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Crea il nuovo Post</button>
                </div>
              </form>

        </div>
    </div>
</div>
@endsection