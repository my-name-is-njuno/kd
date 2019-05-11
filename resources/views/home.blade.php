@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Manage Clients
              </div>
              




                   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          New Appointments To Call
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
                
                   <table class="table-bordered table table-striped">
                       <thead class=" text-white bg-secondary">
                           <tr>
                               <th width="15%">
                                   Name
                               </th>
                               <th width="10%">
                                   Location
                               </th>
                               <th width="15%">
                                   Email
                               </th>
                               <th width="15%">
                                   Phone
                               </th>
                               <th>
                                   Message
                               </th>
                               <th width="10%">
                                   Action
                               </th>
                           </tr>
                       </thead>
                       <tbody style="font-size: small;">
                           @foreach($appointments as $app)

                           <tr>
                               <td>
                                   {{ $app->name }}
                               </td>
                               <td>
                                   {{ $app->location }}
                               </td>
                               <td>
                                   {{ $app->email }}
                               </td>
                               <td>
                                   {{ $app->phone }}
                               </td>
                               <td>
                                   {{ $app->message }}
                               </td>
                               <td>
                                   <span class="btn btn-sm btn-info"><i class="fa fa-eye"></i></span>
                                   <span class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>
                               </td>
                           </tr>

                           @endforeach
                       </tbody>
                   </table>
              </div>


              
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  {{-- <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div> --}}
</div>
              </div>



            </div>
        </div>
    </div>
</div>
@endsection
