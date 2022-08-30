<h1 class="page-header">
    <?php echo $libro->id != null ? $libro->Titulo : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=libro">Libro</a></li>
  <li class="active"><?php echo $libro->id != null ? $libro->Titulo : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=libro&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $libro->id; ?>" />
      <div class="form-group">
        <label>ISBN</label>
        <input type="text" name="ISBN" value="<?php echo $libro->ISBN; ?>" class="form-control" placeholder="Ingrese el ISBN del libro" required>
    </div>
    
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="Titulo" value="<?php echo $libro->Titulo; ?>" class="form-control" placeholder="Ingrese el título del libro" required>
    </div>
    
    <div class="form-group">
        <label>Autor</label>
        <input type="text" name="Autor" value="<?php echo $libro->Autor; ?>" class="form-control" placeholder="Ingrese el autor del libro" required>
    </div>
    
    <div class="form-group">
        <label>Género</label>
        <input type="text" name="Genero" value="<?php echo $libro->Genero; ?>" class="form-control" placeholder="Ingrese el género del libro" required>
    </div>
     <div class="form-group">
        <label>Fecha de Publicacion</label>
        <input type="date" name="Fecha_publicacion" value="<?php echo $libro->Fecha_publicacion; ?>" class="form-control" placeholder="Ingrese la fecha de publicación del libro" required>
    </div>

    <div class="form-group">
        <label>Resumen</label>
        <input type="text" name="Resumen" value="<?php echo $libro->Resumen; ?>" class="form-control" placeholder="Ingrese el resumen o comentarios del libro" required>
    </div>
        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>