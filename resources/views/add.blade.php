
@include('layouts.app')

<div class="container">
  <div class="row">
    <div class="col md-12 text-right mb-3"> 
    <a href="{{route('blog')}}" class="btn btn-primary"> Back </a>
    </div>
  </div>
  <div class="row-md-12">
      
      <div class="card">
        <div class="card-header"><h4>Blogs/Add</h4></div>
        <div class="card-body">
          <form action="{{route('blogsAdd')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label> Name</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">  
              <label> Description</label>
              <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label> Image</label>
              <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary"> Save </button>
            </div>
          </form>
        
        </div>
    
    
  </div>
  </div>

</div>
