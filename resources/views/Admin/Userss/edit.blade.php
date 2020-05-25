@extends("Admin.AdminPublic.Adminpublic")
@section("admin")
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>模型会员修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/adminuserss/{{$user->id}}" method="post"> 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">用户名</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="username" value="{{$user->username}}"/> 
       </div> 
      </div>  
      </div>  
      <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">邮箱</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="email" value="{{$user->email}}"/> 
       </div> 
      </div>
      </div>

      <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">电话</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large"  name="phone" value="{{$user->phone}}"/> 
       </div> 
      </div>
      </div>
      <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">状态</label> 
       <div class="mws-form-item"> 
       <input type="radio" name="status" value="0" @if($user->status=='禁用') checked @endif>禁用
       <input type="radio" name="status" value="1" @if($user->status=='开启') checked @endif>开启
       </div> 
      </div>
     </div> 
     </div> 

     <div class="mws-button-row"> 
      {{method_field("PUT")}}
      {{csrf_field()}}
      <input type="submit" value="Submit" class="btn btn-danger" /> 
      <input type="reset" value="Reset" class="btn " /> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
@endsection
@section("title","后台模型会员修改")