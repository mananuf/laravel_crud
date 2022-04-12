@extends('layout')
@section('content')
  <h1>Show All</h1>
  <table class="table table-striped w-50">
      <tr class="bg-dark">
          <th class="text-light">s/n</th>
          <th class="text-light">State</th>
          <th class="text-light">Capital</th>
          <th class="text-light text-center" colspan="2">Action</th>
      </tr>
      @if (count($all) > 0)
        @foreach ($all as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->state}}</td>
                <td>{{$data->capital}}</td>
                <td><a href="{{URL::to('states/'.$data->id. '/edit')}}" class="btn btn-primary">EDIT</a></td>
                <td><a href="{{URL::to('states/'.$data->id. '/delete')}}" class="btn btn-danger">DELETE</a></td>
            </tr>
        @endforeach
      @endif
  </table>
@endsection