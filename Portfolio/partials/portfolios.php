
<div class="row">
    <nav class= "navbar navbar-default" role= "navigation" >
    <div class= "navbar-header" >
    <a class="btn btn-lg btn-success" href="#/edit-portfolio/0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add new Portfolio</a>
    <a class="btn btn-lg btn-success" href="/services/portfolios"><i class="glyphicon glyphicon-plus"></i>&nbsp;API Portfolios</a>
    </div>
    </nav>
    <div class="col-md-12" ng-show="portfolios.length > 0">
    

        <table class="table table-striped table-bordered">
        <thead>
        <th>ID&nbsp;</th>
        <th>subject&nbsp;</th>
        <th>text_CH&nbsp;</th>
                <th>text_EN&nbsp;</th>
                <th>text_FR&nbsp;</th>
        
        
        <th>Action&nbsp;</th>
        <th>API&nbsp;</th>
        </thead>
        <tbody>
            <tr ng-repeat="data in portfolios">
                <td>{{data.portfolio_id}}</td>
                <td>{{data.portfolio_subject}}</td>
                <td>{{data.portfolio_text_CH}}</td>
                                <td>{{data.portfolio_text_EN}}</td>
                                <td>{{data.portfolio_text_FR}}</td>
                
                <td><a href="#/edit-portfolio/{{data.portfolio_id}}" class="btn">&nbsp;<i class="glyphicon glyphicon-edit"></i>&nbsp; Edit Portfolio</a></td>
                <td><a href="#/api-portfolio/{{data.portfolio_id}}" class="btn">&nbsp;<i class="glyphicon glyphicon-chevron-right"></i>&nbsp; API Portfolio</a></td>
                </tr>
        </tbody>
        </table>
    </div>
    <div class="col-md-12" ng-show="portfolios.length == 0">
        <div class="col-md-12">
            <h4>No portfolio found</h4>
        </div>
    </div>
</div>