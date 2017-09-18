@extends('layout')

@section('content')

    <div class="row justify-content-center">
    
        <div class="col-md-12 col-lg-offset-3">
            
            <form action="{{ route('firsts.save', ['$id' => $first->id]) }}" method="post">

                {{ csrf_field() }}
                
                <input type="text" class="form-control input-lg" name="first" value="{{ $first->first }}" placeholder="Update the first"></input>

            </form>

        </div>

    </div>

@stop