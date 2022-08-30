<h1 class="page-header">BIBLIOTECA</h1>


    <a class="btn btn-primary pull-right" href="?c=libro&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">ISBN</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Título</th>
            <th style=" background-color: #5DACCD; color:#fff">Autor</th>
            <th style=" background-color: #5DACCD; color:#fff">Género</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Fecha de Publicación</th>            
            <th style="width:60px; background-color: #5DACCD; color:#fff">Resumen</th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->ISBN; ?></td>
            <td><?php echo $r->Titulo; ?></td>
            <td><?php echo $r->Autor; ?></td>
            <td><?php echo $r->Genero; ?></td>
            <td><?php echo $r->Fecha_publicacion; ?></td>
            <td><?php echo $r->Resumen; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=libro&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Está seguro que desea eliminar este registro?');" href="?c=libro&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
