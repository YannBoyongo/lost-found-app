@extends('layouts.back')
@section('breadcrumb')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Profil') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('Accueil') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Profil') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __("Update your account's profile information and email address.") }}</h3>
                </div>

                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Nom') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('Entrer le nom') }}"
                                        name="name" id="name" value="{{ old('name', Auth::user()->name) }}">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">{{ __('Source powerbie') }} </label>
                                    <input type="text" class="form-control" placeholder="{{ __('Entrer Email') }}"
                                        name="email" id="email" value="{{ old('email', Auth::user()->email) }}">
                                    @error('email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer d-flex">
                        <div class="flex-grow-1 text-right">
                            <button type="submit" class="btn btn-primary">
                                {{ _('Enregister') }}
                                <i class="fa fa-save ml-2"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Ensure your account is using a long, random password to stay secure.') }}
                    </h3>
                </div>

                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="current_password">{{ __('Mot de passe actuel') }}</label>
                                    <input type="password" class="form-control" placeholder="{{ __('Entrer le nom') }}"
                                        name="current_password" id="current_password" value="">
                                    @error('current_password')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">{{ __('Nouveau Mot de passe') }} </label>
                                    <input type="password" class="form-control" placeholder="{{ __('Entrer password') }}"
                                        name="password" id="password" value="">
                                    @error('password')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer d-flex">
                        <div class="flex-grow-1 text-right">
                            <button type="submit" class="btn btn-primary">
                                {{ _('Enregister') }}
                                <i class="fa fa-save ml-2"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __("Update your account's profile information and email address.") }}</h3>
                </div>

                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Nom') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('Entrer le nom') }}"
                                        name="name" id="name" value="{{ old('name', Auth::user()->name) }}">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">{{ __('Source powerbie') }} </label>
                                    <input type="text" class="form-control" placeholder="{{ __('Entrer Email') }}"
                                        name="email" id="email" value="{{ old('email', Auth::user()->email) }}">
                                    @error('email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer d-flex">
                        <div class="flex-grow-1 text-right">
                            <button type="submit" class="btn btn-primary">
                                {{ _('Enregister') }}
                                <i class="fa fa-save ml-2"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
