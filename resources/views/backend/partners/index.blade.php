@extends('layouts.app')

@section('title')
  Manage Partners
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


            <h5>
              Add New Partner
            </h5>
            <form method="POST" action="{{ route('addpartner') }}" enctype="multipart/form-data">
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
                            <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('picture') }}</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" value="{{ old('picture') }}" required>

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
                                    {{ __('Add New Partner') }}
                                </button>
                            </div>
                        </div>
                    </form>
          </div>


          <hr>





          <div class="card-body">
            <h5 class="card-title">Manage Partners</h5>
            
            <ul class="list-unstyled">
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>

                    <th width="40%">
                      Name
                    </th>

                    <th width="40%">
                      Logo
                    </th>

                    <th width="20%">
                      Actions
                    </th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($partners as $pat)

                    <tr>
                      <td>
                        {{ $pat->name }}
                      </td>

                      <td>
                        <img src="{{ asset('/images/logos/'.$pat->logo) }}" width="150">
                      </td>

                      <td>
                        <a class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')"  href="{{ route('deletepartners', ['id'=>$pat->id]) }}">delete</a>
                      </td>
                    </tr>

                  @endforeach
                </tbody>
              </table>
            </ul>

            {{ $partners->links() }}


          </div>

          
        </div>
      </div>
    </div>
  </div>



  

@endsection
