@extends('layouts.master')

@section('title', 'Ez Travel | Easier to Get Travel!')

@section('content')
    <nav class="navbar-fixed-top" role="navigation">
        <div class="header">
            <div class="container">
                <div class="header-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-brand logo">
                                    <a href="/"><img src="/images/logotype.png"></a>
                                </div>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav cl-effect-11">
                                    <li><a data-hover="Kembali" href="/ez">Kembali</a></li>
                                    <li><a data-hover="Login/Register" href="signin.php">Login/Register</a></li>
                                </ul>
                            </div>
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </nav>
    <br><br><br><br><br><br><br><br><br><br><br>
        <div class="content">
            <div class="promotions">
                <div class="container">
                    <h2 class="title">Hasil Pencarian</h2>
                    <p>kotanya adalah {{$kota}}</p>
                </div>
            </div>
        </div>
@endsection