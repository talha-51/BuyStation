@extends('employee.employeeNavbar')

@section('title')
    Employee Home
@endsection

@section('mainContent')
    <div class="container text-center">
        <h1>Welcome Home , {{ $employee->employee_username }}</h1>
    </div>
@endsection
