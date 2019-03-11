@extends('layouts.admin.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Product Management<small>List of products</small></h2>

            <a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right">Add Product</a>

        </div>

        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach

        @if(session()->has('message'))
            {{ session()->get('message') }}
        @endif

        <div class="card-body table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            {{ $item->category->name }}
                        </td>
                        <td>
                            @if($item->is_active == 1)
                                <a href="{{ route('admin.product.statusChange', $item->id) }}" class="btn btn-success">Active</a>
                            @else
                                <a href="{{ route('admin.product.statusChange', $item->id) }}" class="btn btn-danger">Inactive</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin.product.edit', $item->id)}}" class="btn btn-info">Edit</a>


                            <a href="{{route('admin.product.delete', $item->id)}}" class="btn btn-danger">Delete</a>


                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection