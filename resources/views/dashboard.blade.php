@extends('layouts.back')
@section('breadcrumb')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Tableau de bord') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('Accueil') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Tableau de bord') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box text-white" style="background:#4D525A">
                <div class="inner">
                    <h3>12</h3>
                    <p>{{ __('Documents Récupérés') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-pen"></i>
                </div>
                <a href="#" class="small-box-footer">{{ __('voir plus') }} <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>22</h3>
                    <p>{{ __('Documents Publiés') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-folder-open"></i>
                </div>
                <a href="#" class="small-box-footer">{{ __('voir plus') }}<i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box text-white" style="background:#4D525A">
                <div class="inner">
                    <h3>65</h3>
                    <p>{{ __('Documents enregistrer') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">{{ __('voir plus') }} <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>34</h3>
                    <p>{{ __('Utilisateurs Actifs') }}</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">{{ __('voir plus') }} <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>
@endsection
