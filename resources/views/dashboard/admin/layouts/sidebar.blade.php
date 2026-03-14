<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">{{ config('app.name') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.users.index') }}">All users</a></li>
                    <li><a class="nav-link" href="{{ route('admin.users.create') }}">Create user</a></li>
                </ul>
            </li>
            <li class="menu-header">{{ config('app.name') }}</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                    <span>Generate Transaction</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.transaction.generator') }}">Generate Transaction</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                    <span>Components</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="components-article.html">Article</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a>
                    </li>
                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i>
                    <span>Modules</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                    <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i>
                    <span>Features</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                    <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
                </ul>
            </li>

            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i>
                    <span>Credits</span></a></li>
        </ul>
    </aside>
</div>
