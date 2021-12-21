<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Employee</title>
  </head>
    <style>
    table, th, td {
    border: 1px solid black;
    }
    </style>
    <body>
        <h1>Employee Details</h1>
        <a href ="/CreateEmployee">Create</a>
        <table >
            <tr>
            <th> Employee Id</th>
        
            <th>Employee Name</th>
        
            <th>Employee Address</th>
            
            <th>Designation</th>
        
            <th>Date of Joined</th>
        
            <th>Basic Salary</th>
            
            <th>Contact Number</th>
        
            <th>Department Id</th>
        
            <th>Contract Period Expire Date</th>
            <th>Action</th>
            </tr>

            @foreach($Employeedata as $Data)
            <tr>
                <td> {{$Data->id}}</td>
            <td> {{$Data->EmployeeName}}</td>
            <td> {{$Data->EmployeeAddress}}</td>
            <td> {{$Data->Designation}}</td>
            <td> {{$Data->DateOfJoined}}</td>
            <td> {{$Data->BasicSalary}}</td>
            <td> {{$Data->ContactNumber}}</td>
            <td> {{$Data->DepartmentId}}</td>
            <td> {{$Data->ContractPeriodExpireDate}}</td>
            <td> <a href ="/UpdateEmployee/{{$Data->id}}" class="btn btn-secondary">Update</a>
                <a href ="/DeleteEmployee/{{$Data->id}}" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </table>`
            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>   
</html>