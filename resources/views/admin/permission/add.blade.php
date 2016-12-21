
<div class="modal fade" tabindex="-1" id="addModalDialog" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                title
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="路由name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">display_name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="路由显示名称">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">is_menu</label>
                        <input type="">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>
        function createItem() {
            $.ajax({

            });
        }
    </script>
@append