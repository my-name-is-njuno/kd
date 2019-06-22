@extends('layouts.app')

@section('title')
  Edit Service
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
              Edit {{ $serv->name }} Details
            </h4>
            <form method="POST" action="{{ route('updateservice', ['id'=>$serv->id]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $serv->name }}" required>

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
                                <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="15" name="description" required >{{ $serv->description }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                          
                        

                        <div class="form-group row">

                            <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Update Pic') }}</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" value="{{ old('picture') }}">

                                @if ($errors->has('picture'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                          <div class="col-md-4 col-form-label text-md-right">
                            Current Photo: 
                          </div>

                          <div class="col-md-6">
                            
                            <img src="{{ asset('/images/services/'.$serv->picture) }}" width="400">
                          </div>
                          </div>

                        

                       

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Service') }}
                                </button>
                            </div>
                        </div>
                    </form>
          </div>



<hr>

          


          

          
        </div>
      </div>
    </div>
  </div>




@endsection
