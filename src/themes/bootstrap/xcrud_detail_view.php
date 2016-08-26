<?php echo $this->render_table_name($mode); ?>
<div class="box-body">
    <div class="xcrud-top-actions pull-left"><?php echo $this->render_button('return','list','','btn btn-default', 'fa fa-share '); ?></div>
    <div class="clearfix"></div>

    <div class="xcrud-view">
        <?php echo $mode == 'view' ? $this->render_fields_list($mode,array('tag'=>'table','class'=>'table')) : $this->render_fields_list($mode,'div','div','label','div'); ?>
    </div>
</div>
<div class="box-footer">
    <div class="pull-left">
    <?php
        echo $this->render_button('save_return','save','list','btn btn-warning','','create,edit');
        echo $this->render_button('save_new','save','create','btn btn-success  margin-right-5px','','create,edit');
        echo $this->render_button('save_edit','save','edit','btn btn-info margin-right-5px','','create,edit');
    ?></div>
    <div class="clearfix"></div>
</div>
<div class="xcrud-nav">
    <?php echo $this->render_benchmark(); ?>
</div>
