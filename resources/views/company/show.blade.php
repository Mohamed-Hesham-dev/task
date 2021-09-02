@extends('admin.layout.index')

@section('content')

<table class="table table-bordered">
    <thead >
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Website_Url</th>
            <th>Edit</th>
            
            
        </tr>
    </thead>
    <tbody class="align-middle">
      
        <tr>
            
            
                <td>
                    <div>
                        <p>{{$company->name}}</p>
                    </div>
                </td>
                
                <td>
                    <div>
                        <p>{{$company->email}}</p>
                    </div>
                </td>
                
                <td>
                    <div class="img">
                        <img src="{{asset('storage/'.$company->logo_path)}}" alt="Image" width="50px" height="50px">

                    </div>
                    
                </td>
                
                <td>
                    <div>
                        <p>{{$company->website_url}}</p>
                    </div>
                </td>
                
                <td>
                    <a href="{{route('companies.edit',$company->id)}}">Edit</a>
                         </td>
            
                
            
        </tr>
        
    </tbody>
</table>
@endsection