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
        <a ng-show="image._id" class= "navbar-brand" href= "#/add-images"><i class="glyphicon glyphicon-plus"></i> Create Images </a>
        <a ng-show="image._id" class= "navbar-brand pull-right"><i class="glyphicon glyphicon-edit"></i> Currently Editing Image Number: {{image._id}}</a>
        </div>
        </nav>
        <header>
            <h3>{{title}}</h3>
        </header>
        <div class="col-md-12">
<div class="row">
	                <a href="showfile.php?image_id={{image._id}}">
						<img src="showthumbs.php?image_id={{image._id}}" alt="{{image.image_name}}">
					</a>
</div>
<form role="form" name="myForm" class="form-horizontal">
<div class="row">
<div class= "form-group" ng-class="{error: myForm.name.$invalid}">
    <label class= "col-md-2"> Image Name </label>
    <div class="col-md-4">
    <input name="name" ng-model="image.image_name" type= "text" class= "form-control" placeholder="Image name" required/>
    <span ng-show="myForm.name.$dirty && myForm.name.$invalid" class="help-inline">Name Required</span>
    </div>
</div>
<div class= "form-group" ng-class="{error: myForm.category.$invalid}">
    <label class= "col-md-2"> Image Category </label>
    <div class="col-md-4">
    


  <label>Color grouped by shade:
    <select ng-model="image.image_ctgy" >
					  
					  	  <optgroup label="Space Design">
						    <option value="Project">Project</option>
						    <option value="Decoration">Decoration</option>
						  </optgroup>
						  <optgroup label="Graphic Design">
						    <option value="Vision">Vision</option>
						    <option value="Design Expo">Design Expo</option>
						  </optgroup>
					  </select>
  </label><br/>


<!--     <input name="category" ng-model="image.image_ctgy" type= "text" class= "form-control" placeholder="Image category" required/> -->
<!--     <span ng-show="myForm.category.$dirty && myForm.category.$invalid" class="help-inline">Category Required</span> -->
    </div>
</div>
<div class= "form-group">
    <label class= "col-md-2"></label>
    <div class="col-md-4">
    <a href="#/" class="btn">Cancel</a>
        <button ng-click="saveImage(image);" 
                ng-disabled="isClean() || myForm.$invalid"
                class="btn btn-primary">{{buttonText}}</button>
        <button ng-click="deleteImage(image)"
                ng-show="image._id" class="btn btn-warning">Delete</button>
    </div>
</div>
</div>
</form>
        </div></div>
    </div>
</div>
