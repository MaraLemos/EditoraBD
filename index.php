<?php 
include('header.php');
$funcionarios = $obj->getFuncionarios();
$sn=1;
if(isset($_POST['update'])){
    $func = $obj->getFuncionarioById();
    $_SESSION['func'] = pg_fetch_object($funcionarios);
    header('location:edit.php');
}
if(isset($_POST['delete'])){
   $ret_val = $obj->deleteFuncionario();
   if($ret_val==1){
       
      echo "<script language='javascript'>";
      echo "alert('Funcionário removido com sucesso!'){
          window.location.reload();
      }";
      echo "</script>";
  }
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>CRUD de Exemplo</h3>
  <a href="insert.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> Add Funcionário</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">Tabela de Funcionários</div>
             
            <div class="panel-body">
            <table class="table table-bordered table-striped">
    <thead>
      <tr class="active">
            <th>Id</th>  
            <th >Nome</th>       
            <th>Telefone</th>
            <th>CPF</th>
            <th>Cargo</th>
            <th>Salário</th>
            <th>Bonificação</th>
            <th>Setor</th>
            <th>Filial</th>
            <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php while($func = pg_fetch_object($funcionarios)): ?>   
      <tr align="left">
        <td ><?=$func->idpessoa?></td>
        <td><?=$func->nome?></td>
        <td><?=$func->telefone?></td>
        <td><?=$func->cpf?></td>
        <td><?=$func->cargo?></td>
        <td><?=$func->salariobase?></td>
        <td><?=$func->bonificacao?></td>
        <td><?=$func->idsetor?></td>
        <td><?=$func->idfilial?></td>
        <td>
            <form method="post">
                <input type="submit" class="btn btn-success" name= "update" value="Update">   
                <input type="submit" onClick="return confirm('Por favor confirme a deleção');" class="btn btn-danger" name= "delete" value="Delete">
                <input type="hidden" value="<?=$func->idpessoa?>" name="id">
            </form>
        </td>
      </tr>
    <?php endwhile; ?>   
    </tbody>
  </table>
</div>
 
</div>
</div>  
<?php include('footer.php');?>