<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Validator;
use App\Traits\Calc;


class UserController extends Controller
{
    use Calc;
   /*  public function __construct()
    {
       $this->middleware('textMiddleware');
    } */

    public function home(Request $request){
        $sum = $this->add($request, 2, 3);
        echo "home ".$sum;
    }


    public function index()
    {
        return response()->json(User::latest()->get());
    }
    public function userList()
    {
        return response()->json(User::latest()->get());
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
        try {
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                'email'=>'required|email|unique:users',
            ]);
            
            if ($validator->fails()) {
                return response()->json((object)array("validation"=>$validator->errors()->all()));
            }else{
                User::create([
                    'parent_id'=>$request->parent_id ?? NULL,
                    'name'=>$request->name,
                    'email'=>$request->email,
                ]);
            }
    
            return response()->json('successfully created');
        } catch (\Throwable $th) {
            return response()->json($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($parentId)
    {
        return response()->json(User::where('parent_id', $parentId)->latest()->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(User::whereId($id)->first());
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
        try {
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                // 'email'=>'required|email|unique:users,email'. $id,
                'email' => ['required', 'email', Rule::unique('users')->ignore($id)],
            ]);
            
            if ($validator->fails()) {
                return response()->json((object)array("validation"=>$validator->errors()->all()));
            }else{
                $employee = User::whereId($id)->first();
                $employee->update([
                    'parent_id'=>$request->parent_id ?? NULL,
                    'name'=>$request->name,
                    'email'=>$request->email,
                ]);
            }
    
            return response()->json("Update Successfully !");
        } catch (\Throwable $th) {
            return response()->json($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('parent_id', $id)->delete();
        User::whereId($id)->first()->delete();
        return response()->json('success');
    }
}
