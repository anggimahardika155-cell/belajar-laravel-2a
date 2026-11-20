<div class="sidebar"> 
    <ul class="nav">
        <li><a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">Home</a></li> 
        <li><a href="/gallery" class="{{ request()->is('gallery') ? 'active' : '' }}">Gallery</a></li> 
        <li><a href="/employe" class="{{ request()->is('employe*') ? 'active' : '' }}">CRUD</a></li> 
        <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="/logout">Logout</a></li>
    </ul>
</div>
