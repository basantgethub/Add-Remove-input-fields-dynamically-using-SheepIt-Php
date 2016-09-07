<?php 
	$crouselselection =	array ( 
			array ( 
				'd' => 'Basant kumar',
				'k' => 4 ,
				'v' => 'A' ,
				),
			array ( 
				'd' => 'Bittu kumar',
				'k' => 1,
				'v' => 'D',
				), 
		);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Add Remove input fields dynamically using SheepIt ,Php</title>
<!--<script src="sheepit/jquery.sheepItPlugin.js"></script>	-->
<script src="jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./sheepit/jquery.sheepItPlugin.js"></script>		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script>
		$(document).ready(function(){
			var crouselselection = $('#crouselselection').sheepIt({
				separator: '',
				allowRemoveLast: false,
				allowRemoveCurrent: true,
				allowRemoveAll: false,
				allowAdd: true,
				allowAddN: false,
				maxFormsCount: 5,
				minFormsCount: 1,
				 <?php if(is_array($crouselselection)){?>
				data: [
					<?php foreach($crouselselection as $key => $value){?>
					{
						'crouselselection_#index#_d': '<?php print $value['d'];?>',
						'crouselselection_#index#_k': '<?php print $value['k'];?>',
						'crouselselection_#index#_v': '<?php print $value['v'];?>'
					},
					<?php }?>
				]
				<?php }?>
			   
			});
		});
	</script>
		
	</head>
	<body>
	
	
	<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
		<div class="wrapper">
	
		<div class="container">
			<!--
			<div class="col-lg-3">
			pp	
			</div>
			-->
			<div class="col-lg-12">
				<form method="post" class="form-horizontal">
					
				<div id="activityIcon3"> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
								<label>Add Student Data</label>
								<div class="form-group">
									<div id = "crouselselection">
										<div class="form-group row">
											<div class=" col-sm-3"> <b>Name</b> </div>
											<div class="col-sm-3"> <b>Class</b> </div>
											<div class="col-sm-3"> <b>Section</b> </div>
										</div>

										<div id="crouselselection_template">
											<div class="form-group row">
												<div class="col-sm-3" style="text-align: center">  
													<input id="crouselselection_#index#_d" class="form-control" name="crouselselection[][d]" type="text" value = "" />
														
												</div>
												<div class="col-sm-3">
													 <span class="ui-select">
														<select class="form-control" id="crouselselection_#index#_k" name="crouselselection[#index#][k]" style="margin: 0px;">
																<option value="1" >I</option>  
																<option value="2">II</option> 
															   <option value="3">III</option>
															   <option value="4">IV</option>
															   <option value="5">V</option>
														</select>
													  </span>     
												</div>

												<div class="col-sm-3">
													<input id="crouselselection_#index#_v" class="form-control" name="crouselselection[][v]" type="text" value = "" />
												</div>     
												<div class="col-sm-2">
													<a id="crouselselection_remove_current"><span class="glyphicon glyphicon-remove-circle"></span></a>
												</div>
											</div>
										</div>

										<!-- No forms template -->
										<div id="crouselselection_noforms_template">No rules defined</div>
										<!-- /No forms template-->

										<div  style="text-align: left;padding-left:5px;" id="crouselselection_controls">
											<a id="crouselselection_add" class="btn btn-info btn-xs">Add More Field</a>
										</div>

									</div>
								</div> 
                            </div>    
                        </div>   
                    </div>  
                </div>
					
				</form>
			</div>
			
			<!--
			<div class="col-lg-4">
				pp
			</div>
			-->
		</div>
		
		
		</div>
	</body>
</html>
