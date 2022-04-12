@extends('layout')

@section('content')
    <!-- forms start-->
    <form action="{{ URL::to('update/'. $states->id . '/edit') }}" method="POST" class="col-lg-6 form-style mt-4" >
      @csrf <!-- {{ csrf_field() }} -->
      @method('PUT')
      <h2 class="p-2 text-center" >EDIT DATA</h2>
      <div class="form-group mt-3">
          <input type="text" class="form-control" value="{{$states->state}}" name="state" id="state" placeholder="state">
      </div> 
      <div class="form-group mt-3">
          <input type="text" class="form-control" value="{{$states->capital}}"  name="capital" id="state" placeholder="capital">
      </div> 
      <div class="form-group mt-3">
          <input type="submit"  name="submit" value="Edit" class="btn btn-primary">
      </div>   
  </form>
  <!-- forms start-->
@endsection