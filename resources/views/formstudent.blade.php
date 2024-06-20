<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('studentdata')}}" method="POST">
    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="lname">age:</label><br>
  <input type="text" id="age" name="age" ><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
