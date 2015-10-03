


<script type="text/javascript" src="../OtherAssets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">

$( document ).ready(function() {
	
});
function aaa()
{
	$( "#blogtext" ).val($("#blogtext_ifr").contents().find("#tinymce").html());

	$( "#blogtext" ).trigger('input');
	
}
tinymce.init({
    selector: "#blogtext",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});


</script>
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
        <a class= "navbar-brand" href= "#/blogs"><i class="glyphicon glyphicon-th-large"></i> Blog List </a>
        <a ng-show="blog._id" class= "navbar-brand" href= "#/edit-blog/0"><i class="glyphicon glyphicon-plus"></i> Create Blog </a>
        <a ng-show="blog._id" class= "navbar-brand pull-right"><i class="glyphicon glyphicon-edit"></i> Currently Editing Blog Number: {{blog._id}}</a>
        </div>
        </nav>
        <header>
            <h3>{{title}}</h3>
        </header>
        <div class="col-md-12">

<form role="form" name="myForm" class="form-horizontal">
<div class="row">
<div class= "form-group" ng-class="{error: myForm.blog_subject.$invalid}">
    <label class= "col-md-2"> Blog Subject </label>
    <div class="col-md-12">
    <input name="blog_subject" ng-model="blog.blog_subject" type= "text" class= "form-control" placeholder="Blog Subject" required/>
    <span ng-show="myForm.blog_subject.$dirty && myForm.blog_subject.$invalid" class="help-inline">Subject Required</span>
    </div>
</div>





<div class= "form-group">
    <label class= "col-md-2">Blog Text </label>
    <div class="col-md-12">
    <input id="blogtext" ng-model="blog.blog_text" class= "form-control" placeholder= "Blog Text"/>
    </div>
</div>

<div class= "form-group">
    <label class= "col-md-2"></label>
    <div class="col-md-4">
    <a href="#/" class="btn">Cancel</a>
        <button onclick="aaa()" ng-click="saveBlog(blog);" 
                ng-disabled="isClean() || myForm.$invalid"
                class="btn btn-primary">{{buttonText}}</button>
        <button ng-click="deleteBlog(blog)"
                ng-show="blog._id" class="btn btn-warning">Delete</button>
    </div>
</div>
</div>
</form>
        </div></div>
    </div>
</div>










