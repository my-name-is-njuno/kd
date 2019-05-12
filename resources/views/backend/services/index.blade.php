@extends('layouts.app')

@section('title')
  Manage Services
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
            <h4>
              Add new Service
            </h4>
            <form method="POST" action="{{ route('addservice') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required >{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('picture') }}</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" picture="picture" value="{{ old('picture') }}" required>

                                @if ($errors->has('picture'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                       

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add New Service') }}
                                </button>
                            </div>
                        </div>
                    </form>
          </div>



<hr>

          <div class="card-body">
            <h5 class="card-title">Manage Services</h5>
            
            <ul class="list-unstyled">
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>

                    <th width="15%">
                      Name
                    </th>

                    <th width="60%">
                      Description
                    </th>

                    <th width="15%">
                      Logo
                    </th>

                    <th width="10%">
                      Actions
                    </th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($services as $serv)

                    <tr>
                      <td>
                        {{ $serv->name }}
                      </td>

                      <td>
                        {{ $serv->description }}
                      </td>

                      <td>
                        {{ $serv->pic() }}
                      </td>

                      <td>
                        
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
