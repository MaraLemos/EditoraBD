<?php 
include('header.php');
if(isset($_POST['submit']) and !empty($_POST['submit'])){
$ret_val = $obj->createFuncionario();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Funcionário salvo com sucesso!");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>CRUD de Exemplo</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-eye-open"></span> View Funcionários</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">Inserir um Funcionário</div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">
             
             <div class="form-group">
               <label class="control-label col-sm-2">Nome:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="name" required>
               </div>
            </div>          
             <div class="form-group">
               <label class="control-label col-sm-2">Telefone:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="telefone" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">CPF:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="number" name="cpf" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Data de Nascimento:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="date" name="datanasc" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Bonificação:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="bonificacao" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Endereço:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="endereco" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Nis:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="nis" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Data do Contrato:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="date" name="datacontrato" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Cargo:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="cargo" required>
               </div>
            </div> 
            <div class="form-group">
               <label class="control-label col-sm-2">Salário Base:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="salariobase" required>
               </div>
            </div>
            <div class="panel-body">
              <div class="form-group">
               <label class="control-label col-sm-2">Id Setor:</label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="idsetor">
               </div>
            </div>
            <div class="panel-body">
              <div class="form-group">
               <label class="control-label col-sm-2">Id Filial:</label>
               <div class="col-sm-5">
                  <input class="form-control" type="text" name="idfilial">
               </div>
            </div>    
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                  <input type="submit" class="btn btn-primary" name="submit"  value="Submit">
               </div>
            </div> 
        </div>      
</form>
</div>
</div>  
 <?php include('footer.php');?>