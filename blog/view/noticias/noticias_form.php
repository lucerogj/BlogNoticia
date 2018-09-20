  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <div class="row my-2">
    <div class="col-12 col-xl-12"></div>
    <div class="col-12 col-sm-12 col-xl-12">
        <div class="card bg-light border-info w-100">
            <div class="card-header">
                <h4 class="text-secondary"> <?php echo $alm->Id != null ? $alm->Titulo : 'Nueva Noticia'; ?></h4> 
            </div>
            <div class="card-body">
                <form id="frm-Noticias" action="?c=Noticias&a=Guardar" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="Id" value="<?php echo $alm->Id; ?>" />
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group ">
                                <label class="text-info">Titulo</label>
                                <label class="text-danger"></label>
                                <input tabindex="1"  type="text" name="Titulo" class="form-control  form-control-sm" placeholder="Ingrese el Titulo" data-validacion-tipo="requerido"  value="<?php echo $alm->Titulo; ?>"/>
                            </div>
                            <div class="form-group ">
                                <label class="text-info">Contenido</label>
                                <label class="text-danger"></label>
                                <input tabindex="1"  type="text" name="Contenido" class="form-control  form-control-sm" placeholder="Ingrese el Contenido" data-validacion-tipo="requerido"  value="<?php echo $alm->Contenido; ?>"/>
                            </div>
                             <div class="form-group">
                                <label>Tipo de Noticia</label>
                                <select name="Tipo" class="form-control">
                                    <option <?php echo $alm->Tipo == "Deporte" ? 'selected' : ''; ?> value="Deporte">Deporte</option>
                                    <option <?php echo $alm->Tipo == "Cine" ? 'selected' : ''; ?> value="Cine">Cine</option>
									<option <?php echo $alm->Tipo == "Musica"? 'selected' : ''; ?> value="Musica">Musica</option>
                                </select>
                            </div>  
                            <div class="form-group ">
                                <button tabindex="9"  class="btn btn-sm btn-success">Guardar</button>
                                <a href="javascript:history.back(1)" tabindex="13" class="btn btn-sm btn-secondary">Volver</a>
                            </div>							
        
                        </div>

                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-ui.js"></script>