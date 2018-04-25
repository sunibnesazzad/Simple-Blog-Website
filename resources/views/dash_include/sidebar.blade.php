<nav class="main-menu">
    <ul>
        <li>
            <a href="/">
                <i class="fa fa-home nav_icon"></i>
                <span class="nav-text">
					Home
					</span>
            </a>
        </li>
        <li class="has-subnav">
            <a href="javascript:;">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <span class="nav-text">
					Profile Setting
				</span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
            </a>
            <ul>
                <li>
                    <a class="subnav-text" href="/edit_profile">
                        Edit Profile
                    </a>
                </li>
                <li>
                    <a class="subnav-text" href="grids.html">
                        Edit Photo
                    </a>
                </li>
            </ul>
        </li>

        <li class="has-subnav">
            <a href="javascript:">
                <i class="fa fa-file-text-o nav_icon"></i>
                <span class="nav-text">Blog</span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
            </a>
            <ul>
                <li>
                    <a class="subnav-text" href="/post/create">
                        Create Blog
                    </a>
                </li>
                <li>
                    <a class="subnav-text" href="/myposts/{{Auth::user()->id}}">
                        My Blogs
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <ul class="logout">
        <li>
            <a href="/logout">
                <i class="icon-off nav-icon"></i>
                <span class="nav-text">
			Logout
			</span>
            </a>
        </li>
    </ul>
</nav>