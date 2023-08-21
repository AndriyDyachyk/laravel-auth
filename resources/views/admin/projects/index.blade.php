@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>I miei progetti</h1>
                <div class="col-12 mt-5">
                    @foreach ($projects as $project)
                    <div class="card my-4">
                        <!-- CARD HEADER -->
                        <h5 class="card-header d-flex justify-content-between">
                            <div>
                                {{$project->id}}
                            </div>
                            <div class="d-flex">
                                <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-sm btn-primary mx-2">
                                <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-warning mx-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form class="d-line-block" action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger mx-2">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </h5>

                        <!-- CARD BODY -->
                        <div class="card-body">
                            <h5 class="card-title">{{$project->title}}</h5>
                            <p class="card-text">{{$project->description}}</p>
                            <p class="card-text">App utilizzate: {{$project->used_apps}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection