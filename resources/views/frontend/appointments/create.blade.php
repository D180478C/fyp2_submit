@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.appointment.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.appointments.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.appointment.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" placeholder="Applicant's Name" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <!-- <span class="help-block">{{ trans('cruds.appointment.fields.name_helper') }}</span> -->
                        </div>
                        <div class="form-group">
                            <label class="required" for="nric">{{ trans('cruds.appointment.fields.nric') }}</label>
                            <input class="form-control" type="number" name="nric" id="nric" placeholder="Applicant's NRIC" value="{{ old('nric', '') }}" step="1" required>
                            @if($errors->has('nric'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nric') }}
                                </div>
                            @endif
                            <!-- <span class="help-block">{{ trans('cruds.appointment.fields.nric_helper') }}</span> -->
                        </div>
                        <div class="form-group">
                            <label class="required" for="appointment_date">{{ trans('cruds.appointment.fields.appointment_date') }}</label>
                            <input class="form-control date" type="text" name="appointment_date" placeholder="Select The Date For Appointment " id="appointment_date" value="{{ old('appointment_date') }}" required>
                            @if($errors->has('appointment_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('appointment_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.appointment_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="time_id">{{ trans('cruds.appointment.fields.time') }}</label>
                            <select class="form-control select2" name="time_id" id="time_id" required>
                                @foreach($times as $id => $entry)
                                    <option value="{{ $id }}" {{ old('time_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('time'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('time') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.time_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-add" type="submit">
                                {{ trans('global.save') }}
                            </button>
                            <a href="{{route('frontend.appointments.index')}}" class="btn btn-danger"> << Back </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection