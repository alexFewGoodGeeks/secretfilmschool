<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="/admin/img/user/user-13.jpg" alt="" />
                    </div>
                    <div class="info">
                        {{$currentUser->name}} {{$currentUser->last_name}}
                        <small>Film Director</small>
                    </div>
                </a>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav"><li class="nav-header">Navigation</li>
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-th-large"></i>
                    <span>@lang('messages.dashboard')</span>
                </a>
            </li>

            <li class="has-sub  {{ request()->is('admin/posts*') ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-th-large"></i>
                    <span>@lang('messages.posts')</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{request()->is('admin/posts/create') ? 'active' : '' }}">
                        <a href="{{ route('admin.posts.create') }}">Add post</a>
                    </li>
                    <li class="{{ request()->is('admin/posts') ? 'active' : '' }}">
                        <a href="{{ route('admin.posts.index') }}">Show Posts</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub {{ request()->is('admin/settings*') ? 'active' : '' }}">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-th-large"></i>
                    <span>Settings</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ request()->is('admin/settings') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.index') }}">Page settings</a>
                    </li>
                    <li><a href="index_v2.html">SEO</a></li>
                </ul>
            </li>


            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->
