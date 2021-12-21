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
    <body>
        @foreach($errors->all() as $error)

        <div class="alert alert-danger" role = "alert">
            {{$error}}
        </div> 

        @endforeach
        <div class="container">
        <form method ="Post" action="SaveEmployeeData">
            {{csrf_field()}}

            <h1>Create Employee</h1>
        
        <br>
        <div class="form-group">
            <label>Employee Name</label>
            <input type="text" class="form-control" name = "EmployeeName" id="EmployeeName" placeholder="Enter Employee Name">
        </div>
        <br>
        <div class="form-group">
            <label>Employee Address</label>
            <input type="text" class="form-control" name = "EmployeeAddress" id="EmployeeAddress" placeholder="Enter Employee Address">
        </div>
        <br>
        <div class="form-group">
            <label>Designation</label>
            <input type="text" class="form-control" name = "Designation" id="Designation" placeholder="Enter Designation">
        </div>
        <br>
        <div class="form-group">
            <label>Date of Joined</label>
            <input type="date" class="form-control" name = "DateOfJoined" id="DateofJoined" placeholder="Enter Date of Joined">
        </div>
        <br>
        <div class="form-group">
            <label>Basic Salary</label>
            <input type="number" class="form-control" name = "BasicSalary" id="BasicSalary" placeholder="Enter Basic Salary">
        </div>
        <br>
        <div class="form-group">
            <label>Contact Number</label>
            <input type="number" class="form-control" name = "ContactNumber" id="ContactNumber" placeholder="Enter Contact Number">
        </div>
        <br>
        <div class="form-group">
            <label>Department ID</label>
            <input type="number" class="form-control" name = "DepartmentId" id="DepartmentId" placeholder="Enter Department Id">
        </div>
        <br>
        <div class="form-group">
            <label>Contract Period Expire Date</label>
            <input type="date" class="form-control" name = "ContractPeriodExpireDate" id="ContractPeriodExpireDate" placeholder="ContractPeriodExpireDate">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>