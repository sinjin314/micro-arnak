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
        @if( auth()->user()->is_admin == 1 )
            <a href="{{url('admin/home')}}" class="sidebar-link" > admin pannel </a>
            <br />
        @endif
        <h5 class="sidebar-title">{{ Auth::user()->name }}, You are connected !</h5>
        <a class="btn btn-success mr-5" href="{{ route('games.index') }}" >Enter on site</a>
        <div class="sidebar-divider"></div>
        <a href="{{ route('games.index') }}" class="sidebar-link active">Home</a>
        <a href="{{ route('cart.index') }}" class="sidebar-link">Your cart</a>
        <a href="" class="sidebar-link">Your account</a>
        <br />
        <h5 class="sidebar-title">MicroArnak</h5>
        <div class="sidebar-divider"></div>
        @if( auth()->user()->is_admin == 1 )
                <a href="{{ route('admin.index')}}" class="sidebar-link" > admin pannel </a>
        @endif
    </div>
</div>
