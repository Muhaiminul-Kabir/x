<div class="container">
        <div class="row">
                <h2>Add new product</h2>
                <form class="col-md-7" action="/action_page.php">
                        <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                                <label for="price"> Price:</label>
                                <input class="form-control" type="number" id="price" name="price" min="1" max="10000">
                        </div>

                        <label for="inputGroupSelect01">Type:</label>

                        <select class="form-select form-select-sm" id="inputGroupSelect01" aria-label=".form-select-sm example">
                                <option selected>Vegitables</option>
                                <option value="1">Vegitables</option>
                                <option value="2">Fruits</option>
                                <option value="3">Spices</option>
                                <option value="4">Others</option>
                        </select>

                        <div class="mb-3">
                                <label for="formFile" class="form-label">Add display image</label>
                                <input class="form-control" type="file" id="formFile">
                        </div>


                        <button type="submit" class="btn btn-secondary border-white text-light" >Add</button>
                </form>
        </div>
</div>