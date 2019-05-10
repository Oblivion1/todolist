@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Add item to {{$todolist->name}}</span>
                    <a class="float-right" href="{{Route('todolist')}}?u={{$todolist->uuid}}">Back to {{$todolist->name}}</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{Route('createnote')}}?u={{$todolist->uuid}}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }} <small>(required)</small></label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                    name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }} <small>(required)</small></label>

                            <div class="col-md-6">
                                <textarea id="content" rows="4" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}"
                                    name="content" required autofocus>{{ old('content') }}</textarea>

                                @if ($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>

                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}"
                                    name="duration" value="{{ old('duration') }}" autofocus>

                                @if ($errors->has('duration'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('duration') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#duration').durationPicker();
</script>
@endsection
