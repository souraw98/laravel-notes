<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return response()->json($student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //form create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{

            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->mobile = $request->mobile;

            if($student->save()){
                $response = [
                    'code'=>200,
                    'message'=>'Record inserted Sucessfully',
                    'status'=>true,
                    'data'=>[
                       'id'=> $student->id
                    ],
                    'error'=>false
                 ];
                return response()->json($response);
            }
            else{
                throw new \Exception();
            }
            
        }catch(\Exception $e){
            $response = [
                'code'=>201,
                'message'=>'Record not inserted Sucessfully',
                'status'=>false,
                'data'=>[],
                'error'=>$e->getMessage()

             ];
            return response()->json($response);
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
        $student = Student::find($id);
        return response()->json($student);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit single record
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
        try{

            $student = Student::find($id);

            $student->name = $request->name;
            $student->email = $request->email;
            $student->mobile = $request->mobile;

        
            if($student->save()){

                $newStudent = Student::find($id);

                $response = [
                    'code'=>200,
                    'message'=>'Record Updated Sucessfully',
                    'status'=>true,
                    'data'=> $newStudent,
                    'error'=>false
                 ];
                return response()->json($response);
            }
            else{
                throw new \Exception();
            }
            
        }catch(\Exception $e){
            $response = [
                'code'=>201,
                'message'=>'Record not updated Sucessfully',
                'status'=>false,
                'data'=>[],
                'error'=>$e->getMessage()

             ];
            return response()->json($response);
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
        print_r($id,'Delete Method is Running');
        
    }
}
