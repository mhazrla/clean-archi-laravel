<?php

namespace App\InterfaceAdapters;

use App\Entities\Employee;
use App\InterfaceAdapters\EmployeeRepository;
use App\Models\Employee as ModelsEmployee;
use Illuminate\Database\Eloquent\Collection;

class EmployeeRepositoryInterface implements EmployeeRepository
{
    public function all(): Collection
    {
        return Employee::all();
    }

    public function store(array $data): Employee
    {
        return Employee::create($data);
    }

    public function findById(int $id): ?Employee
    {
        $employee = ModelsEmployee::find($id);

        if ($employee === null) {
            return null;
        }

        $data = [
            'id' => $employee->id,
            'name' => $employee->name,
            'title' => $employee->title,
            'gender' => $employee->gender
        ];
        return new Employee($data);
    }

    public function update($id, $data): Employee
    {
        return Employee::where('id', $id)->update($data);
    }

    public function delete($id): Employee
    {
        $employeeModel = ModelsEmployee::find($employee->getId());
        $employeeModel->delete();
    }
}
