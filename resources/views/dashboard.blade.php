@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col">Column</div>
      <div class="col">Column</div>
      <div class="w-100"></div>
      <div class="col">Column</div>
      <div class="col">Column <span class="bi bi-search" style="height: 200px" ></div>
        <div><i class="fas fa-cloud"></i>
        <i class="fas fa-coffee"></i>
        <i class="fas fa-car"></i>
        <i class="fas fa-file"></i>
        <i class="fas fa-bars"></i>
            </div>

    </div>
    <button type="submit" class="btn btn-primary"><span class="fa fa-search"></span> Search</button>
<button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Search</button>
<i class="bi bi-people"></i>

</div><i class="bi bi-arrow-right bi-lg"></i>
<i class="bi bi-camera bi-10x"></i>
@endsection

