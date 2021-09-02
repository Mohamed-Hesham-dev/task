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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website_Url</th>
                        
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
              
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>
                            {{$company->name}}
                        </td>
                        
                        <td>
                            {{$company->email}}
                        </td>
                        
                        <td>{{$company->logo_path}}
                        </td>
                        
                        <td>
                           {{$company->website_url}}
                        </td>
                        
                   
                    
                        <td>
                            <a href="{{route('companies.show',$company->id)}}">Show</a>
                                 </td>
                
                            <td>
                       <a href="{{route('companies.edit',$company->id)}}">Edit</a>
                            </td>
                      
                    <form action="{{route('companies.destroy',$company->id)}}" method="POST" >
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

