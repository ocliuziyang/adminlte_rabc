
<div class="modal fade" tabindex="-1" id="addModalDialog" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                title
            </div>
            <div class="modal-body">
                <form role="form" id="form_add">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">路由名称</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">展示名称</label>
                        <input type="text" name="display_name" class="form-control" id="exampleInputPassword1" placeholder="display_name">
                    </div>
                    <div class="form-group">
                        <label for="">注释</label>
                        <input type="text" name="description" class="form-control" placeholder="description">
                    </div>

                    <div class="form-group">
                        <label for="">父级权限</label>
                        <select name="fid" class="form-control">
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
                        <input type="checkbox" name="is_menu" value="true">
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
        function createItem() {
            var ajax_data = $("#form_add").serializeArray();
            var ajax_url = '{{ route('admin.permission.store') }}';
            var ajax_type = 'post';
            var ajax_dataType = 'json';

            $.ajax({
                url: ajax_url,
                type: ajax_type,
                data: ajax_data,
                dataType: ajax_dataType,
                success: function (data) {
                    alert(data)
                    alert(data.status)

                },
                error: function (error) {


                    alert(error.responseText)
                }
            });
        }


    </script>
@append