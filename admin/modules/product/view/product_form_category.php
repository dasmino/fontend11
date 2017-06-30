<div class="form-group ">
		<label for="name" class="control-label required"><?php echo lang('category');?></label>
		<ul class="list-categories product-list-category">
		<?php 
		if ($this->data['data']['id']) {
			if (!empty($this->data['data_category'])) {
				listCategoriesController($this->data['data_category'],$this->data['data']['category'],'123131',0,'-',0);

			}
		}else{
			if (!empty($this->data['data_category'])) {
				listCategoriesController($this->data['data_category'],null,'product',0,'-',0);
			}
		}
		?>
		</ul>
    </div>
<div class="clearfix"></div>