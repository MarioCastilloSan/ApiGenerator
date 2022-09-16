<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApiGenerator</title>
</head>
<body>
    <h1>ApiGenerator</h1>
    <p>ApiGenerator is a package for Laravel that generates a REST API for your models.</p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">TABLES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$tables}};</td>
          </tr>
        </tbody>
    </table>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">VIEWS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>    {{$View}};</td>
          </tr>
        </tbody>
    </table>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">PROCEDURES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>      {{$SProcedure}};;</td>
          </tr>
        </tbody>
    </table>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>