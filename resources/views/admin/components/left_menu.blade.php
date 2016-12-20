@inject('menuActive', 'App\Presenter\LeftMenuActivePresenter')
<ul class="nav nav-pills nav-stacked" role="tablist">
    <li role="presentation" class="{{ $menuActive->currentRouteActive('admin.user.index') ? 'active' : '' }}"><a href="{{ route('admin.user.index') }}">用户</a></li>
    <li role="presentation" class="{{ $menuActive->currentRouteActive('admin.role.index') ? 'active' : '' }}"><a href="{{ route('admin.role.index') }}">角色</a></li>
    <li role="presentation" class="{{ $menuActive->currentRouteActive('admin.permission.index') ? 'active' : '' }}"><a href="{{ route('admin.permission.index') }}">权限</a></li>
</ul>