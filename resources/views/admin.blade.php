<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Medistock</title>
    @vite([
    'resources/css/app.css',
    'resources/css/admin/dashboard.css',
    'resources/js/app.js'])
</head>
<body>
    <div class="search-container">
        <div class="search-box">
            <img src="{{ asset('assets/images/search.png') }}" alt="Search" class="search-icon">
            <input type="text" placeholder="Looking for something?">
        </div>
        <div class="notification-icon">
            <img src="{{ asset('assets/images/bell.png') }}" alt="Notifications">
        </div>
    </div>

    <div class="admin-layout">
        <div class="menu-box">
            <div class="menu-box-content">
                <div class="menu-header">
                    <span>Menu</span>
                    <button class="menu-toggle">
                        <img src="{{ asset('assets/images/menu-toggle.png') }}" alt="Toggle">
                    </button>
                </div>
                
                <ul class="sidebar-menu">
                    <li class="menu-item">
                        <a href="#" class="menu-link active">
                            <img src="{{ asset('assets/images/dashboard.png') }}" alt="Dashboard" class="menu-icon">
                            Dashboard
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <img src="{{ asset('assets/images/inventories.png') }}" alt="Inventaris" class="menu-icon">
                            Inventaris
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <img src="{{ asset('assets/images/report.png') }}" alt="Laporan" class="menu-icon">
                            Laporan
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="menu-box-footer">
                <button class="logout-btn">
                    <img src="{{ asset('assets/images/logout.png') }}" alt="Logout" class="logout-icon">
                    Log Out
                </button>
                
                <div class="user-profile">
                    <div class="user-avatar">
                        <span>A</span>
                    </div>
                    <div class="user-info">
                        <div class="user-name">Andre</div>
                        <div class="user-role">Admin</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>