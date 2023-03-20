<?php 
    include("anderson.php");
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome=$_POST['nome'];
        $descricao=$_POST['descricao'];
        $estoque=$_POST['estoque'];
        $custo=$_POST['custo'];
        $preco=$_POST['preco'];
        
    }
$nome=null;
$bancodedados="SELECT COUNT(pro_id) FROM produtos WHERE pro_nome='$nome'";
$resultado=mysqli_query($link,$bancodedados);

while ($tbl = mysqli_fetch_array($resultado_db)){
    $contagem=$tbl[0];
    if($contagem==0){
        $bancodedados="INSERT INTO produtos(pro_nome, pro_descricao, pro_preco, pro_estoque, pro_custo) 
        VALUES('$nome', '$descricao', '$preco', '$estoque', '$custo')";
        mysqli_query($link, $bancodedados);
    }
    else{
        echo("PRODUTO JÁ EXISTENTE");
        header("Location:produto.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newestilo.css"
    <title>CADASTRAR PRODUTOS</title>
</head>
<body>
    <form action="produto.php" method="post">
        <label>NOME DO PRODUTO</label>
        <input type="text" name="nome">
        <br>
        <label>DESCRICAO</label>
        <input type="text" name="descricao">
        <br>
        <label>ESTOQUE</label>
        <input type="text" name="estoque">
        <br>
        <label>CUSTO</label>
        <input type="decimal" name="custo">
        <br>
        <label>PRECO</label>
        <input type="decimal" name="preco">
        <br>
        <input type="submit" value="CADASTRAR PRODUTO">
</form>
    
</body>
</html>