@extends('template.main')

@section('title', 'Categories')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                        Categories List
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td class="fw-bold">{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
