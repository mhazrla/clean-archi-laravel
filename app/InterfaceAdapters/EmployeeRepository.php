<?php

namespace App\InterfaceAdapters;

use App\Entities\Employee;
use Illuminate\Database\Eloquent\Collection;

interface EmployeeRepository
{
    public function all(): Collection;
    public function store($id = null, array $data): Employee;
    public function findById(int $id): ?Employee;
    public function delete(int $id);
}
