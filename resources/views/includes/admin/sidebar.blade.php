<div class="sidebar-wrapper">
    <nav class="mt-2">
        <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="navigation"
            aria-label="Main navigation"
            data-accordion="false"
            id="navigation"
        >
            <li class="nav-header">ADMIN PANEL</li>
            <li class="nav-item">
                <a href="./docs/introduction.html" class="nav-link">
                    <i class="nav-icon bi bi-newspaper"></i>
                    <p>
                        Posts
                     <span class="badge badge-info right">{{ $posts->total() }}</span>
                    </p>
                </a>
            </li>
        </ul>
    </nav>
</div>
