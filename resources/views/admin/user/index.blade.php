@extends('admin.layouts.dashboard')

@section('content')

    <div class="row" style="margin-top: 40px;">
        <div class="col-md-1">
            @include('admin.components.left_menu')
        </div>
        <div class="col-md-11">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">用户管理</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <th>昵称</th>
                            <th>手机号</th>
                            <th>创建时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        @if(count($users))
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone_num }}</td>
                                    <td><span class="label label-info">{{ $user->created_at }}</span></td>
                                    <td><span class="label label-success">{{ $user->updated_at }}</span></td>
                                    <td>
                                        <button class="btn btn-success btn-sm">编辑</button>
                                        <button class="btn btn-danger btn-sm">删除</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <h3>暂无数据</h3>
                        @endif
                        </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>


@endsection