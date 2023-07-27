@extends('layouts.signInUp')

@section('action', 'in')
@section('postUrl', '/')

@section('content')
<div class="modal-footer d-flex justify-content-center">
  <div class="signup-section">
      Do not have account? <a href="{{ url('signup') }}" class="text-info"> Create account</a>.
  </div>
</div>
@stop