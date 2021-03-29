<h1> tralialia </h1>

<?php

use Model\Employee;
use Repository\EmployeeRepository;
use Controller\EmployeeController;

require('/Applications/MAMP/htdocs/phpunit-homework/app/repositories/EmployeeRepository.php');
require('/Applications/MAMP/htdocs/phpunit-homework/app/models/Employee.php');
require('/Applications/MAMP/htdocs/phpunit-homework/app/controllers/EmployeeController.php');

_dc("fffff");

$repository = new EmployeeRepository;
$repo = new EmployeeRepository();
_dc((new EmployeeController($repo))->getAllJsonWithMetaInformation());
// _dc($repository);
// $employee = new Employee(4, "Algirdas");

// _dc($employee);

$employees = $repository->getAll();
// var_dump($employees);
// _dc($employees);
