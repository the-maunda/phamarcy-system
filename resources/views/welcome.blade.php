@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">
          UOE Pharmacy
      </h1>
    <p class="lead">
      Buy all the prescription here at the lowest cost possible.
    </p>
    </div>
  </div>

  <div class="row">
        @forelse ($categories as $category)
        <div class="col m-2">
              <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text">
                            items 
                        </p>
                      </div>
                    </div>
        </div>
        
        @empty
            
        @endforelse
  </div>
 

@endsection