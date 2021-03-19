@extends('Layout')

@section('content')
    <div class="col-sm-6">
      <form method="POST" action="/add">

        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter name">
        
          @error('name') {{$message}}

          
          @enderror
          <br>

          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" name="email"  placeholder="Enter email">
          @error('email') {{$message}}

          
          @enderror
          <br>


          <label for="exampleInputEmail1">Address</label>
          <input type="text" class="form-control" name="address"  placeholder="Enter Address">

          @error('address') {{$message}}

          
          @enderror
          <br>
          
          
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection