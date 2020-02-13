@include('layouts.app')

<div class="container">
  <div class="row">
    <div class="col-md-12 text-right mb-3">
          <a href="{{route('blogsAdd')}}" class="btn btn-primary">ADD</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><h4>Blog listing</h4></div>
        <div class="card-body">
          <table class="table">
            <thead class="thead-dark">  
              <th>id</th>
              <th>name</th>
              <th>description</th>
              <th>image</th>
              <th>Action</th>
            </thead>
            <tbody>
              <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->name}}</td>
                <td>{{$blog->description}}</td>
                <td>{{$blog->image}} </td>
                <td>
                  <a href="{{route('blogsEdit',['id' => $blog->id])}}" class="btn btn-primary"> Edit</a></td>
                  <a href="{{route('blogsShow',['id' => $blog->id])}}" class="btn btn-success"> Show </a></td>
                  <a href="{{route('blogsDelete',['id' => $blog->id])}}" class="btn btn-danger"> Delete</a></td>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>
  </div>