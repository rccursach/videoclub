<div ng-controller="directorsCtrl" ng-scope>

    <form class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend>Nuevo Director</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nombre">Nombre</label>
                <div class="col-md-4">
                    <input id="nombre" name="nombre" class="form-control input-md" type="text" ng-model="director.name">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="apellido">Apellido</label>
                <div class="col-md-4">
                    <input id="apellido" name="apellido" class="form-control input-md" type="text" ng-model="director.surname">
                </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="directorSave()">Save</button>
                    <a class="btn btn-danger" ng-href="/directors" onclick="highlightSearch()">Cancel</a>
                </div>
            </div>
        </fieldset>
    </form>
    
</div>