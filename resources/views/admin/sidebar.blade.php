<!-- Sidebar (immediate child of the page wrapper) -->
<div class="sidebar">
    <div class="sidebar-menu">
        <!-- Sidebar content with the search box -->
        <div class="sidebar-content">
            <input type="text" class="form-control" placeholder="Search">
            <div class="mt-10 font-size-12"> <!-- mt-10 = margin-top: 1rem (10px), font-size-12 = font-size: 1.2rem (12px) -->
                <button class="btn btn-success mr-5" type="submit">search</button>
            </div>

        </div>
        <!-- Sidebar links and titles -->
        <h5 class="sidebar-title">Game</h5>
        <div class="sidebar-divider"></div>
        <a href="{{ route('admin.game.create')}}" class="sidebar-link active">Create a game</a>
        <a href="{{ route('admin.game.list') }}" class="sidebar-link">Game List</a>
        <a href="{{ route('admin.user.list') }}" class="sidebar-link">User List</a>
        <br />

        <h5 class="sidebar-title">User</h5>
        <div class="sidebar-divider"></div>
        <a href="#" class="sidebar-link">List</a>

    </div>
</div>
