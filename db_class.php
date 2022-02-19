<?php
include_once('connection.php'); 
class Db_Class{

    function createFuncionario(){

        $id = pg_query("SELECT COUNT(*) FROM public.pessoa");

        pg_query("INSERT INTO public.pessoa VALUES('".$id."','".$this->cleanData($_POST['name'])."','".$this->cleanData($_POST['telefone'])."')");

        $sql = "INSERT INTO public.funcionario(idpessoa,cpf,datanasc,bonificacao,endereco,nis,datacontrato,cargo,salariobase,idsetor,idfilial) "."VALUES('".$id."','".$this->cleanData($_POST['cpf'])."','".$this->cleanData($_POST['datanasc'])."','".$this->cleanData($_POST['bonificacao'])."','".$this->cleanData($_POST['endereco'])."','".$this->cleanData($_POST['nis'])."','".$this->cleanData($_POST['datacontrato'])."','".$this->cleanData($_POST['cargo'])."',,'".$this->cleanData($_POST['salariobase'])."','".$this->cleanData($_POST['idsetor'])."','".$this->cleanData($_POST['idfilial'])."')";

        return pg_affected_rows(pg_query($sql));
    }

    function getFuncionarios(){             
        $sql ="select *from public.pessoa p INNER JOIN public.funcionario f ON p.idPessoa = f.idPessoa";
        return pg_query($sql);
    }

    function getFuncionarioById(){    
  
        $sql ="select *from public.pessoa p INNER JOIN public.funcionario f ON p.idPessoa = f.idPessoa where idPessoa=".(int)$this->cleanData($_POST['id']);
        return pg_query($sql);
    } 

    function deleteFuncionario(){    
        
        //Existe um trigger que remove da tabela pessoa ao remover um funcionario
         $sql ="delete from public.funcionario where idPessoa=".(int)$this->cleanData($_POST['id']);
        return pg_query($sql);
    }

    function updateFuncionario($data=array()){

        $sql = "update public.pessoa set nome='".$this->cleanData($_POST['nome'])."', telefone='".(int)$this->cleanData($_POST['telefone'])."' where idpessoa =".(int)$this->cleanData($_POST['idpessoa']);;

        pg_query($sql);

        $sql = "update public.funcionario set cpf='".$this->cleanData($_POST['cpf'])."',datanasc='".$this->cleanData($_POST['datanasc'])."', bonificacao='".$this->cleanData($_POST['bonificacao'])."',endereco='".$this->cleanData($_POST['endereco'])."',nis='".$this->cleanData($_POST['nis'])."',datacontrato='".$this->cleanData($_POST['datacontrato'])."',cargo='".$this->cleanData($_POST['cargo'])."',salariobase='".$this->cleanData($_POST['salariobase'])."',idsetor='".(int)$this->cleanData($_POST['idsetor'])."',idfilial='".(int)$this->cleanData($_POST['idfilial'])."' where idpessoa =".(int)$this->cleanData($_POST['idpessoa']);
        return pg_affected_rows(pg_query($sql));        
    }

    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>