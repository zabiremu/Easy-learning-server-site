<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="{{ route('admin-dashboard') }}">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Home Page</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('update.home') }}">Update Home</a></li>
                </ul>

            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Service</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.service') }}">All Services</a></li>
                    <li><a href="{{ route('create.service') }}">Create Services</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Projects</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.projects') }}">All Projects</a></li>
                    <li><a href="{{ route('create.project') }}">Create Projects</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.courses') }}">All Courses</a></li>
                    <li><a href="{{ route('create.courses') }}">Create Course</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-144-layout"></i>
                <span class="nav-text">Client Review</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('all.review') }}">All Review</a></li>
                <li><a href="{{ route('create.review') }}">Create Review</a></li>
            </ul>
        </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Information</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('update.info') }}">Update Information</a></li>
                    <li><a href="{{ route('footer.edit') }}">Footer</a></li>
                    <li><a href="{{ route('contact.lists') }}">Contact</a></li>
                </ul>
            </li>
        </ul>
        <div class="copyright">
            <p><strong> Copyright © Designed & Developed</strong>by Easy Learning BD 2021</p>
            
        </div>
    </div>
</div>
