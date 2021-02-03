<!DOCTYPE html>
<html lang="en">
<head>
  <title>:: Cad Prog ::</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="scripts.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="jumbotron text-center">
  <h1>Cadastro de Programadores</h1>
  <p>Teste técnico ICETEC Jan/2020</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
  
      <div class="tab">
        <button class="tablinks" id='btnLogin' onclick="openDiv(event, 'Login')">Login</button>
        <button class="tablinks" id='btnLista' onclick="openDiv(event, 'Lista')">Lista de Programadores</button>
        <button class="tablinks" id='btnCadastro' onclick="openDiv(event, 'Cadastro')">Cadastro de Programadores</button>
        <button class="tablinks" id='btnLogout' onclick="openDiv(event, 'Logout')">Logout</button>
      </div>

      <div id="Login" class="tabcontent">
        <form class="formLogin">
        <div class="form-group">
          <label for="loginEmail">Name:</label>
          <input type="email" class="form-control" placeholder="user1@email.com" id="loginEmail">
        </div>
        <div class="form-group">
          <label for="loginPassword">Password:</label>
          <input type="password" class="form-control" placeholder="password" id="loginPassword">
        </div>
        <button type="button" onclick="login()" class="btn btn-default">Login</button>
        </form>
      </div>
      <input type="hidden" id="token" value="">




      <div id="Cadastro" class="tabcontent">
        <div class="form-group">
          <label for="usr">Name:</label>
          <input type="text" class="form-control" placeholder="Bill H. Gates" id="usr">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" placeholder="gates@email.com" id="email">
        </div>
      <div class="form-group">
          <label for="idade">Idade:</label>
          <input type="idade" class="form-control" placeholder="48" id="idade">
        </div>
      <div class="form-group">
          <label for="linkedin">URL LinkedIn:</label>
          <input type="linkedin" class="form-control" placeholder="https://www.linkedin.com/in/williamhgates/" id="linkedin">
        </div>

      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 1
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 2
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 3
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 1
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 2
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 3
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 1
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 2
      </label>
      <label class="checkbox-inline">
        <input type="checkbox" value="">Option 3
        </label>
        <br><br>
      <button type="button" class="btn btn-default">Cadastrar</button>
      </div>

      <div id="Lista" class="tabcontent">
      <div id="myBtnContainer">
        <button class="btnFilter active" onclick="filterSelection('all')"> Show all</button>
        <button class="btnFilter" onclick="filterSelection('cars')"> Cars</button>
        <button class="btnFilter" onclick="filterSelection('animals')"> Animals</button>
        <button class="btnFilter" onclick="filterSelection('fruits')"> Fruits</button>
        <button class="btnFilter" onclick="filterSelection('colors')"> Colors</button>
      </div>
      <table>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
          <th>Email</th>
          <th>LinkedIn</th>
          <th>Skills</th>
          <th>Ações</th>
        </tr>
        <tr>
          <td>Bill Gates</td>
          <td>48</td>
          <td>billgates@gmail.com</td>
          <td><a href="http://linkedin.com/billgates">linkedin.com/billgates</a></td>
          <td>React, PHP, Laravel, C#, React, PHP, Laravel, C#</td>
          <td><button type="button" class="btn btn-primary">Editar</button><button type="button" class="btn btn-danger">Excluir</button>
          </td>
        </tr>
        <tr>
          <td>Bill Gates</td>
          <td>48</td>
          <td>billgates@gmail.com</td>
          <td><a href="http://linkedin.com/billgates">linkedin.com/billgates</a></td>
          <td>React, PHP, Laravel, C#, React, PHP, Laravel, C#</td>
          <td><button type="button" class="btn btn-primary">Editar</button><button type="button" class="btn btn-danger">Excluir</button>
          </td>
        </tr>
        <tr>
          <td>Bill Gates</td>
          <td>48</td>
          <td>billgates@gmail.com</td>
          <td><a href="http://linkedin.com/billgates">linkedin.com/billgates</a></td>
          <td>React, PHP, Laravel, C#, React, PHP, Laravel, C#</td>
          <td><button type="button" class="btn btn-primary">Editar</button><button type="button" class="btn btn-danger">Excluir</button>
          </td>
        </tr>
      </table>
      </div>

      <div id="Logout" class="tabcontent">
        <h3>Logout</h3>
        <p>Logout is the capital of Japan.</p>
      </div>
      </div>
    </div>
    <div class="col-sm-1">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12" style='min-height: 100px;'>
      </div>
  </div>
</div>

</body>
</html>
