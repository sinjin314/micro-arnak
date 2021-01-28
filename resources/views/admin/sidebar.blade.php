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
        <a href="{{ route('admin.create.game')}}" class="sidebar-link active">create</a>
        <a href="#" class="sidebar-link">CLI commands</a>
        <br />
        <h5 class="sidebar-title">Components</h5>
        <div class="sidebar-divider"></div>
        <a href="#" class="sidebar-link">File explorer</a>
        <a href="#" class="sidebar-link">Spreadsheet</a>
        <a href="#" class="sidebar-link">Map</a>
        <a href="#" class="sidebar-link">Messenger</a>

    </div>
</div>
