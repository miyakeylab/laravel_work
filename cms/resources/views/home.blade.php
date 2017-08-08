@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>
                    ID: {{Auth::User()->id}}<br>
                    NAME: {{Auth::User()->name}}<br> 
                    EMAIL: {{Auth::User()->email}}<br>
                    provider: {{Auth::User()->provider}}<br>
                    provider_id: {{Auth::User()->provider_id}}<br>
                    remember_token: {{Auth::User()->remember_token}}<br>
                    created_at: {{Auth::User()->created_at}}<br>
                    updated_at: {{Auth::User()->updated_at}}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
