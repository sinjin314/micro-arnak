<form action="{{ route('game.store') }}" method="POST" class="w-400 mw-full">

        @csrf
        <div class="form-group">
                <label for="name" class="required">Game name</label>
                <input type="text" class="form-control" id="name" placeholder="Game Name" required="required">
        </div>

        <div class="form-group">
                <label for="studio" class="required">Game studio</label>
                <input type="text" class="form-control" id="studio" placeholder="Game Studio" required="required">
        </div>

        <div class="form-group">
                <label for="price" class="required">Game Price</label>
                <input type="text" class="form-control" id="price" placeholder="Game Price" required="required">
        </div>


        <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" placeholder="Write a short description about yourself."></textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Submit">
</form>
