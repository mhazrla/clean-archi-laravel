<?php

namespace App\UseCases;

use App\Entities\Employee;
use App\InterfaceAdapters\EmployeeRepository;

class EmployeeUseCase
{
    protected $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAllEmployee()
    {
        return $this->employeeRepository->all();
    }

    public function getEmployeeById(int $id): Employee
    {
        return $this->employeeRepository->findById($id);
    }

    public function storeEmployee(array $data): Employee
    {
        return $this->employeeRepository->store($data);
    }

    public function updateEmployee(int $id, array $data): Employee
    {
        return $this->employeeRepository->update($id, $data);
    }

    public function deleteEmployee(int $id): Employee
    {
        return $this->employeeRepository->delete($id);
    }
}
