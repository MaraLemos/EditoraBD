<?php 
include('header.php');
$func = $_SESSION['func'];
if(isset($_POST['updatee']) and !empty($_POST['updatee'])){
$ret_val = $obj->updateFuncionario();
if($ret_val==1){
    echo '<script type="text/javascript">'; 
    echo 'alert("Funcionário atualizado com sucesso!");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>CRUD Exemplo</h3>
  <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-step-backward"></span>Back</a>
  <br>  
  <div class="panel panel-primary">
        <div class="panel-heading">Edição do Funcionário <?=$func->nome?></div>
            <form class="form-horizontal" method="post">
            <div class="panel-body">
              <div class="form-group" style="display: none">
               <label class="control-label col-sm-2">Id:</label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->idpessoa?>" type="text" name="idpessoa">
               </div>
            </div>             
             <div class="form-group">
               <label class="control-label col-sm-2">Nome:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->nome?>"type="text" name="nome" required>
               </div>
            </div>          
             <div class="form-group">
               <label class="control-label col-sm-2">Telefone:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->telefone?>"type="number" name="telefone" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">CPF:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->cpf?>"type="number" name="cpf" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Data de Nascimento:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->datanasc?>"type="date" name="datanasc" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Bonificação:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->bonificacao?>"type="text" name="bonificacao" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Endereço:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->endereco?>"type="text" name="endereco" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Nis:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->nis?>"type="text" name="nis" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Data do Contrato:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->datacontrato?>"type="date" name="datacontrato" required>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2">Cargo:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->cargo?>"type="text" name="cargo" required>
               </div>
            </div> 
            <div class="form-group">
               <label class="control-label col-sm-2">Salário Base:<span style='color:red'>*</span></label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->salariobase?>"type="text" name="salariobase" required>
               </div>
            </div>
            <div class="panel-body">
              <div class="form-group" style="display: none">
               <label class="control-label col-sm-2">Id:</label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->idsetor?>" type="text" name="idsetor">
               </div>
            </div>
            <div class="panel-body">
              <div class="form-group" style="display: none">
               <label class="control-label col-sm-2">Id:</label>
               <div class="col-sm-5">
                  <input class="form-control" value= "<?=$func->idfilial?>" type="text" name="idfilial">
               </div>
            </div>  
             <div class="form-group">
               <label class="control-label col-sm-2">  </label>
               <div class="col-sm-5">
                 <input type="submit" class="btn btn-success" name="updatee" value="Update">                    
                </div>
            </div> 
        </div>      
</form>
</div>
</div>  
 <?php include('footer.php');?>