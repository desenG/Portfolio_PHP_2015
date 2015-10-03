<style type="text/css">
  .form-horizontal input.ng-invalid.ng-dirty {
    border-color: #FA787E;
  }

  .form-horizontal input.ng-valid.ng-dirty {
    border-color: #78FA89;
  }
</style>
<div class="view">
    <div class="container">
        <div class="row">
        <nav class= "navbar navbar-default" role= "navigation" >
        <div class= "navbar-header" >
        <a class= "navbar-brand" href= "#/images"><i class="glyphicon glyphicon-th-large"></i> Images List </a>
        </div>
        </nav>
        <header>
            <h3>{{title}}</h3>
        </header>
        <div class="col-md-12">
			<form method="post" id="target" class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
			<div class="row">
			
			<div class= "form-group">
			    <label class= "col-md-2"> Image Category </label>
			    <div class="col-md-4">
					  <select name="image_ctgy" ng-model="addImagesVM.image_ctgy" ng-options="image_ctgy.name group by image_ctgy.portfolio for image_ctgy in image_ctgys">
					  </select>
			    </div>
			</div>
			
			<div class= "form-group">
			    <label class= "col-md-2">Select Image File(First image is Compulsory. Only "jpeg","jpg","jif","jfif","jfi", "gif", "png" Type Image Uploaded. Image Size Should Be Less Than 1000KB.
						):</label>
			    <div class="col-md-4">
						
       					 <input ng-repeat="file in filelist" type="file" file-bind="files" id="file"/>
       					 
						
			    </div>
			</div>
			
			<div class= "form-group">
			    <label class= "col-md-2"></label>
			    <div class="col-md-4">
			    <a href="#/" class="btn">Cancel</a>
			    <input type="button" id="add_more" class="btn btn-primary" value="Add More Files"/>
			    <button ng-click="saveImages(addImagesVM);" 
                ng-disabled="isClean() || myForm.$invalid"
                class="btn btn-primary">{{buttonText}}</button>
			    <button type="submit" id="upload" name="post" class="btn btn-primary">Post</button>
			    </div>
			</div>
			
			</div>
			</form>
        </div>
        </div>
    </div>
</div>



<script type="text/javascript">

var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {
 		//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
 		$('#add_more').click(function() {
 			$(this).before($("<div/>", {
 				id: 'filediv'
 			})
 			.fadeIn('slow').append($("<input/>", {
 				name: 'file[]',
 				type: 'file',
 				id: 'file'
 			}), $("<br/><br/>")));
 		});
 		// Following function will executes on change event of file input to select different file.
 		$('body').on('change', '#file', function() {
 		 if (this.files && this.files[0]) {
 			abc += 1; // Incrementing global variable by 1.
 			var z = abc - 1;
 			var x = $(this).parent().find('#previewimg' + z).remove();
 			$(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
 			var reader = new FileReader();
 			reader.onload = imageIsLoaded;
 			reader.readAsDataURL(this.files[0]);
			$(this).hide();
 			$("#abcd" + abc).append($("<img/>", {
 				id: 'img',
 				src: 'x.png',
 				alt: 'delete'
 			}).click(function() {
 				$(this).parent().parent().remove();
		    }));
         }
 	   });
      // To Preview Image
      function imageIsLoaded(e) {
          $('#previewimg' + abc).attr('src', e.target.result);
      };
     $('#upload').click(function(e) {
         var name = $(":file").val();
         if (!name) {
         alert("First Image Must Be Selected");
         e.preventDefault();
         }

        
     });
 });
</script>

