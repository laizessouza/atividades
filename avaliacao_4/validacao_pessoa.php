<?php

function validaPessoa($nome, $cpf, $nascimento, $sexo, $estado, $telefone, $observacoes){

$formValido = true;

if($sexo == null){
    echo "Selecione uma opção para o campo sexo </br> ";
    $formValido = false;

    }

    if($estado == -1){
    echo "Por favor, selecione uma opção Estado <br/> ";
    $formValido = false;
    }
    

    
    $nome = trim($nome);
    if(empty($nome)){
        echo "Por favor, preencha o campo nome </br>";
    $formValido = false;
    }

    if (!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s]+$/", $nome)){
         echo "Formato inválido para o campo nome<br/>";
         $formValido = false;
   
    
    }
  
    $observacoes = trim($observacoes);
    if (empty($observacoes)){
        echo "Por favor, preencha o campo observacoes <br/>";
        $formValido = false;
    }
    
    if (!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s\\.\\,]+$/", $observacoes)) {
        echo "Formato inválido para o campo observacoes <br/>";
        $formValido = false;
    }
        
    
   $telefone = trim($telefone);
    if(empty($telefone)){
    echo "Por favor, preencha o campo telefone </br>";
    $formValido = false;
    }

else if (!preg_match("/^(\d{3}\s)?\d{4}\\-\d{4}$/", $telefone) and !preg_match("/^\d{4}\\-\d{4}$/", $telefone)){
    echo "Formato inválido para o campo telefone.";
    $formValido = false;
    
    }
    
    
    
    
    
$nascimento = trim($nascimento);
if(empty($nascimento)){
    echo "O campo data de nascimento é obrigatório. </br>";
    $formValido = false;
    }
if(!preg_match("/^\d{2}\\/\d{2}\\/\d{4}$/", $nascimento)){
    echo "Formato do campo data de nascimento inválido.Utilize o formato dd/mm/aaaa </br>";
    $formValido = false;
    } 
    else{
        $pedacos = explode('/', $nascimento);
        $dia = $pedacos[0];
        $mes = $pedacos[1];
        $ano = $pedacos[2]; 

        if(!checkdate($mes, $dia, $ano)){
        echo " </br>Data inválida </br>";
        $formValido = false; 
    }

    else{

        $dataYmd = $ano.$mes.$dia;
        $nascimentoYmd = date('Ymd');
        if($nascimentoYmd < $dataYmd){
            echo "Data de nascimento é no futuro. </br>" ;
            $formValido = false; 
        }
    
        }
    }
    
    
    $cpf = trim($cpf);
    if(empty($cpf)){
        echo "O Campo CPF é Obrigatório! <br/>";
        $formValido = false;
    
    }
    if (!preg_match("/^\d{3}\\.\d{3}\\.\d{3}\\-\d{2}$/", $cpf)){
        echo "Formato inválido para o campo cpf <br/>";
        $formValido = false;
    }   
  
  
  
    return $formValido;
    }

?>
