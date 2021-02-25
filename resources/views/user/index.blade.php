@extends('layouts.app');
@section('content')
<div class="container">
<table class="table  table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Login</th>
        <th scope="col">Full name</th>
        <th scope="col">Job title</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
      <tr>
        <th scope="row">{{ $user->id ?? null}}</th>
        <td>{{ $user->name ?? null}}</td>
        <td>{{ $user->userProfile->first_name ?? null}} {{  $user->userProfile->last_name ?? null}}</td>
        <td>{{ $user->userProfile->job_title ?? null }}</td>
        <td><a class="btn btn-outline-primary" href="{{ route('user.show', ['user' => $user->id]) }}">Show</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  @endsection


