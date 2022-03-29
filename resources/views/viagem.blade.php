<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: rgb(51, 58, 253);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: rgb(51, 58, 253);
  text-decoration: underline;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Cadastro de Viagem</h3>

<div>
  <form method="post" action="/cadastro">
    <label for="fname">Nome:</label>
    <input type="text" id="fname" name="firstname" placeholder="Nome">

    <label for="ltelefone">Estado de Embarque:</label>
    <input type="text" id="ltelefone" name="lasttelefone" placeholder="Saida">

    <label for="ltelefone">Estado de Desembarque:</label>
    <input type="text" id="lEstado_entrada" name="lastEstado_entrada" placeholder="Entrada">

    <label for="lendereco">Data de Embarque:</label>
    <input type="date" id="lData_origem" name="lastData_origem" placeholder="Data_Origem">

    <label for="lendereco">Data de Chegada:</label>
    <input type="date" id="lData_Destino" name="lastData_destino" placeholder="Data_Destino">
  
    <input type="submit" value="Cadastrar">
    {{ csrf_field() }}
  </form>
</div>

</body>
</html>


