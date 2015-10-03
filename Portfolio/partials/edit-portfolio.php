


<script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">

$( document ).ready(function() {
	//tinymce.dom.DOMUtils.get("#textCH", "change", function(){})
	
});
function aaa()
{
	$( "#textCH" ).val($("#textCH_ifr").contents().find("#tinymce").html());
	$( "#textEN" ).val($("#textEN_ifr").contents().find("#tinymce").html());
	$( "#textFR" ).val($("#textFR_ifr").contents().find("#tinymce").html());
	$( "#textCH" ).trigger('input');
	$( "#textEN" ).trigger('input');
	$( "#textFR" ).trigger('input');
	
	
}
tinymce.init({
    selector: "#textCH, #textEN, #textFR",
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
        <a class= "navbar-brand" href= "#/portfolios"><i class="glyphicon glyphicon-th-large"></i> Portfolio List </a>
        <a ng-show="portfolio._id" class= "navbar-brand" href= "#/edit-portfolio/0"><i class="glyphicon glyphicon-plus"></i> Create Portfolio </a>
        <a ng-show="portfolio._id" class= "navbar-brand pull-right"><i class="glyphicon glyphicon-edit"></i> Currently Editing Portfolio Number: {{portfolio._id}}</a>
        </div>
        </nav>
        <header>
            <h3>{{title}}</h3>
        </header>
        <div class="col-md-12">

<form role="form" name="myForm" class="form-horizontal">
<div class="row">
<div class= "form-group" ng-class="{error: myForm.portfolio_subject.$invalid}">
    <label class= "col-md-2"> Portfolio Subject </label>
    <div class="col-md-12">
    <input id="subject"  name="portfolio_subject" ng-model="portfolio.portfolio_subject" type= "text" class= "form-control" placeholder="Portfolio Subject" required/>
    <span ng-show="myForm.portfolio_subject.$dirty && myForm.portfolio_subject.$invalid" class="help-inline">Subject Required</span>
    </div>
</div>


<div class= "form-group">
    <label class= "col-md-2">hhhh</label>
    <div class="col-md-12">
		<dropdown placeholder="Colour..." list="colours" selected="colour" property="name"></dropdown>
    </div>
</div>

<div class= "form-group">
    <label class= "col-md-2">Portfolio Text </label>
    <div class="col-md-12">
    <input id="textCH" ng-model="portfolio.portfolio_text_CH" class= "form-control" placeholder= "Portfolio Text"/>
    </div>
</div>

<div class= "form-group">
    <label class= "col-md-2">Portfolio Text </label>
    <div class="col-md-12">
    <input id="textEN" ng-model="portfolio.portfolio_text_EN" class= "form-control" placeholder= "Portfolio Text"/>
    </div>
</div>

<div class= "form-group">
    <label class= "col-md-2">Portfolio Text </label>
    <div class="col-md-12">
    <input id="textFR" ng-model="portfolio.portfolio_text_FR" class= "form-control" placeholder= "Portfolio Text"/>
    </div>
</div>

<div class= "form-group">
    <label class= "col-md-2"></label>
    <div class="col-md-4">
    <a href="#/" class="btn">Cancel</a>
        <button onclick="aaa()" ng-click="savePortfolio(portfolio);" 
                ng-disabled="myForm.$invalid"
                class="btn btn-primary">{{buttonText}}</button>
        <button ng-click="deletePortfolio(portfolio)"
                ng-show="portfolio._id" class="btn btn-warning">Delete</button>
    </div>
</div>
</div>
</form>
        </div></div>
    </div>
</div>










