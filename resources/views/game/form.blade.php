<form action="{{ route('game.store') }}" method="POST" class="w-400 mw-full">

        @csrf
        <div class="form-group">
                <label for="name" class="required">Game name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Game Name" required="required" value="{{ $game->name ?? '' }}">
        </div>

        <div class="form-group">
                <label for="studio" class="required">Game studio</label>
                <input type="text" class="form-control" id="studio" name="studio" placeholder="Game Studio" required="required" value="{{ $game->studio ?? ''}}">
        </div>

        <div class="form-group">
                <label for="price" class="required">Game Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Game Price" required="required" value="{{ $game->price ?? '' }}">
        </div>

        <div class="form-group">
                <label for="type" class="required">Game type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Game Type" required="required" value="{{ $game->type ?? '' }}">
        </div>

        <div class="form-group">
                <label for="platform" class="required">Game platform</label>
                <input type="text" class="form-control" id="platform" name="platform" placeholder="Game Platform" required="required" value="{{ $game->platform ?? '' }}">
        </div>

        <div class="form-group">
                <label for="pegi" class="required">Game pegi</label>
                <input type="text" class="form-control" id="pegi" name="pegi" placeholder="Game Pegi" required="required" value="{{ $game->pegi ?? '' }}">
        </div>

        <div class="form-group">
                <label for="date_publication" class="required">Game Publication date</label>
                <input type="date" class="form-control" id="date_publication" name="date_publication" placeholder="Game Date publictation" required="required" value="{{ $game->date_publication ?? '' }}">
        </div>

        <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Write a short description about yourself." value="{{ $game->description ?? '' }}"></textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Submit">
</form>
