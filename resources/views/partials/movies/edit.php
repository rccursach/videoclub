<div ng-controller="directorsCtrl" ng-scope  data-ng-init="getId_()">

    <form class="form-horizontal" data-ng-init="getOptions()">
        <fieldset>
            <!-- Form Name -->
            <legend>Editar película</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nombre</label>
                <div class="col-md-4">
                    <input id="name" name="name" class="form-control input-md" type="text" ng-model="movie.name">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="year">Año</label>
                <div class="col-md-4">
                    <input id="year" name="year" class="form-control input-md" type="text" ng-model="movie.year">
                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="genre_id">Género</label>
                <div class="col-md-4">
                    <select id="genre_id" name="genre_id" class="form-control" ng-model="movie.genre_id">
                        <option ng-repeat="genre in genres" value="{{genre.id}}">{{genre.name}}</option>
                    </select>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="director_id">Director</label>
                <div class="col-md-4">
                    <select id="director_id" name="director_id" class="form-control" ng-model="movie.director_id">
                        <option ng-repeat="director in directors" value="{{director.id}}">{{director.name}} {{director.surname}}</option>
                    </select>
                </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
                <div class="col-md-8">
                    <button id="submit" class="btn btn-success" ng-click="movieUpdate();">Save</button>
                    <a class="btn btn-danger" onclick="highlightSearch()" ng-href="/movies">Cancel</a>
                </div>
            </div>
        </fieldset>
    </form>
</div>