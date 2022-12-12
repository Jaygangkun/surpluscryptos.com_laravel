<?php
$user = auth()->user();
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if(auth()->user()->hasRole(1))
            <li class="nav-item">
                <a class="nav-link" href="{{url('client-board')}}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Client Dashboard</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="icon-grid "></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        @if($user->hasRole(1))

            <li class="nav-item">
                <a class="nav-link" href="{{url('contract-assets')}}">
                    <i class="ti-money"></i>
                    <span class="menu-title">Crypto <br> Contract Assets</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('partner-commissions')}}">
                    <i class="icon-paper ti-user"></i>
                    <span class="menu-title">Partner <br> Commission    Payouts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('partners')}}">
                    <i class="ti-list"></i>
                    <span class="menu-title">Partners List</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('client-payments')}}">
                    <i class="ti-pencil-alt"></i>
                    <span class="menu-title">Approve <br> Received  Payments</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('marketing-materials')}}">
                    <i class="ti-announcement"></i>
                    <span class="menu-title">Partners <br> Marketing Materials</span>
                </a>
            </li>
        @endif

        @if($user->hasRole(2))

            <li class="nav-item">
                <a class="nav-link" href="{{url('partner-commissions')}}">
                    <i class="icon-paper ti-money"></i>
                    <span class="menu-title">Commission Payouts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('advisories')}}">
                    <i class="icon-paper ti-user"></i>
                    <span class="menu-title">Advisor Team</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('marketing-materials')}}">
                    <i class="icon-paper ti-announcement"></i>
                    <span class="menu-title">Marketing Materials</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('client-reports')}}">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Reports</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('account')}}">
                    <i class="icon-paper ti-user"></i>
                    <span class="menu-title">My Account</span>
                </a>
            </li>

        @endif

        @if($user->hasRole(3))

            <li class="nav-item">
                <a class="nav-link" href="{{url('client-contract-assets')}}">
                    <i class="icon-paper ti-money"></i>
                    <span class="menu-title">Crypto Assets</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('client-reports')}}">
                    <i class="icon-paper menu-icon"></i>
                    <span class="menu-title">Reports</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('account')}}">
                    <i class="icon-paper ti-user"></i>
                    <span class="menu-title">My Account</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('support')}}">
                    <i class="icon-paper ti-headphone-alt"></i>
                    <span class="menu-title">Support</span>
                </a>
            </li>
        @endif


        <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">
                <i class="icon-paper ti-plug"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>
