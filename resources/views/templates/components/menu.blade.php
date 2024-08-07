@php
    use App\Helpers\MenuHelper;
@endphp

<div id="sidebar-menu">
    <ul class="sidebar-menu" id="simple-bar">
        <li class="pin-title sidebar-list p-0">
            <h5 class="sidebar-main-title">Pinned</h5>
        </li>
        <li class="line pin-line"></li>
        <li class="sidebar-main-title">General</li>
        @foreach ($menus as $menu)
            @php
                $isActive = MenuHelper::isActive($menu->route);
                $isParentActive = MenuHelper::isParentActive($menu);
            @endphp
            @if ($menu->children->isNotEmpty())
                <li class="sidebar-list {{ $isActive || $isParentActive ? 'active' : '' }}">
                    <a class="sidebar-link" href="javascript:void(0)">
                        @if ($menu->icon)
                            <i class="{{ $menu->icon }}"></i>
                        @endif
                        <span>{{ $menu->name }}</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="sidebar-submenu" style="display: none;">
                        @foreach ($menu->children as $child)
                            @include('templates.components.sub-menu', ['menu' => $child])
                        @endforeach
                        @foreach ($menu->children as $child)
                            <li>
                                <a href="general-widget.html">
                                    @if ($child->icon)
                                        <i class="{{ $child->icon }}"></i>
                                    @endif
                                    {{ $menu->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="sidebar-list {{ $isActive || $isParentActive ? 'active' : '' }}">
                    <a class="sidebar-link"
                        href="{{ $menu->route ? (Route::has($menu->route) ? route($menu->route) : '#') : '#' }}">
                        @if ($menu->icon)
                            <i class="{{ $menu->icon }}"></i>
                        @endif
                        <span>{{ $menu->name }}</span>
                    </a>
                </li>
            @endif
        @endforeach
        <li class="line"></li>
    </ul>
</div>
