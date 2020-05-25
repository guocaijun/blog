@extends("Admin.AdminPublic.Adminpublic")
@section("admin")
<html>
 <head></head>
 <script type="text/javascript" src="/static/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i>模型会员列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
      <form action="/adminuserss" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      <label>搜索名字: <input type="text" aria-controls="DataTables_Table_1" name="keyword" value="@if(count($request)) {{$k}}@else  @endif"/>邮箱: <input type="text" aria-controls="DataTables_Table_1" name="keyword1" value="@if(count($request)) {{$k1}}@else  @endif"/></label>
      <input type="submit" value="搜索" class="btn btn-info">
     </div>
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 73px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 106px;">用户名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 98px;">邮箱</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 60px;">电话</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 60px;">状态</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 60px;">添加时间</th> <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 60px;">修改时间</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 40px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($user as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->username}}</td> 
        <td class=" ">{{$row->email}}</td> 
        <td class=" ">{{$row->phone}}</td> 
        <td class=" ">{{$row->status}}</td> 
         <td class=" ">{{$row->created_at}}</td> 
        <td class=" ">{{$row->updated_at}}</td> 
        <td class=" ">
          <a href="/adminuserss/{{$row->id}}" class="btn btn-danger">会员详情</a>
          <a href="javascript:void(0)" class="btn btn-success del">Ajax删除</a>
          <form action="/adminuserss/{{$row->id}}" method="post">
            {{method_field("DELETE")}}
            {{csrf_field()}}

            <input  class="btn btn-success" type="submit" value="删除">
          </form>
          <a href="/adminuserss/{{$row->id}}/edit" class="btn btn-danger"><i class="icon-wrench"></i></a></td> 
       </tr>
       @endforeach
      </tbody>
     </table>
     <div class="dataTables_info" id="DataTables_Table_1_info">
      Showing 1 to 10 of 57 entries
     </div>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
     </div>
    </div> 
   </div> 
  </div>
 </body>
 <script type="text/javascript">
 // alert($);
 $(".del").click(function(){
  o=$(this);
  //获取id
  id=$(this).parents("tr").find("td:first").html();
  // alert(id);
  //Ajax confirm 确认框
  s=confirm("你确定要干掉吗?");
  if(s){
    $.get("/adminuserssdel",{id:id},function(data){
      // alert(data);
      if(data.msg=="ok"){
        // alert("删除成功");
        //把删除数据所在的tr干掉
        o.parents("tr").remove();
      }
    },'json');
}
 });
 </script>
</html>
@endsection
@section("title","后台模型会员列表")