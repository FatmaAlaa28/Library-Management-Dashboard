<nav class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="{{ route('Dashboards.index') }}">
                <i class="bi bi-grid menu-icon"></i>
                <span class="menu-title ms-2">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#userForm" data-bs-toggle="collapse" aria-expanded="false" aria-controls="userForm">
                <i class="fa-solid fa-users"></i>
                <span class="ms-2">User Form</span>
                <i class="bi bi-chevron-right ms-auto menu-arrow"></i>
            </a>
            <div class="collapse" id="userForm" data-bs-parent=".sidebar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('Auth.login') }}">Log In</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('Auth.register') }}">Register</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#apps" data-bs-toggle="collapse" aria-expanded="false" aria-controls="apps">
                <i class="fa-solid fa-window-restore"></i>
                <span class="ms-2">Apps</span>
                <i class="bi bi-chevron-right ms-auto menu-arrow"></i>
            </a>
            <div class="collapse" id="apps" data-bs-parent=".sidebar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Calendar</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#books" data-bs-toggle="collapse" aria-expanded="false" aria-controls="books">
                <i class="fa-solid fa-book"></i>
                <span class="ms-2">Books</span>
                <i class="bi bi-chevron-right ms-auto menu-arrow"></i>
            </a>
            <div class="collapse" id="books" data-bs-parent=".sidebar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.create') }}">Add Book</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.index') }}">Show Book</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#students" data-bs-toggle="collapse" aria-expanded="false" aria-controls="students">
                <i class="fa-solid fa-circle-user"></i>
                <span class="ms-2">Students</span>
                <i class="bi bi-chevron-right ms-auto menu-arrow"></i>
            </a>
            <div class="collapse" id="students" data-bs-parent=".sidebar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('students.create') }}">Add Author</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('students.index') }}">Show Author</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#authors" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authors">
            <i class="fa-solid fa-user-pen"></i>
                <span class="ms-2">Authors</span>
                <i class="bi bi-chevron-right ms-auto menu-arrow"></i>
            </a>
            <div class="collapse" id="authors" data-bs-parent=".sidebar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('authors.create') }}">Add Author</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('authors.index') }}">Show Author</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#categories" data-bs-toggle="collapse" aria-expanded="false" aria-controls="categories">
            <i class="fa-solid fa-layer-group"></i>
                <span class="ms-2">Categories</span>
                <i class="bi bi-chevron-right ms-auto menu-arrow"></i>
            </a>
            <div class="collapse" id="categories" data-bs-parent=".sidebar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.create') }}">Add Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Show Category</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex align-items-center" href="#book_category" data-bs-toggle="collapse" aria-expanded="false" aria-controls="book_category">
            <i class="fa-solid fa-book-atlas"></i>
                <span class="ms-2">Category_books</span>
                <i class="bi bi-chevron-right ms-auto menu-arrow"></i>
            </a>
            <div class="collapse" id="book_category" data-bs-parent=".sidebar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ route('bookcategories.create') }}">Add Category for book</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('bookcategories.index') }}">Show Category of books</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
