@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Dashboard</div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 p-0">
      <a href="javascript:;"></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"> Control panel</li>
    </ol>
  </nav>
    </div>
       <hr>
          <div class="col">
            <div class="d-flex align-items-center gap-3">
                <div class="card border-primary rounded-4" >
                  <img src="assets/images/logoinventori9.jpeg" class="card-img rounded-4" alt="...">
                  <div class="card-img-overlay">
                    <p class="mb-4 text-danger text-uppercase"></p> 
                    <h3 class="card-title text-danger"></h3>       
                  </div>
                  <div class="bottom-0 position-absolute m-3">
                    <a href="" class="btn btn-grd btn-grd-info border-0 d-flex gap-0 px-0">See More<span class="material-icons-outlined">east</span></a>
                  </div>
                </div>
                <div class="card border-warning rounded-4">
                  <img src="assets/images/logoinventori5.jpeg" class="card-img rounded-4" alt="...">
                  <div class="card-img-overlay">
                    <p class="mb-4 text-warning text-uppercase"></p>
                    <h3 class="card-title text-white"></h3>
                  </div>
                  <div class="bottom-0 position-absolute m-3">
                    <a href="" class="btn btn-grd bg-grd-warning border-0 raised d-flex gap-0 px-0">See More<span class="material-icons-outlined">east</span></a>
                  </div>
                </div>
                <div class="card border-info rounded-4">
                    <img src="assets/images/logoinventori8.jpeg" class="card-img rounded-4" alt="...">
                    <div class="card-img-overlay">
                      <p class="mb-4 text-info text-uppercase"></p>
                      <h3 class="card-title text-white"></h3>
                    </div>
                    <div class="bottom-0 position-absolute m-3">
                      <a href="" class="btn btn-grd btn-grd-primary d-flex gap-0 px-0 border-0">See More<span class="material-icons-outlined">east</span></a>
                    </div>
                  </div>
                  <div class="card border-success rounded-4">
                    <img src="assets/images/logopinjaman.jpeg" class="card-img rounded-4" alt="...">
                    <div class="card-img-overlay">
                      <p class="mb-4 text-success text-uppercase"></p>
                      <h3 class="card-title text-white"></h3>
                    </div>
                    <div class="bottom-0 position-absolute m-3">
                      <a href="" class="btn btn-grd btn-grd-primary d-flex gap-0 px-0 border-0">See More<span class="material-icons-outlined">east</span></a>
                    </div>
                  </div>
                  <div class="card border-success rounded-4">
                    <img src="assets/images/logopengembalian.jpeg" class="card-img rounded-4" alt="...">
                    <div class="card-img-overlay">
                      <p class="mb-4 text-success text-uppercase"></p>
                      <h3 class="card-title text-white"></h3>
                    </div>
                    <div class="bottom-0 position-absolute m-3">
                      <a href="" class="btn btn-grd btn-grd-primary d-flex gap-0 px-0 border-0">See More<span class="material-icons-outlined">east</span></a>
                    </div>
                  </div>
              </div>
          </div>
        </div><!--end row-->

@endsection
