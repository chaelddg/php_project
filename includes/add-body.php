<form class="form-horizontal" enctype="multipart/form-data" action="add-details.php" method="POST" role="form" >
    <div class="form-group">
        <label for="toProcess" class="control-label col-xs-2">Image/Photo File name:</label>
        <div class="col-xs-8">
            <input type="file" class="form-control" name="toProcess" id="toProcess" placeholder="Image" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="model" class="control-label col-xs-2">Model</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" name="model" id="model" placeholder="Model" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="engine" class="control-label col-xs-2">Engine</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" name="engine" id="engine" placeholder="Engine" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="door" class="control-label col-xs-2">Door</label>
        <div class="col-xs-8">
            <input type="number" class="form-control" name="door" min="1" id="door" placeholder="Door" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="status" class="control-label col-xs-2">Status</label>
        <div class="col-xs-8">
            <label class="radio-inline">
                <input type="radio" name="status" id="inlineRadio0" value="0"> 0 - Not Available
            </label>
            <label class="radio-inline">
                <input type="radio" name="status"  id="inlineRadio1" checked="checked" value="1"> 1 - Available
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="dimension" class="control-label col-xs-2">Dimension</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" name="dimension" id="dimension" placeholder="Dimension" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="weight" class="control-label col-xs-2">Weight</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" name="weight" id="weight" placeholder="Weight" required="required">
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="control-label col-xs-2">Price</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" name="price" id="price" placeholder="Price" required="required">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </div>
</form>
