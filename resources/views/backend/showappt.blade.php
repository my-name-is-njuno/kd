@extends('layouts.app')

@section('title')
  {{ $appt->name }} Request
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
            <h5 class="card-title">{{ $appt->name }} Request For Appointment </h5>
            
            <ul class="list-unstyled">
              <table class="table table-bordered table-sm">
               
                  <tr>

                    <th width="30%">
                      Name
                    </th>

                    <td>
                      {{ $appt->name }}
                    </td>

                  </tr>


                  <tr>

                    <th>
                      Proposed Date
                    </th>

                    <td>
                      {{ $appt->preffered_date }}
                    </td>

                  </tr>


                  <tr>

                    <th>
                      Location
                    </th>

                    <td>
                      {{ $appt->location }}
                    </td>

                  </tr>



                  <tr>

                    <th>
                      Email
                    </th>

                    <td>
                      {{ $appt->email }}
                    </td>

                  </tr>



                   <tr>

                    <th>
                      Phone Number
                    </th>

                    <td>
                      {{ $appt->phone }}
                    </td>

                  </tr>


                   <tr>

                    <th>
                      Message
                    </th>

                    <td>
                      {{ $appt->message }}
                    </td>

                  </tr>



                  <tr>

                    <th>
                      Booked On
                    </th>

                    <td>
                      {{  date('d, F Y', strtotime($appt->created_at)) }}
                    </td>

                  </tr>
            

               
              </table>
            </ul>



            <a class="btn btn-danger" onclick="return confirm('Are you sure?')"  href= {{ route('delApp', ['id'=>$appt->id]) }}  >Delete Appointment</a>


          </div>
        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    function myFunction() {
      if (confirm("Are you sure you want to delete this appointment?")) {
        return true;
      }
      return false
    }
  </script>
@endsection
