@extends('Layout')

@section('content')
    <div class="col-sm-6">
      <form method="POST" action="/add">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter name">

          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" name="email"  placeholder="Enter email">


          <label for="exampleInputEmail1">Address</label>
          <input type="text" class="form-control" name="address"  placeholder="Enter Address">
          
          
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection