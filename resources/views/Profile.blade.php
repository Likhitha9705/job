@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 5px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;

}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}




.container {
  padding: 16px;
}


</style>
<body>

<form action="/action_page.php" style="color:black" method="post" enctype="multipart/form-data">

          <h2> Personal Details:</h2>
    <div class="container">
    <label for="f name"><b>First Name</b></label>
       <br>
       <input type="text" placeholder="Enter First Name" name="first name" required>
       <br>

       <label for="l name"><b>Last Name</b></label>
       <br>
       <input type="text" placeholder="Enter Last Name" name="last name" required>
       <br>

       <label for="email"><b>Email</b></label>
       <br>
       <input type="text" placeholder="Enter Email" name="email" required>
       <br>

       <label for="psw"><b>Password</b></label>
       <br>
       <input type="password" placeholder="Enter Password" name="psw" required>
       <br>
       <label for="mobile num"><b>Mobile Number</b></label>
       <br>
       <input type="text" placeholder="Enter Mobile Number" name="mobile number" required>
       <br>

       <label for="al mobile num"><b> Alternate Mobile Number</b></label>
       <br>
       <input type="text" placeholder="Enter Alternate Mobile Number" name=" al mobile number" required>
       <br>

       <label for="dob"><b>Date Of Birth</b></label>
       <br>
       <input type="text" placeholder="DD/MM/YYYY" name="dob" required>
       <br>

       <label for="gen"><b>Gender</b></label>
       <br>
       <input type="text" placeholder="Gender" name="gen" required>
       <br>

       <label for="Citizenship"><b>Citizenship</b></label>
       <br>
       <input type="text" placeholder="Citizenship" name="Citizenship" required>
       <br>

       <label for="Address"><b>Address</b></label>
       <br>
       <input type="text" placeholder="Address" name="Address" required>
       <br>
    </div>


        <h2> Educational Details:</h2>
        <p>10th Standard*:</p>
    <div class="container">
    <label for="Board"><b>Board</b></label>
       <br>
       <input type="text" placeholder="Board" name="Board" required>
       <br>

       <label for="Year Of Passing"><b>Year Of Passing</b></label>
       <br>
       <input type="text" placeholder="Year Of Passing" name="Year Of Passing" value="">
       <br>

       <label for="Percentage"><b>Percentage</b></label>
       <br>
       <input type="text" placeholder="Percentage" name="Percentage" required>
       <br>
    </div>
       <p>Inter/Diploma*:</p>
    <div class="container">
      <label for="Board"><b>Board</b></label>
       <br>
       <input type="text" placeholder="Board" name="Board" required>
       <br>

       <label for="Year Of Passing"><b>Year Of Passing</b></label>
       <br>
       <input type="text" placeholder="Year Of Passing" name="Year Of Passing" required>
       <br>

       <label for="Percentage"><b>Percentage</b></label>
       <br>
       <input type="text" placeholder="Percentage" name="Percentage" required>
       <br>
    </div>
       <p>Graduation*:</p>
    <div class="container">
      <label for="University"><b>University</b></label>
       <br>
       <input type="text" placeholder="University" name="University" required>
       <br>

       <label for="Year Of Passing"><b>Year Of Passing</b></label>
       <br>
       <input type="text" placeholder="Year Of Passing" name="Year Of Passing" required>
       <br>

       <label for="Percentage"><b>Percentage</b></label>
       <br>
       <input type="text" placeholder="Percentage" name="Percentage" required>
       <br>

        <label for="Specialization"><b>Specialization</b></label>
       <br>
       <input type="text" placeholder="Specialization" name="Specialization" required>
       <br>
    </div>
</div>
<form action="/action_page.php" style="border:1px solid #ccc">
        <h2>Experience Details:</h2>

    <div class="container">
     <label for="Total Experience"><b>Total Experience</b></label>
       <br>
       <input type="text" placeholder="Total Experience" name="Total Experience" required>
       <br>

       <label for="Previous Company Name"><b>Previous Company Name</b></label>
       <br>
       <input type="text" placeholder="Previous Company Name" name="Previous Company Name" required>
       <br>

       <label for="Job Title"><b>Job Title</b></label>
       <br>
       <input type="text" placeholder="Job Title" name="Job Title" required>
       <br>
     </div>

        <h2>Other Details:</h2>

    <div class="container">
    <label for="PAN Number"><b>PAN Number</b></label>
       <br>
       <input type="text" placeholder="PAN Number" name="PAN Number" required>
       <br>

       <label for="Aadhar Number"><b>Aadhar Number</b></label>
       <br>
       <input type="text" placeholder="Aadhar Number" name="Aadhar Number" required>
       <br>
     </div>

        <h2>Documents:</h2>

    <div class="container">


         @csrf
         <div class="form-group">
             <label for="file">Resume Upload</label>
             <input type="file" class="form-control w-500" name="file" id="file" />

         </div>

    <button type="submit" class="bg-blue-500 text-white m-3 px-4 py-3 rounded font-medium ">submit</button>
     </div>
</form>

</body>
</html>

@endsection
