 <div class="row">
    <div class="col-md-12" ng-show="images.length > 0">
    
    <nav class= "navbar navbar-default" role= "navigation" >
    <div class= "navbar-header" >
    <a class="btn btn-lg btn-success" href="#/add-images"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add new Images</a>
    </div>
    </nav>
        <table class="table table-striped table-bordered">
        <thead>
        <th>Image&nbsp;</th>
        <th>Image Name&nbsp;</th>
        <th>Image category&nbsp;</th>
        <th>Action&nbsp;</th>
        <th>API&nbsp;</th>
        </thead>
        <tbody>
            <tr ng-repeat="data in images">
                <td>
                	<a href="showfile.php?image_id={{data.image_id}}">
						<img src="showthumbs.php?image_id={{data.image_id}}" alt="{{data.image_name}}">
					</a>
                </td>
                <td>{{data.image_name}}</td>
                <td>{{data.image_ctgy}}</td>
                <td><a href="#/edit-image/{{data.image_id}}" class="btn">&nbsp;<i class="glyphicon glyphicon-edit"></i>&nbsp; Edit Image</a></td>
                <td><a href="#/api-image/{{data.image_id}}" class="btn">&nbsp;<i class="glyphicon glyphicon-chevron-right"></i>&nbsp; API Image</a></td>
                </tr>
        </tbody>
        </table>
    </div>
    <div class="col-md-12" ng-show="images.length == 0">
        <div class="col-md-12">
            <h4>No images found</h4>
        </div>
    </div>
</div>