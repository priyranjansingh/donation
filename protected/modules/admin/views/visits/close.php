<section class="content-header">
  <h1>
    <?php echo $visit; ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'/admin'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo base_url().'/admin/visits'; ?>"><i class="fa fa-dashboard"></i> Visits</a></li>
    <li class="active">Close</li>
  </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Visit</h3>
				</div>
				<div class="warning"><?php echo $visit; ?> 
				<?php if($status): ?>
					is open now.
				<?php else: ?>
					is close now.
				<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<?php echo CHtml::link('Back',array('/admin/solicitor/donations',"id" => $solicitor),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
		</div>
	</div>
</section>