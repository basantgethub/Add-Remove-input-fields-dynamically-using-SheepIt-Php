
<script>
$(document).ready(function() {
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
        
          $(".basicInfoDisplay").click(function() {
                var data = {
                            type:$("input[name=typeRadio]:checked").val(),
                            crouselselection:$('#crouselselection :not(:hidden)').serializeArray(),
                            submit: 1
			};
		
		var url = <?php print "'".$this->appUrls['XYZ_URL']."'";?>;
		customAjaxCall(url, data, editAdvResponse);
		return false; 
	  });
	
	function editAdvResponse(output){
		alert(output.message);
	}
});		
</script>


<div class="row">
      
    <div class="col-md-12">
        <form class="form"  id ="basicDetails">
                <div id="activityIcon3"> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                        <label>Slider</label>
                                        <div class="form-group">
                                            <div id = "crouselselection">
                                                <div class="form-group row">
                                                    <div class=" col-sm-3"> <b>Image Link</b> </div>
                                                    <div class="col-sm-3"> <b>Target</b> </div>
                                                    <div class="col-sm-3"> <b>Action</b> </div>
                                                </div>

                                                <div id="crouselselection_template">
                                                    <div class="form-group row">
                                                        <div class="col-sm-3" style="text-align: center">  
                                                            <input id="crouselselection_#index#_d" class="form-control" name="crouselselection[][d]" type="text" value = "" />
                                                                
                                                        </div>
                                                        <div class="col-sm-3">
                                                             <span class="ui-select">
                                                                <select id="crouselselection_#index#_k" name="crouselselection[#index#][k]" style="margin: 0px;">
                                                                        <option value="0" >Navigate in App</option>  
                                                                        <option value="1">Navigate to Webpage</option> 
                                                                       <option value="2">Navigate to Third party App</option>
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

            <div class="form-group">
                <label></label>
                <div>
                    <button class = "basicInfoDisplay btn btn-primary btn-lg" type="submit"  value="update">Update</button>
                </div>
            </div>
        	
	</form>
		
    </div>
    
