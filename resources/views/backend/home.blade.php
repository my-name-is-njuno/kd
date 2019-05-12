@extends('layouts.app')

@section('content')
  
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="card border-success">
          <div class="card-header bg-transparent border-success">Links</div>
          <div class="card-body text-success">
            <ul class="list-group">

              <li class="list-group-item">
                <a href="">Appointments</a>
              </li>
              <li class="list-group-item">
                <a href="">Services</a>
              </li>
              <li class="list-group-item">
                <a href="">Partners</a>
              </li>
              

            </ul>
          </div>
          
        </div>
      </div>

      <div class="col-sm-9">
        <div class="card" style="">
          <div class="card-body">
            <h5 class="card-title">Appointments</h5>
            
            <ul class="list-unstyled">
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>

                    <th width="5%">
                      Status
                    </th>

                    <th width="40%">
                      Name
                    </th>

                    <th width="40%">
                      Proposed Date
                    </th>


                    <th>
                      View
                    </th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($apps as $app)

                    <tr>
                      <td>
                        <a href="" class="btn btn-outline-info"> <i class="fa fa-eye"></i> view</a>
                      </td>

                      <td>
                        {{ $app->name }}
                      </td>

                      <td>
                        {{ $app->preffered_date }}
                      </td>

                      <td>
                        <a href="" class="btn btn-outline-info"> <i class="fa fa-eye"></i> view</a>
                      </td>

                    </tr>

                  @endforeach
                </tbody>
              </table>
            </ul>


          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
