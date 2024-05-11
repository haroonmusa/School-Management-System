<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Create</title>
    <style>
        .container-size {
        margin-top: 5%;
        width: 400px;
        height: 500px;
    }
    </style>
</head>
<body>
<div class="container container-size " >
    <div style="text-align: center">
        <h3>Edit Student</h3>
    </div>
    <form action="{{route('students.update',['student' => $student])}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
          <label class="form-label">First Name</label>
          <input type="text" name='firstname' class="form-control" value="{{$student->firstname}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name='lastname' class="form-control" value="{{$student->lastname}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name='email' class="form-control" value="{{$student->email}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" name='date_of_birth' class="form-control" value="{{$student->date_of_birth}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone #</label>
            <input type="text" name='contact' class="form-control" value="{{$student->contact}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
