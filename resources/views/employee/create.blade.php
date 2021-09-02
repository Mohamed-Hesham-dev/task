

@extends('admin.layout.index')

@section('content')
<form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data" id="fo1">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Company_Name:</label>
    <select tobetranslated="Related" name="company_id" class="form-control select"
      required="required" tabindex="null">
      <option></option>
      @foreach ($companies as $company)
            <option class="form-control" style="border-radius:10px"
               value="{{ $company->id }}">{{ $company->name }}</option>
      @endforeach
   </select>
</div>
        <div class="form-group">
            <label>First Name:</label>
           <input type="text" class="form-control col-4 " style="border-radius:20px" name="fname">

        </div>
        <div class="form-group">
         <label>last Name:</label>
        <input type="text" class="form-control col-4 " style="border-radius:20px" name="lname">

     </div>
     <div class="form-group">
            <label>Email:</label>
           <input type="email" class="form-control col-4 " style="border-radius:20px"  name="email" >

        </div>
        <div class="form-group">
            <label> Phone:</label>
           <input type="number" class="form-control col-4 " style="border-radius:20px"   name="phone" >

        </div>
        
       
     <button style="border-radius:20px"  class="btn btn-primary" type="submit"><i class="fas fa-save" > Save</i></button>
</form>


@endsection