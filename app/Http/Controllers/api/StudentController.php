<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //get data
    public function index()
    {
        try {
            //query data 10 record
            $students = Student::query()
                ->latest()
                ->paginate(10);
            return response()->json([
                'status' => true,
                'msg'    => 'Query 10 record',
                'data'   => $students
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => true,
                'msg'    => 'Query data seccussfully',
                'data'   => null,
            ], 500);
        }
    }
    // store data
    public function store(StudentRequest $request)
    {
        try {
            // validation all data
            $data = $request->validated();
            // hash password before send to db
            $data['password'] = Hash::make($data['password']); //name = "password" = 1234

            // send data db
            // $student = Student::create($request->validated()); short hand
            $student = Student::create($data);

            return response()->json([
                'status' => true,
                'msg'    => 'Created student seccussfully',
                'data'   => $student
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => true,
                'msg'    => 'Student Created Fails',
                'data'   => null,
            ], 500);
        }
    }
    //show by one record
    public function show(Student $student)
    {
        try {
            return response()->json([
                'status' => true,
                'msg'    => 'Show 1 Record',
                'data'   => $student,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'msg'    => $e->getMessage(),
                'data'   => null,
            ], 500);
        }
    }
    //delete
    public function destroy(Student $student){
        try {
            return response()->json([
                'status' => true,
                'msg'    => 'Delete Student Successfully',
                'data'   => $student->delete(),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'msg'    => $e->getMessage(),
                'data'   => null,
            ], 500);
        }
    }
     // store data
    public function update(UpdateStudentRequest $request, Student $student)
    {
        try {
            // validation all data
            $data = $request->validated();
            // hash password before send to db
            if(!empty($data['password'])){
                $data['password'] = Hash::make($data['password']); // keep new password request from form
            }else{
                unset($data['password']); //keep old password
            }
            // send data db
            // $student = Student::create($request->validated()); short hand
            $student->update($data);

            return response()->json([
                'status' => true,
                'msg'    => 'Update student seccussfully',
                'data'   => $student
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'msg'    => 'Update Student Fails',
                'data'   => null,
            ], 500);
        }
    }
}
