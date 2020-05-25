<?php

namespace App\Http\Middleware;

use Closure;

class HomeLoginMiddleware
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
        //检测当前用户是否登陆(检测下是否具有用户登录session)
        // 使用 has 方法检查某个值是否存在于 Session 内，如果该值存在并且不为 null，那么则返回 true：
        if($request->session()->has("islogin")){
            return $next($request);//执行下一个请求
        }else{
            //跳转到登录界面  /login 加载登录界面的路由规则
            return redirect("/login");
        }
    }
}
