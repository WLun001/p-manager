@extends('layouts.app')

@section('content')

    <div class="col-sm-9 col-md-9 col-lg-9 pull-left">
      <div class="jumbotron">
        <h1>{{ $company->name }}</h1>
        <p class="lead">{{ $company->description }}</p>
        <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

     <div class="row" style="background:white; margin: 4px;">
     @foreach($company->projects as $project)
        <div class="col-sm-4 col-md-4 col-lg-4">
          <h2>{{ $project->name }}</h2>
          <p class="text-danger">As of v9ur broeshing.</p>
          <p>{{ $project->description}} </p>
          <p><a class="btn btn-primary" href="/projects/show/{{ $project->id }}" role="button">View project details »</a></p>
        </div>
      @endforeach
      </div>
    </div>

      <!-- side bar -->
      <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->

         <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{ $company->id }}/edit">Edit Company</a></li>
              <li><a href="/companies/create">Create New Company</a></li>
              <li><a href="/companies">List of Companies</a></li>
              <li><a href="/projects/create">Add Project</a></li>
              <li>
               <a href="#"
                    onclick="
                    var result = confirm('Are you sure you wish to delete this project?');
                    if(result){
                       event.preventDefault();
                       document.getElementById('delete-form').submit();
                    }">Delete Company</a>
              <form id="delete-form" action="{{ route('companies.destroy', [$company->id]) }}"
                    method="post" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
              </form>
              
              </li>





            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
     
        </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>

@endsection 