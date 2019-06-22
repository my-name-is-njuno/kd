@extends('layouts.app')

@section('title')
  {{ $serv->name }} 
@endsection

@section('content')
  
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        @include('layouts.backendsidenav')
      </div>

      <div class="col-sm-9">
        <div class="card" style="">
          <div class="card-body">
            <h5 class="card-title">{{ $serv->name }} Service </h5>
            
            <ul class="list-unstyled">
              <table class="table table-bordered table-sm">
               
                  <tr>

                    <th width="30%">
                      Name
                    </th>

                    <td>
                      {{ $serv->name }}
                    </td>

                  </tr>


                  <tr>

                    <th>
                      Description
                    </th>

                    <td>
                      {{ $serv->description }}
                    </td>

                  </tr>


                  <tr>

                    <th>
                      Image Used
                    </th>

                    <td>
                      <img src="{{ asset('/images/services/'.$serv->picture) }}">
                    </td>

                  </tr>



                
               
              </table>
            </ul>



            <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href= {{ route('delApp', ['id'=>$serv->id]) }}  >Delete</a>

            <a class="btn btn-outline-info" href="{{ route('editservices', ['id'=>$serv->id]) }}">edit</a>


          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
