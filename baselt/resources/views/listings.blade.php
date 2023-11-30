

@extends('layout')
@section('content')

@if(session()->has('message'))

<div class="alert alert-success" role="alert">
    u mad a new lisitng
</div>

@endif


@if(session()->has('message2'))

<div class="alert alert-info" role="alert">
    u mad the editing
</div>

@endif









<table class="table">
    <thead>


        <tr>
            <th scope="col">Title</th>
            <th scope="col">tags</th>
            <th scope="col">company</th>
            <th scope="col">location</th>
            <th scope="col">id</th>
            <th scope="col">Edit</th>




          </tr>

@foreach ($listings as $listing)






<tr>

    <td>{{$listing['title']}}</td>
    <td>{{$listing['tags']}}</td>
    <td>{{$listing['company']}}</td>
    <td>{{$listing['location']}}</td>
    <td><a href="/listings/{{$listing['id']}}" class="btn btn-info">ID </a><br></td>
    <td><a href="/listings/{{$listing['id']}}/edit" class="btn btn-light">Edit </a><br></td>



  </tr>






@endforeach


    </tbody>
  </table>

  <a href="/listings/create" class="btn btn-info">Add lisitng</a>


@endsection










