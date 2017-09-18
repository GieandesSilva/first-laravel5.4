@extends('layout')

@section('content')

    <div class="row justify-content-center">
        
        <div class="col-lg-6 col-lg-offset-3">
            
            <form action="/create/first" method="post">

                {{ csrf_field() }}
                
                <input type="text" class="form-control input-lg" name="first" placeholder="Create new First"></input>

            </form>

        </div>

    </div> 

    <hr>

    @foreach($firsts as $first)

        {{ $first->first }} 
        <a href=" {{ route('first.delete', ['id' => $first->id]) }}" class="btn btn-danger">x</a>
        <a href=" {{ route('first.update', ['id' => $first->id]) }}" class="btn btn-info btn-sm">update</a>
        <hr>
    
    @endforeach

@stop