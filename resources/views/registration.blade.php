@extends('layout')
@section('title','Registration' )

@section('content')

    <fieldset>
           <div class="container">
            <div class="mt-5">
              @if($errors->any())
                  <div class="col- 12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger ">{{$errors}}</div>
                  </div>
                   @endforeach
             @endif
            </div>
        
            <form action="{{route("registration.post")}}" method="POST" class="ms-auto me-auto mt-auto" style=" width: 500px">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control"  name="name" placeholder="name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="email">
            
                  </div>
                <div class="mb-3">
                  <label  class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="password">
                </div>
            
    
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    
       
    </fieldset>
   
    
@endsection