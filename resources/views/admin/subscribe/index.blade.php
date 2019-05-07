@extends('layouts.admin.master')

@section('content')


    <div class="card">
        <div class="card-header">
            <h2>Subscription <small>customer subscribed to our services</small></h2>
        </div>

        <div class="card-body table-responsive">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach

            @if(session()->has('message'))
                {{ session()->get('message') }}
            @endif
            <table class="table">

                <thead>
                <tr>
                    <th>sn</th>
                    <th>Name</th>
                    <th>email</th>
                </tr>
                </thead>
                <tbody>

                @foreach($subscribes as $data)

                    <tr>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>


    @endsection