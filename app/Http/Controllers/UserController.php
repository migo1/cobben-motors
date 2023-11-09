<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Exports\UserExport;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
// use App\Imports\UserImport;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $data = User::with('roles')->when($search, function ($query) use ($search) {
            return $query->where(function ($q) use ($search) {
                return $q->where('name', 'LIKE', '%' . $search . '%')
                    ->orwhere('email', 'LIKE', '%' . $search . '%');
            });
        })
        ->orderBy('id', 'DESC')
        ->paginate(10)
        ->withQueryString();

        $roles = Role::all();

        return Inertia::render('Users/Index', [
            'users' => UserResource::collection($data)->response()->getData(true),
            'roles' => $roles,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm_password',
            ]
        );

        $input = $request->all();
        Log::info($input);
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('role_id'));

        if ($request->hasFile('thumbnail')) {
            $user->addMediaFromRequest('thumbnail')->toMediaCollection('profile_pic');
        }

        return redirect()->back()->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        // return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        // return view('users.edit', compact('user', 'roles', 'userRole'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm_password',
            'role_id' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);

        if ($request->hasFile('thumbnail')) {
            $user->getFirstMedia('profile_pic');
            foreach ($user->getMedia('profile_pic')->pluck('id') as $key => $value) {
                $media = Media::find($value);
                $model = $media->model_type::find($media->model_id);
                $model->deleteMedia($media->id);
            }

            $user->addMediaFromRequest('thumbnail')->toMediaCollection('profile_pic');
        }

        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('role_id'));

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }

    // public function export()
    // {
    //     return Excel::download(new UserExport(), 'Usersexport-' . date('d-m-y h:i') . '.xlsx');
    // }

    // public function import(Request $request)
    // {
    //     $this->validate($request, [
    //         'upload' => 'required|mimes:xlsx'
    //     ]);

    //     $upload = $request->file('upload');
    //     $filename = 'pcwd-' . Str::random(32) . time() . '.' . $upload->getClientOriginalExtension();

    //     Storage::disk('local')->putFileAs(
    //         'uploads',
    //         $upload,
    //         $filename
    //     );

    //     $url = base_path('storage/app/uploads/' . $filename);
    //     Excel::import(new UserImport(), $url);

    //     return redirect()->route('users.index')->with('success', 'User Data Has Been Succesfully Been Uploaded');
    // }
}
