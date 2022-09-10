@extends('layout.app')
@section('content')
<!-- This is where landing begins -->
<section id="landing">
  <div class="container">
    <div class="justify-content-center align-items-center">
      <div class="text-center">
        <h1 class="text-light">
          <div class="display-6 fw-bold">ADD TO CART</div>
          <div class="display-5 fs-5">
          </div>
        </h1>
      </div>

    </div>
  </div>
  </div>

</section>
<!--product cards begin-->
{!! Form::open(['action' => ['App\Http\Controllers\cartController@index'], 'method'=> 'POST',
'class'=>'editform'])
!!}
<div class="form-group mb-3">
  {{Form::text('email', $product->package_name,
  ['class'=>'form-control border border-0', ])}}
  {{Form::label('email', 'Email Address')}}
  {{Form::text('email', $product->package_name,
  ['class'=>'form-control text-center', ])}}
</div>
<section class="container justify-content-center">
  <div class="card text-center mx-5">
    <span class="card-header fw-bold display-5 pt-4">
      {{Form::text('package_name', $product->package_name,
      ['class'=>'border border-0', 'readonly' ])}}
      {{Form::text('package_size', $product->package_size,
      ['class'=>'border border-0', 'readonly' ])}}
    </span>
    <div class="card-body">
      <span class="display-2">
        ${{Form::text('package_name', $product->package_price,
        ['class'=>'border border-0', 'readonly' ])}}
      </span>
      <p class="display-2">${{$product->package_price}} </p>

      <div class="m-3">
        {{Form::submit('Add to Cart', ['class'=>'btn btn-secondary'])}}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>


@endsection
