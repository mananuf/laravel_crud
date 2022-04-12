@extends('layout')

@section('content')
    <!-- forms start-->
    <form action="/show" method="POST" class="col-lg-6 form-style mt-4" >
      @csrf <!-- {{ csrf_field() }} -->
      <div class="form-group mt-3">
          <input type="text" class="form-control" name="state" id="state" placeholder="state">
      </div> 
      <div class="form-group mt-3">
          <input type="text" class="form-control" name="capital" id="state" placeholder="capital">
      </div> 
      <div class="form-group mt-3">
          <input type="submit"  name="submit" value="submit" class="btn btn-primary">
      </div>   
  </form>
  <!-- forms start-->
@endsection