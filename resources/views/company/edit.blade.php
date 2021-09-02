

@extends('admin.layout.index')

@section('content')
<form action="{{route('companies.update',$company->id)}}" method="post" enctype="multipart/form-data" id="fo1">
    
   @csrf
    <input type="hidden" name="_method" value="PUT">
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
        <div class="form-group">
            <label>Name:</label>
           <input type="text" class="form-control col-4 " style="border-radius:20px" name="name" value="{{$company->name}}">

        </div>
     <div class="form-group">
            <label>Email:</label>
           <input type="email" class="form-control col-4 " style="border-radius:20px"  name="email" value="{{$company->email}}" >

        </div>
        <div class="form-group">
            <label> Logo:</label>
           <input type="file" class="form-control col-4 " style="border-radius:20px"   name="logo_path" >

        </div>
        <div class="form-group">
            <label>website_url:</label>
           <input type="text" id="start_date"  class="form-control col-4 " style="border-radius:20px"    name="website_url" placeholder="website_url" value="{{$company->website_url}}">

        </div>
       
     <button style="border-radius:20px"  type="submit"><i class="fas fa-update" > Update</i></button>
</form>


@endsection