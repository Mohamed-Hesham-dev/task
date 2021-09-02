@extends('admin.layout.index')

@section('content')



<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
         
          <!-- /.card -->

          <div class="card">
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        
                        <th>Company Name</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
              
                <tbody>
                    @foreach($employees as $employee)
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
                            <a href="{{route('employees.show',$employee->id)}}">Show</a>
                                 </td>
                
                            <td>
                       <a href="{{route('employees.edit',$employee->id)}}">Edit</a>
                            </td>
                      
                    <form action="{{route('employees.destroy',$employee->id)}}" method="POST" >
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <td>
                    <button  type="submit" ><i class="fa fa-trash"></i></button>
                        </td>
                    </form>
                    
                </tr>
                @endforeach

                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>







@endsection