@extends('master')

@section('content')

    <div class="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
 <p><img src="img/brisk.jpg" alt="brisk" style="width:100%;height:200px"></p> 
        


        @foreach ($products->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $product)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('buy', [$product->slug]) }}"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></a>
                                <a href="{{ url('buy', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                                <p>{{ $product->price }}</p>
                                </a>
                            </div> 
                        </div> 
                    </div> 
                @endforeach
            </div> 
        @endforeach

    </div> 

@endsection