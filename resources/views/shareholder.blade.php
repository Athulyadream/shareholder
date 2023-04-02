@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Buyer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('addbuyer') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="duration" class="col-md-4 col-form-label text-md-end">{{ __('Duration') }}</label>

                            <div class="col-md-6">
                                <input id="duration" type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}" required autocomplete="duration" autofocus>

                                @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="installment_type" class="col-md-4 col-form-label text-md-end">{{ __('Installment Type') }}</label>

                            <div class="col-md-6">
                                <input id="installment_type" type="installment_type" class="form-control @error('installment_type') is-invalid @enderror" name="installment_type" value="{{ old('installment_type') }}" required autocomplete="installment_type">

                                @error('installment_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label for="paymentmode" class="col-md-4 col-form-label text-md-end">{{ __('Paymentmode') }}</label>

                            <div class="col-md-6">
                                <input id="paymentmode" type="text" class="form-control @error('paymentmode') is-invalid @enderror" name="paymentmode" value="{{ old('paymentmode') }}" required autocomplete="paymentmode" autofocus>

                                @error('paymentmode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="startdate" class="col-md-4 col-form-label text-md-end">{{ __('Startdate') }}</label>

                            <div class="col-md-6">
                                <input id="startdate" type="text" class="form-control @error('startdate') is-invalid @enderror" name="startdate" value="{{ old('startdate') }}" required autocomplete="startdate" autofocus>

                                @error('startdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
