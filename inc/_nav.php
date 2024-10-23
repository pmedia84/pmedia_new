<nav class="nav-bar" data-state="closed">
    <div class="nav-container">
        <div class="nav-brand">
            <a href="/"><?php include("inc/_logo.php");?></a>
        </div>

        <div class="nav-menu" data-state="closed">

            <ul class="nav-links" role="list">
                <li><a href="/">Home</a></li>
                <li><a href="prices">Web Design</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="about">Our Work</a></li>
                <li><a class="btn btn-primary" href="contact">Contact Us</a></li>
            </ul>

        </div>
        <button class="nav-btn" aria-controls="nav-menu" id="nav-btn" type="button" aria-label="Navigation Button" aria-expanded="false">
            <svg class="nav-btn-lines" viewBox="0 0 100 100" width="50">
                <rect class="line top" width="80" height="5" x="10" y="25" rx="2.5"></rect>
                <rect class="line middle" width="80" height="5" x="10" y="45" rx="2.5"></rect>
                <rect class="line bottom" width="80" height="5" x="10" y="65" rx="2.5"></rect>

            </svg>
        </button>
    </div>
</nav>