
<div class="row">
    <nav class= "navbar navbar-default" role= "navigation" >
    <div class= "navbar-header" >
    <a class="btn btn-lg btn-success" href="#/edit-blog/0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add new Blog</a>
    </div>
    </nav>
    <div class="col-md-12" ng-show="blogs.length > 0">
    

        <table class="table table-striped table-bordered">
        <thead>
        <th>ID&nbsp;</th>
        <th>subject&nbsp;</th>
        <th>text&nbsp;</th>
        <th>user_name&nbsp;</th>
        <th>time_stamp&nbsp;</th>
        
        <th>Action&nbsp;</th>
        <th>API&nbsp;</th>
        </thead>
        <tbody>
            <tr ng-repeat="data in blogs">
                <td>{{data.blog_id}}</td>
                <td>{{data.blog_subject}}</td>
                <td>{{data.blog_text}}</td>
                <td>{{data.user_name}}</td>
                <td>{{data.time_stamp}}</td>
                <td><a href="#/edit-blog/{{data.blog_id}}" class="btn">&nbsp;<i class="glyphicon glyphicon-edit"></i>&nbsp; Edit Blog</a></td>
                <td><a href="#/api-blog/{{data.blog_id}}" class="btn">&nbsp;<i class="glyphicon glyphicon-chevron-right"></i>&nbsp; API Blog</a></td>
                </tr>
        </tbody>
        </table>
    </div>
    <div class="col-md-12" ng-show="blogs.length == 0">
        <div class="col-md-12">
            <h4>No blog found</h4>
        </div>
    </div>
</div>