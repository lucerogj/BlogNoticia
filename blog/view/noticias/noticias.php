<div class="row my-2">
    <div class="col-12 col-xl-12 border border-success">
       <div class="my-2">&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-outline-secondary" href="?c=Noticias&a=form">Nueva Noticia</a></div> 
       <br>
        <table id="example" class="table table-sm table-hover table-striped table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Titulo</th>
                    <th>Contenido</th>
				    <th>Tipo</th>	                   
                    <th style="width: 80px; max-width: 85px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->model->Listar() as $r): ?>
                <tr>
                    <td><?php echo $r->Titulo; ?></td>
                    <td><?php echo $r->Contenido; ?></td>
                    <td><?php echo $r->Tipo; ?></td>
                    <td>
                        <a class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="Editar" href="?c=noticias&a=form&Id=<?php echo $r->Id; ?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Borrar" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=noticias&a=Eliminar&Id=<?php echo $r->Id; ?>"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table> 
    </div>
</div>
