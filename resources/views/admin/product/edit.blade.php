@extends('layouts.admin.master')

@section('content')



    <div class="card">

        <form class="form-horizontal" role="form" method="post" action="{{ route('admin.product.update') }}">
            <div class="card-header">
                <h2>Product Management<small>Edit a Product</small></h2>
            </div>

            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach

            @if(session()->has('message'))
                {{ session()->get('message') }}
            @endif
            <div class="card-body card-padding">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <div class="fg-line">
                            <input name="title" type="text" class="form-control input-sm" id="inputEmail3" placeholder="Name" value="{{ $cat->name }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </div>
            </div>
            <input type="hidden" name="product_id" value="{{ $cat->id }}">
            {{ csrf_field() }}
        </form>
    </div>

@endsection