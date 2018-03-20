@extends('layouts.app')

@section('content')

    <div class="col-sm-9 col-md-9 col-lg-9 pull-left">

     <div class="row col-sm-12 col-md-12 col-lg-12" style="background:white; margin: 4px;">
     <form method="get" action="{{ route('companies.create') }}">
       {{ csrf_field() }}

        <!-- html form can only take 'get' and 'post' request, to do other than that, have to use hidden
        in this case is 'put' -->
       <input type="hidden" name="_method" value="put">

       <div class="form-group">
        <label for="company-name">Name <span class="required">*</span></label>
        <input placeholder="Enter name"
                id="company-name"
                required
                name="name"
                spellcheck="false"
                class="form-control"/>     
       </div>


       <div class="form-group">
        <label for="company-content">Description</label>
            <textarea placeholder="Enter description"
                    id="company-content"
                    name="description"
                    row="5" style="resize: vertical"
                    spellcheck="false"
                    class="form-control autosize-target text-left">
            </textarea>     
       </div>
     
     <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Submit"/>     
     </div>
    </form>
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
              <li><a href="/companies">List of Companies</a></li>
            </ol>
          </div>
        </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>

@endsection 