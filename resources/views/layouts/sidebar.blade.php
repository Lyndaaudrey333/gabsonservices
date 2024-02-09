<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview {{request()->is('/') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{request()->is('/') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tableau de bord
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link {{request()->is('/') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{request()->is('dashboard/create') || request()->is('dashboard/users') ? 'menu-open' : ''}}">
                    <a href="{{route('users.index')}}" class="nav-link {{request()->is('dashboard/create') || request()->is('dashboard/users') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Utilisateurs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.create')}}" class="nav-link {{request()->is('dashboard/create') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter une utilisateur</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link {{request()->is('dashboard/users') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{request()->is('dashboard/createcategory') || request()->is('dashboard/categories') ? 'menu-open' : ''}}">
                    <a href="{{route('categories.index')}}" class="nav-link {{request()->is('dashboard/createcategory') || request()->is('dashboard/categories') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}" class="nav-link {{request()->is('dashboard/createcategory') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter une categorie</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link {{request()->is('dashboard/categories') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{request()->is('dashboard/products') || request()->is('dashboard/createproduct') ? 'menu open' : ''}}">
                    <a href="#" class="nav-link {{request()->is('dashboard/products') || request()->is('dashboard/createproduct') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Produits
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('dashboard/createproduct')}}" class="nav-link {{request()->is('dashboard/createproduct') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter un Produit</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/dashboard/products')}}" class="nav-link {{request()->is('dashboard/products') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Produits</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{request()->is('dashboard/suppliers') || request()->is('dashboard/createsupplier') ? 'menu open' : ''}}">
                    <a href="#" class="nav-link {{request()->is('dashboard/suppliers') || request()->is('dashboard/createsupplier') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Fournisseurs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/dashboard/createsupplier')}}" class="nav-link {{request()->is('dashboard/createsupplier') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter un fournisseur</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/dashboard/suppliers')}}" class="nav-link {{request()->is('dashboard/suppliers') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Fournisseurs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{request()->is('dashboard/createunit') || request()->is('dashboard/units') ? 'menu-open' : ''}}">
                    <a href="{{route('units.index')}}" class="nav-link {{request()->is('dashboard/createunit') || request()->is('dashboard/units') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Unités
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('units.create')}}" class="nav-link {{request()->is('dashboard/createunit') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Ajouter une unité</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('units.index')}}" class="nav-link {{request()->is('dashboard/units') ? 'active' : ''}}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Unités</p>
                            </a>
                        </li>
                    </ul>
                </li>







            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
