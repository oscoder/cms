<div class="help">
	<p><?php _e('Power up your Gleez CMS by adding more modules! Each module provides new cool features.'); ?></p>
</div>

<div class="row">
	<div class="col-md-12">
		<?php echo Form::open($action, array('id' => 'module-form', 'class' => 'form')); ?>
			<table class="table table-bordered table-apparent table-striped" id="admin-modules">
				<thead>
					<tr>
						<th>#</th>
						<th><?php echo __('Module'); ?></th>
						<th><?php echo __('Description'); ?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($available as $module_name => $module_info):  ?>
					<tr>
						<td class="check-column">
							<?php if ($module_info->locked): ?>
								<?php echo Form::checkbox($module_name, TRUE, $module_info->active, array('disabled')); ?>
							<?php else: ?>
								<?php echo Form::checkbox($module_name, TRUE, $module_info->active); ?>
							<?php endif ?>
						</td>
						<td class="module-title-column">
							<strong><?php echo Text::plain($module_info->title); ?></strong>
						</td>
						<td class="module-description-column">
							<div class="module-description">
								<p><?php echo __($module_info->description); ?></p>
							</div>
							<div class="module-version">
								<?php echo __('Version: %ver | By: :author', array(
									'%ver' => Text::plain($module_info->version),
									':author' => HTML::anchor($module_info->authorURL, __($module_info->author))
								));
								?>
							</div>
						</td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
			<?php echo Form::submit('modules', __('Save'), array('class'=>'btn btn-success pull-right')); ?>
		<?php echo Form::close(); ?>
	</div>
</div>
