<nav class="navbar navbar-expand-lg bg-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="#">TASKS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tasks.create') }}">
                        <i class="fa-solid fa-plus"></i> New Task
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('tasks.index') }}">
                        <i class="fa-solid fa-list"></i> All Tasks
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
