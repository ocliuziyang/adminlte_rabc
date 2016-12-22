<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\PermissionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\Flysystem\Exception;

class PermissionController extends BaseController
{

    private $permissionRepositoary;

    public function __construct(PermissionRepository $permissionRepositoary)
    {
        $this->permissionRepositoary = $permissionRepositoary;
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permissions = $this->permissionRepositoary->allPermissions();
        return view('admin.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required',
            'fid' => 'required'
        ]);

        $res = $this->permissionRepositoary->savePermission($request);
        if ($res) {
            return [
                'status' => 1,
                'statusMsg' => '添加成功',
                 'data' => $res
            ];
        } else {
            return [
                'status' => 0,
                'statusMsg' => '添加失败'
            ];
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $res = $this->permissionRepositoary->findPermissionById($id);
        if ($res) {
            return response([
                'status' => 1,
                'permission' => $res
            ]);
        }

        return response([
            'status' => 0
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
