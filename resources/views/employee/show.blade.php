@extends('admin.layout.index')

@section('content')

<table class="table table-bordered">
    <thead >
        <tr>
            <th>Company Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Edit</th>
            
            
        </tr>
    </thead>
    <tbody class="align-middle">
      
        <tr>
            
            
            
                <td>
                    <div>
                        <p>{{$employee->company->name}}</p>
                    </div>
                </td>
                <td>
                    <div>
                        <p>{{$employee->fname}}</p>
                    </div>
                </td>
                
                <td>
                    <div>
                        <p>{{$employee->lname}}</p>
                    </div>
                </td>
                
                <td>
                    <div>
                        <p>{{$employee->email}}</p>
                    </div>
                </td>
                
                <td>
                    <div>
                        <p>{{$employee->phone}}</p>
                    </div>
                </td>
                
               
                
           
            
               
            
      
                
                <td>
                    <a href="{{route('employees.edit',$employee->id)}}">Edit</a>
                         </td>
            
                
            
        </tr>
        
    </tbody>
</table>
@endsection