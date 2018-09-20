<div class="row my-2">
    <div class="col-12 col-xl-12 border border-success">
       <br>
        <table id="example" class="table table-sm table-hover table-striped table-bordered">

        </table> 
		
        <div class="col-xl-12">
          <div class="row">
             <?php foreach($this->model1->Listar() as $r): ?>
                 <div class="col-lg-3 col-sm-6 portfolio-item" Id="<?php echo $r->Id; ?>">
                   <div class="card h-100">
                     <div class="card-header"><?php echo $r->Titulo; ?></div>
                     <div class="card-body"> 
					      <p class="card-text"><?php echo $r->Contenido; ?></p> 

					  </div>
					 
                      <div class="card-footer text-muted"> <?php echo $r->Tipo; ?> </div>  
				  </div>
                </div>
				  <?php endforeach; ?>  
           </div>
        </div>

			
    </div>
</div>  
