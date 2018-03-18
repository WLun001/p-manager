@extends('layouts.app')

@section('content')
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>{{ $company->name }}</h1>
        <p class="lead">{{ $company->description }}</p>
        <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

     @foreach($company->projects as $project)
      <div class="row">
        <div class="col-lg-4">
          <h2>{{ $project->name }}</h2>
          <p class="text-danger">As of v9ur broeshing.</p>
          <p>{{ $project->description}} </p>
          <p><a class="btn btn-primary" href="/projects/show/{{ $project->id }}" role="button">View project details »</a></p>
        </div>
      </div>
      @endforeach

      <!-- Site footer -->
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>


@endsection 