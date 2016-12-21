<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Route;
use Zizaco\Entrust\Entrust;

class VerifyRouteEntrust
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$this->is_ajax_request()) {
            //页面操作
            \Log::debug("中间件 页面权限 验证！");
             if (!$this->canAccessCurrentRoute()) {
                 return response("无权访问当前页面");
             }
            
        } else {
            //ajax 操作
            \Log::debug("中间件 ajax 验证！");
        }

        return $next($request);
    }

    /**
     * 是否有权限访问当前路由
     * @return bool
     */
    public function canAccessCurrentRoute()
    {


        if (Auth::user()->can(Route::currentRouteName())) {

            return true;
        } else {

            return false;
        }
    }

    /**
     * 判断是否Ajax请求
     */
    function is_ajax_request(){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
