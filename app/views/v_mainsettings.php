
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<div class="page-bar">
				<ul class="page-breadcrumb">
                                    <li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Mainsettings</a>
					</li>
				</ul>
				<!-- <div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-sm btn-default" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div> -->
			</div>
			
			<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box purple">
                    <div class="portlet-title">
                            <div class="caption">
                                    <i class="fa fa-gift"></i>Mainsettings 
                            </div>
                            <div class="tools">
                                    <a href="javascript:;" class="collapse">
                                    </a>
                                    
                            </div>
                    </div>
                    <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                    <form action="controllers/C_mainsettings.php" method="post" id="form_sample_1" class="form-horizontal">
                            <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                            <button class="close" data-close="alert"></button>
                                            You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                            <button class="close" data-close="alert"></button>
                                            Your form validation is successful!
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3">Site name <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input type="text" name="site_name" required="required" value="<?php echo $displayData['site_name']?>" class="form-control"/>
                                            </div>
                                    </div>
                                  <div class="form-group">
                                            <label class="control-label col-md-3">site url <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input name="site_url" type="text" required="required" value="<?php echo $displayData['site_url']?>"  class="form-control"/>
                                                    <span class="help-block">
                                                    e.g: http://www.demo.com or http://demo.com </span>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3">Email <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input name="site_email" required="required" value="<?php echo $displayData['site_email']?>" type="email" class="form-control"/>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                            <label class="control-label col-md-3">Site description <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input name="site_desc" type="text" value="<?php echo $displayData['site_desc']?>" class="form-control"/>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label col-md-3">Site tag <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input name="site_tags" value="<?php echo $displayData['site_tags']?>" type="text" class="form-control"/>
                                            </div>
                                    </div>
                                 <div class="form-group">
                                            <label class="control-label col-md-3">Home panel notes <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input name="site_homepanel" value="<?php echo $displayData['site_homepanel']?>" type="text" class="form-control"/>
                                            </div>
                                    </div>


                                   <div class="form-group">
                                            <label class="control-label col-md-3">Facebook link<span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input name="fb" value="<?php echo $displayData['fb']?>"  type="text" class="form-control"/>
                                            </div>
                                    </div>

                                 <div class="form-group">
                                            <label class="control-label col-md-3">Twitter link <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input value="<?php echo $displayData['tw']?>" name="tw" type="text" class="form-control"/>
                                            </div>
                                    </div>

                                <div class="form-group">
                                            <label class="control-label col-md-3">Youtube link <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input name="yt" value="<?php echo $displayData['yt']?>"  type="text" class="form-control"/>
                                            </div>
                                    </div>
                                <div class="form-group">
                                            <label class="control-label col-md-3">RSS link <span class="required">
                                            * </span>
                                            </label>
                                            <div class="col-md-4">
                                                    <input name="rss" value="<?php echo $displayData['rss']?>" type="text" class="form-control"/>
                                            </div>
                                    </div>
                            <div class="form-actions">
                                    <div class="row">
                                            <div class="col-md-offset-3 col-md-9">

                                                    <input type="submit" name="submit" class="btn green" value="Submit">

                                            </div>
                                    </div>
                            </div>
                    </form>
                            <!-- END FORM-->
                    </div>
            </div>
            <!-- END VALIDATION STATES-->
    </div>
</div>
