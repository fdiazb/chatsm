<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Eliminar proyecto</h4>
            <?php echo form_open(base_url() . 'projects/destroy/'.$project['prj_id'], array('class', 'email')); ?>
            <p class="card-description">
                Elimina el proyecto seleccionado.
            </p>
            <div class="row">
                <?php echo form_submit('submit', 'Eliminar', array('class'=>'btn btn-success mr-2')) ?>
                <a href="/projects/index" class="btn btn-light">Cancelar</a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php $this->load->view('layout/display'); ?>
