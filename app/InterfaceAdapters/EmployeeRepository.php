<?php

namespace App\InterfaceAdapters;

use App\Entities\Employee;
use Illuminate\Database\Eloquent\Collection;

interface EmployeeRepository
{
    public function all(): Collection;
    public function store(array $data): Employee;
    public function findById(int $id): ?Employee;
    public function update(int $id, array $data): Employee;
    // public function delete(int $id): Employee;
    // public function update(Employee $employee): void;
    public function delete(int $id): Employee;
}
