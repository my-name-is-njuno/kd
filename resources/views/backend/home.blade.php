@extends('layouts.app')

@section('title')
  Admin Page
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
            <h5 class="card-title">Appointments</h5>
            
            
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
                        @if ($app->ifViewed())
                          <button class="btn btn-sm btn-outline-success"><i class="fa fa-check"> Old</i></button>
                        @else
                          <button class="btn btn-sm btn-outline-info"><i class="fa fa-check"> New</i></button>
                        @endif
                      </td>

                      <td>
                        {{ $app->name }}
                      </td>

                      <td>
                        {{ $app->preffered_date }}
                      </td>

                      <td>
                        <a href={{ route('showappt', ['id'=>$app->id]) }} class="btn btn-sm btn-outline-danger"> <i class="fa fa-eye"></i> view</a>
                      </td>

                    </tr>

                  @endforeach
                </tbody>
              </table>
            




            {{ $apps->links() }}




          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
