


<div class="modal fade" tabindex="-1" id="editModalDialog" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                title
            </div>
            <div class="modal-body">
                <form role="form" id="form_edit">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">路由名称</label>
                        <input type="text" id="edit_permission_name" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">展示名称</label>
                        <input type="text" id="edit_permission_display_name" name="display_name" class="form-control" id="exampleInputPassword1" placeholder="display_name">
                    </div>
                    <div class="form-group">
                        <label for="">注释</label>
                        <input type="text" id="edit_permission_description" name="description" class="form-control" placeholder="description">
                    </div>

                    <div class="form-group">
                        <label for="">父级权限</label>
                        <select name="fid" id="edit_permission_fid" class="form-control">
                            <option value="0">顶级权限</option>
                            @foreach($permissions as $permission)
                                @if($permission->fid == 0)
                                <option value="{{ $permission->id }}">{{ $permission->display_name }}</option>
                                @endif
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">是否是菜单</label>
                        <input type="checkbox" id="edit_permission_is_menu" name="is_menu" value="true">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="createItem()">Save changes</button>
            </div>
        </div>
    </div>
</div>



@section('js')
    <script>
        function editItem(url) {

            var ajax_url = url;
            var ajax_type = 'get';
            var ajax_dataType = 'json';
            $.ajax({
                url: ajax_url,
                type: ajax_type,
                dataType: ajax_dataType,
                success: function (data) {
                    console.log(data.permission.name)
//                    操作 dom
                    $('#edit_permission_name').val(data.permission.name);
                    $('#edit_permission_display_name').val(data.permission.display_name);
                    $('#edit_permission_description').val(data.permission.description);
                    $('#edit_permission_fid').val(data.permission.fid);
                    $('#edit_permission_is_menu').attr("checked", data.permission.is_menu);

                    $('#editModalDialog').modal('show')


                },
                error: function (error) {
                    alert(error.responseText)
                }
            });
        }


    </script>
@append