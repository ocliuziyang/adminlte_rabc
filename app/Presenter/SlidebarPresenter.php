<?php

namespace App\Presenter;

use App\Repositories\PermissionInterface;
use App\Repositories\PermissionRepository;

class SlidebarPresenter {

    private $permissionRepository;

    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
    }

    public function menu() {
        /*
         <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul>
         * */

        $html = "<ul class=\"sidebar-menu\">
                <li class=\"header\">HEADER</li>";

        $permissions = $this->permissionRepository->menuPermissions();
        foreach ($permissions as $permission) {

            $subPermissions = $permission->submenu_permissions;
            if (!count($subPermissions) > 0) {
                //不含子菜单
                $html .= "<li class=\"active\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>".$permission->display_name."</span></a></li>";
            } else {
                //含有子菜单
                $html .= "<li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-link\"></i> <span>$permission->display_name</span>
                    <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                </a>
                <ul class=\"treeview-menu\">";

                foreach ($subPermissions as $subPermission) {
                    $html .= sprintf("<li><a href='%s'>%s</a></li>", route($subPermission->name), $subPermission->display_name);
                }
                $html .= "</ul></li>";
            }
        }

        $html .= "</ul>";
        return $html;

    }

}