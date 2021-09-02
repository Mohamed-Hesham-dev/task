

@extends('admin.layout.index')

@section('content')
<form action="{{route('employees.update',$employee->id)}}" method="post" enctype="multipart/form-data" id="fo1">
    
   @csrf
    <input type="hidden" name="_method" value="PUT">
        
    
    <div class="form-group">
      <label>Company_Name:</label>
    <select tobetranslated="Related" name="company_id" class="form-control select"
      required="required" tabindex="null">
      <option></option>
      @foreach ($companies as $company)
            <option class="form-control" style="border-radius:10px"
               value="{{ $company->id }}" selected>{{ $company->name }}</option>
      @endforeach
   </select>
</div>
        <div class="form-group">
            <label>First Name:</label>
           <input type="text" class="form-control col-4 " style="border-radius:20px" name="fname"  value="{{$employee->fname}}">
        </div>
        <div class="form-group">
         <label>last Name:</label>
        <input type="text" class="form-control col-4 " style="border-radius:20px" name="lname"  value="{{$employee->lname}}">

     </div>
     <div class="form-group">
            <label>Email:</label>
           <input type="email" class="form-control col-4 " style="border-radius:20px"  name="email"  value="{{$employee->email}}">

        </div>
        <div class="form-group">
            <label> Phone:</label>
           <input type="number" class="form-control col-4 " style="border-radius:20px"   name="phone"  value="{{$employee->phone}}" >

        </div>
        
     <button style="border-radius:20px"  type="submit"><i class="fas fa-update" > Update</i></button>
</form>


@endsection