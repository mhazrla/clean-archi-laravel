<?php

namespace App\Http\Controllers;


use App\UseCases\EmployeeUseCase;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    protected $_employeeUseCase;

    public function __construct(EmployeeUseCase $employeeUseCase)
    {
        $this->_employeeUseCase = $employeeUseCase;
    }

    public function index(EmployeeUseCase $employeeUseCase)
    {
        return response()->json([
            'data' => $employeeUseCase->getAllEmployee()
        ]);
    }

    public function getEmployeeById($id, EmployeeUseCase $employeeUseCase)
    {
        return response()->json([
            'data' => $employeeUseCase->getEmployeeById($id)
        ]);
    }

    public function store(Request $request, EmployeeUseCase $employeeUseCase, $id = null)
    {
        return response()->json([
            'data' => $employeeUseCase->storeOrUpdateEmployee($id, $request->all())
        ]);
    }

    public function destroy($id, EmployeeUseCase $employeeUseCase)
    {
        $employeeUseCase->deleteEmployee($id);

        return response()->json([null, Response::HTTP_NO_CONTENT], 204);
    }
}
