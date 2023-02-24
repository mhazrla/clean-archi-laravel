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

    public function store($id = null, array $data): Employee
    {
        return Employee::updateOrCreate([
            'id' => $id
        ], $data);
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

    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        return $employee->delete();
    }
}
