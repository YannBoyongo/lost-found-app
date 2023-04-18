<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('welcome') }}" class="brand-link">
        @if (app()->getLocale() == 'fr')
            <img src="{{ asset('images/logo_white_fr.png') }}" alt="Crisis Analytics logo" class="img-fluid">
        @else
            <img src="{{ asset('images/logo_white_en.png') }}" alt="Crisis Analytics logo" class="img-fluid">
        @endif

    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ $current == 'dashboard' ? 'active' : null }}">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            {{ __('Tableau de bord') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pillars.index') }}"
                        class="nav-link {{ $current == 'pillars' ? 'active' : null }}">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            {{ __('Piliers thématiques') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboards.index') }}"
                        class="nav-link {{ $current == 'dashboards' ? 'active' : null }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            {{ __('PowerBi dashboards') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ ($current == 'reports_create' or $current == 'reports' or $current == 'categories' or $current == 'reports_index' or $current == 'reports_draft') ? 'menu-open' : null }}"
                    aria-expanded="{{ ($current == 'reports' or $current == 'categories' or $current == 'reports_index' or $current == 'active') ? 'true' : 'false' }}">
                    <a href="#"
                        class="nav-link {{ ($current == 'reports_create' or $current == 'reports' or $current == 'categories' or $current == 'reports_index' or $current == 'reports_draft') ? 'active' : null }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            {{ __('Rapports') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-3">
                            <a href="{{ route('reports.create') }}"
                                class="nav-link {{ $current == 'reports_create' ? 'active' : null }}">
                                <i class="nav-icon fas fa-folder-plus"></i>
                                <p>{{ __('Nouveau Rapport') }}</p>
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a href="{{ route('reports.index') }}"
                                class="nav-link {{ $current == 'reports_index' ? 'active' : null }}">
                                <i class="nav-icon fas fa-folder-open"></i>
                                <p>{{ __('Rapports Publiés') }}</p>
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a href="{{ route('reports.draft') }}"
                                class="nav-link {{ $current == 'reports_draft' ? 'active' : null }}">
                                <i class="nav-icon fas fa-pen"></i>
                                <p>{{ __('Brouillon') }}</p>
                                <span
                                    class="badge badge-info right">{{ $draftCount = \App\Models\Report::where('status', '=', \App\Models\Report::REPORT_UNPUBLISHED)->count() }}</span>
                            </a>
                        </li>
                        @hasrole(['admin'])
                            <li class="nav-item ml-3">
                                <a href="{{ route('categories.index') }}"
                                    class="nav-link {{ $current == 'categories' ? 'active' : null }}">
                                    <i class="nav-icon fas fa-layer-group"></i>
                                    <p>{{ __('Catégories') }}</p>
                                </a>
                            </li>
                        @endhasrole
                    </ul>
                </li>
                @hasrole(['admin', 'partner'])
                    <li class="nav-item">
                        <a href="{{ route('partners.index') }}"
                            class="nav-link {{ $current == 'partners' ? 'active' : null }}">
                            <i class="nav-icon fas fa-handshake"></i>
                            <p>
                                {{ __('Partenaires') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sliders.index') }}"
                            class="nav-link {{ $current == 'sliders' ? 'active' : null }}">
                            <i class="nav-icon fas fa-solid fa-image"></i>
                            <p>
                                {{ __('Bannières') }}
                            </p>
                        </a>
                    </li>
                @endhasrole
                @hasrole(['admin'])
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link {{ $current == 'users' ? 'active' : null }}">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                {{ __('Utilisateurs') }}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('settings') }}" class="nav-link {{ $current == 'settings' ? 'active' : null }}">
                            <i class="nav-icon fas fa-screwdriver"></i>
                            <p>
                                {{ __('Paramètres') }}
                            </p>
                        </a>
                    </li>
                @endhasrole
            </ul>
        </nav>
    </div>
</aside>
