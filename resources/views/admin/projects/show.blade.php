@extends('layouts.admin')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Slug</th>
        <th scope="col">type</th>
        <th scope="col">Elimina</th>
        <th scope="col">Modifica</th>
        <th scope="col">Vedi</th>
      </tr>
    </thead>
    <tbody>
       
        <tr>
          <td>{{$project->title}}</td>
          <td>{{$project->content}}</td>
          <td>{{$project->slug}}</td>
          <td>{{$project['type'] ? $project['type']['name'] : 'nessun tipo'}}</td>
          <td>
            <div>
              <form action="{{route('admin.projects.destroy', ['project' => $project['slug']] )}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
              </form>
          </div>
          </td>
          <td>
            <a href="{{route('admin.projects.edit', $project->slug)}}">
              <button class="btn btn-secondary">
                <i class="fa-regular fa-pen-to-square"></i>
              </button>
            </a>
          </td>
          <td>
            <a href="{{route('admin.projects.show', $project->slug)}}">
              <button class="btn btn-warning">
                <i class="fa-solid fa-eye"></i>
              </button>
            </a>
          </td>
        </tr>
        
    </tbody>
  </table>
@endsection