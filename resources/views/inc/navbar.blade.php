<nav class="navbar navbar-expand-lg navbar-dark nav-bar">
    <div class="container">
        <a class="navbar-brand" href="/">FutureAcademy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/training">Sessions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aboutus">About</a>
            </li>
            @if (Auth::guest())
            <li class="nav-item">
                <a class="nav-link" href="#" >Contact</a>
            </li>
            
            <li class="nav-item">
                <button class="show-modal enroll">Enroll Now</button>
            </li>
            <li class="nav-item">
                <button class="nav-link signin">Sign In</button>
            </li>
            @else
            <li class="nav-item contact-nav">
                <a class="nav-link" href="#" >Contact</a>
            </li>
            <li class="dropdown">
                <div class="dropdown-div">
                    <div class="circle-avatar"></div>
                    <div class="arrow-div">
                        <i class="fas fa-chevron-down" role="button"></i>
                    </div>
                </div>
            </li>

            @endif
        </ul>
        </div>
    </div>
 
</nav>