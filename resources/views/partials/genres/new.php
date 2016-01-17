<div ng-controller="genresCtrl" ng-scope>

    <form class="form-horizontal">
        <fieldset>
            <!-- Form Name -->
            <legend>Nuevo G&eacute;nero</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nombre</label>
                <div class="col-md-4">
                    <input id="name" name="name" class="form-control input-md" type="text" ng-model="genre.name">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Descripci&oacute;n</label>
                <div class="col-md-4">
                    <input id="description" name="description" class="form-control input-md" type="text" ng-model="genre.description">
                </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="genreSave()">Save</button>
                    <a id="button2id" class="btn btn-danger" ng-href="/genres" onclick="highlightSearch()">Cancel</a>
                </div>
            </div>
        </fieldset>
    </form>
    
</div>