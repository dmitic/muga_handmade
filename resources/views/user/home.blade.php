@extends('user.layout.app')

@section('page-header')
<h2 class="page-header">Dashboard <small>Admin panel</small></h2>
@endsection

@section('content')
{{-- <link rel="stylesheet" href="/css/sb-cards.css"> --}}
<ol class="breadcrumb">
  <li>
    <i class="fa fa-dashboard"></i> <a href="home">Dashboard</a>
  </li>
  <li class="active">
    <i class="fa fa-file"></i> Blank Page
  </li>
</ol>
<!-- Icon Cards-->
{{-- <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-comments"></i>
          </div>
          <div class="mr-5 fs">Proizvodi!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="/admin/proizvodi">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-list"></i>
          </div>
          <div class="mr-5 fs">Korisnici!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="/admin/korisnici">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-shopping-cart"></i>
          </div>
          <div class="mr-5 fs">Ne realizovane narudžbenice!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="/admin/narudzbenice">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-life-ring"></i>
          </div>
          <div class="mr-5 fs">Realizovane narudžbenice!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div> --}}




{{-- VER 2 --}}
  {{-- <div class="container">
      <div class="row">
      <div class="col-md-3">
        <div class="card-counter primary">
          <i class="fa fa-code-fork"></i>
          <span class="count-numbers">12</span>
          <span class="count-name">Flowz</span>
        </div>
      </div>
  
      <div class="col-md-3">
        <div class="card-counter danger">
          <i class="fa fa-ticket"></i>
          <span class="count-numbers">599</span>
          <span class="count-name">Instances</span>
        </div>
      </div>
  
      <div class="col-md-3">
        <div class="card-counter success">
          <i class="fa fa-database"></i>
          <span class="count-numbers">6875</span>
          <span class="count-name">Data</span>
        </div>
      </div>
  
      <div class="col-md-3">
        <div class="card-counter info">
          <i class="fa fa-users"></i>
          <span class="count-numbers">35</span>
          <span class="count-name">Users</span>
        </div>
      </div>
    </div>
  </div> --}}
@endsection