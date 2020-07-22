@extends('layouts.app')
@section('head')

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <h1>{{session('success')}}</h1>
            @endif
            <div class="card">
                <div class="card-header">Send SMS</div>

                <div class="card-body">
                    <form method="POST" action="/sms/send">
                        @CSRF
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Phone No:</label>
                          <div class="col-sm-10">
                            <input type="number" name="number" class="form-control" id="staticEmail" placeholder="Number">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="text" name="message" class="form-control" id="inputPassword" placeholder="Message">
                          </div>
                        </div>
                        <div>
                            <button type="submit" class="tn btn-info">Send SMS</button>
                        </div>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
