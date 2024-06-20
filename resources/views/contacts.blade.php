<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>contacts:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">subject</th>
        <th scope="col">message</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contacts as $contact)
<tr>
  <th scope="row">1</th>
  <td>{{$contact->name}}</td>
  <td>{{$contact->email}}</td>
  <td>{{$contact->subject}}</td>
  <td>{{$contact->message}}</td>
</tr>
@endforeach
</tbody>
  </table>
</div>

</body>
</html>


