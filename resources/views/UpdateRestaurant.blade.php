@extends('Layout')

@section('content')
    <div class="col-sm-6">
      <form method="POST" action="/update">

        @csrf
        <div class="form-group">
          <input type="hidden" value={{$restaurant->id}} class="form-control" name="id"  placeholder="Enter name">

          <label for="exampleInputEmail1">Name</label>
          <input type="text" value={{$restaurant->name}} class="form-control" name="name"  placeholder="Enter name">
        
          @error('name') {{$message}}

          
          @enderror
          <br>

          <label for="exampleInputEmail1">Email</label>
          <input value={{$restaurant->email}} type="email" class="form-control" name="email"  placeholder="Enter email">
          @error('email') {{$message}}

          
          @enderror
          <br>


          <label for="exampleInputEmail1">Address</label>
          <input value={{$restaurant->address}} type="text" class="form-control" name="address"  placeholder="Enter Address">

          @error('address') {{$message}}

          
          @enderror
          <br>
          
          
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
@endsection