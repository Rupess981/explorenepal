@extends('layouts.admin.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Category Management
                <small>List of categories</small>
            </h2>

            <a href="{{ route('admin.category.create') }}" class="btn btn-primary pull-right">Add Category</a>

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
                    <th>No of Products</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($category_list as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            {{--Category contains many products. But the products can be null(Empty). That is why we cannot use count functon in the relation. So we check the relation is null or not in the beginning.--}}
                            {{ ($item->productsss) ? $item->products->count() : 0 }}
                        </td>
                        <td>
                            @if($item->is_active == 1)
                                <a href="{{ route('admin.category.statusChange', $item->id) }}" class="btn btn-success">Active</a>
                            @else
                                <a href="{{ route('admin.category.statusChange', $item->id) }}" class="btn btn-danger">Inactive</a>
                            @endif
                        </td>
                        <td>

                            <a href="{{ route('admin.product.index',[$item->id]) }}" class="btn btn-success">View
                                Products</a>


                            <a href="{{ route('admin.category.edit',[$item->id]) }}" class="btn btn-info">Edit</a>


                            <a href="{{ route('admin.category.delete',[$item->id]) }}"
                               class="btn btn-primary">Delete</a>


                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection