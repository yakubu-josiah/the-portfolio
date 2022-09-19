@extends('layouts.Layout')
@section('title', 'Admin Section')



@section('content')
<div class="container pt-4 text-center">
    <div class="form-control">
        <h3 class="fs-3 fw-light py-4">THE HOMEPAGE SECTION</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($allData as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['status'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                    <td>
                        <a href="{{ route('admin.index') }}/edit/{{$item->id}}" class="btn btn-sm align-items-center btn-secondary px-3 rounded fs-6 ">Edit</a>
                        <form action="{{ route('admin.delete', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-sm align-items-center btn-secondary px-3 rounded fs-6">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('admin.add') }}" class="btn btn-sm btn-secondary my-4 align-items-center px-3 rounded fs-6">Click Here to Add More </a>
    </div>
    <div class="form-control mt-4">
        <h3 class="fs-3 fw-light py-4">THE ABOUT PAGE SECTION</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Header</th>
                <th scope="col">Sections</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($dataAll as $item)
                <tr>
                    <td>{{ $item->head }}</td>
                    <td class="text-truncate" style="max-width: 150px;">{{ $item->text }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="{{ route('admin-about.edit', $item->id) }}" class="btn btn-sm align-items-center btn-secondary px-3 rounded fs-6">Edit</a>
                        <form action="{{ route('admin-about.delete', $item->id) }}" method="POST" class="d-inline">
                            @csrf           
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-sm align-items-center btn-secondary px-3 rounded fs-6">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('admin.add-about') }}" class="btn btn-sm btn-secondary my-4 align-items-center px-3 rounded fs-6">Click Here to Add More</a>
    </div>
    
</div>
    
@endsection

