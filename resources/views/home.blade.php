@extends('index')

@section('content')
    <br>
    <br>

<div class="container">
    <p style="color:green;text-align: center">Bienvenue sur votre compte: {{ Auth::user()->name }} </p>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Vous êtes Connecter!</div>
    <br>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/changename/" style="text-decoration: none;"><p style="color: black;">Modifier votre Nom</p></a>
                        <a href="/changepassword/" style="text-decoration: none;"><p style="color: black;">Modifier votre mot de Passe</p></a>


                </div>

                <div class="#" style="text-align: center;">
                    <a href="/" style="text-decoration: none;"><h2 style=" color: black;">Continuez Vos Achats</h2></a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
@endsection
