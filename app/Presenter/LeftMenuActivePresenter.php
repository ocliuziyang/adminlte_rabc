<?php

namespace App\Presenter;

class LeftMenuActivePresenter {

    public function currentRouteActive($routeName)
    {
        $currentName = \Route::currentRouteName();
        if ($currentName == $routeName) {
            return true;
        }
        return false;
    }

}