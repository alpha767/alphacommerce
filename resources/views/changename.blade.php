@extends('index')
@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>


    </div>

    <form class="form-horizontal" method="POST" action="{{ route('changeName') }}"  style="margin-left: 30%">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('new-name') ? ' has-error' : '' }}">

            <label for="current-name" class="col-md-6 control-label">Nom Actuel</label>
            <input id="current-name" type="text" class="form-control" name="current-name" required style="width:300px">

        <label for="new-name" class="col-md-4 control-label">Nouvelle Nom</label>
        <input id="new-name" type="text" class="form-control" name="new-name" required style="width:300px">

        @if ($errors->has('new-name'))
            <span class="help-block">
                        <strong>{{ $errors->first('new-name') }}</strong>
                                        </span>
        @endif
        </div>

    <input type="submit" value="Change Name" class="btn btn-primary">


    </form>
    <br>
    <br>
    <br>
    <br>
@endsection
