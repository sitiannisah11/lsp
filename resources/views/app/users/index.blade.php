@extends('layouts.master')

@section('content')
<div id="app">
	<div class="main-wrapper main-wrapper-1">
	<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Default</h4>
                  </div>
                  <div class="card-body">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                      </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                      </ol>
                    </nav>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Icon</h4>
                  </div>
                  <div class="card-body">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><i class="fas fa-tachometer-alt"></i> Home</li>
                      </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Background</h4>
                  </div>
                  <div class="card-body">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-primary text-white-all">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                      </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-warning text-white-all">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                      </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-success text-white-all">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                      </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-danger text-white-all">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                      </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-secondary text-white-all">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                      </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-dark text-white-all">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><i class="far fa-file"></i> Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Data</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
    	</section>
	</div>
</div>
@endsection