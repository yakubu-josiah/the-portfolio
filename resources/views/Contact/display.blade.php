@extends('layouts.Layout')
@section('title', 'List Of Complaints')



@section('content')
<div class="container py-5 align-center">
    <h3>Users That Need Support From The-PortFolio Team</h3>

    <div class="row mt-5 uii">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header text-center fs-5">Message List</div>
                <div class="card-body p-0">
                    <ul class="list-group">
                        @foreach ($form as $value) 
                            <a href="/Contact/details/{{$value->id}}" class="text-decoration-none">
                                <li class="list-group-item text-primary">
                                
                                    <p><b>{{$value->name}}</b></p>
                                    <p>{{$value->subject}}</p>
                                
                                </li>
                            </a>
                        @endforeach
                      </ul> 
                </div>
            </div>
        </div>

        
    </div>

    {{-- @forelse ($form as $key => $form)
        <div class="container justify-center">
            <div class="mx-2 my-2 ">
                <h3> <a href="{{ route('Contact.show', [$form->id] )}}" class=" text-decoration-none"> {{ $form->subjectt }}</a></h3>
            </div>

            <div class="mb-4">
                <a href="{{ route('Contact.edit', [$form->id]) }}" class="btn btn-sm btn-secondary">Edit</a>
                <form action="{{ route('Contact.destroy', [$form->id]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-secondary">            
                </form>
            </div>
        </div>
        @empty
        <p>No Complaints Received</p>
    @endforelse --}}
</div>
    
@endsection