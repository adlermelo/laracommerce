@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div>
            <div class="card-headder">
                <h3>Category
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h3>                    
            </div>
            <div class="card-boby">

            </div>
        </div>

    </div>
</div>

@endsection