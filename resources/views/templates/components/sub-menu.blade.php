@php
    use App\Helpers\MenuHelper;
    $isActive = MenuHelper::isActive($menu->route);
    $isParentActive = MenuHelper::isParentActive($menu);
@endphp

<li class="{{ $isActive || $isParentActive ? 'active' : '' }}">
    <a href="{{ $menu->route ? (Route::has($menu->route) ? route($menu->route) : '#') : '#' }}"
        class="{{ $isActive || $isParentActive ? 'active' : '' }}">
        @if ($menu->icon)
            <i class="{{ $menu->icon }}"></i>
        @endif
        {{ $menu->name }}
    </a>
</li>
