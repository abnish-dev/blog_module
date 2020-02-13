
@include('layouts.app')

<div class="container">
  <div class="row">
    <div class="col-md-12 float-right bg-primary"> 
    <a href="{{route('blog')}}" class="btn btn-primary"> Back </a>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h4>Blogs/Edit</h4></div>
        <div class="card-body">
          <form action="{{route('blogsEdit',['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label> Name</label>
              <input type="text" name="name" id="name" value="{{old('name',$blog->name)}}" class="form-control">
            </div>

            <div class="form-group">
              <label> Description</label>
              <textarea name="description" id="description" class="form-control">{{old('description', $blog->description)}}</textarea>
            </div>

            <div class="form-group">
              <label> Image</label>
              <input type="file" name="image" value="{{old('image', $blog->image)}}" class="form-control" >
            </div>


            <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary"> Update </button>
                </div>
          </form>
        
        </div>
      </div>
    </div>
  </div>

</div>
