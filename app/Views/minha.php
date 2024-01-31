<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>

<body>

<h2>  <?php echo $titulo; ?>  </h2>

<table style="width:50%">
    <tr>
        <th>Nome da cor</th>
        <th>Descrição</th> 
        <th>Ativa</th>
    </tr>


    <tbody>
        <?php foreach($cores as $cor): ?>
            <tr>
                <td><?php echo $cor->nome; ?></td>
                <td><?php echo $cor->descricao; ?></td>
                <td><?php echo ($cor->ativa == true ? 'Sim' : 'Não' ); ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
  
  
</table>

</body>
</html>