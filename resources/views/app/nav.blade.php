<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-xl">
        <a class="navbar-brand text-white" href="{{ route('home') }}">
            <i class="bi-car-front"></i> Students
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Students
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @foreach($students as $student)
                                <a class="dropdown-item" href="{{ route('student.show', $student->id) }}">
                                    {{ $student->name }}
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @foreach($courses as $course)
                                <a class="dropdown-item" href="{{ route('course.show', $course->id) }}">
                                    {{ $course->name }}
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Classroom
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @foreach($classrooms as $classroom)
                                <a class="dropdown-item" href="{{ route('classroom.show', $classroom->id) }}">
                                    {{ $classroom->name }}
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Teacher
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @foreach($teachers as $teacher)
                                <a class="dropdown-item" href="{{ route('$teacher.show', $teacher->id) }}">
                                    {{ $teacher->name }}
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Season
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @foreach($seasons as $season)
                                <a class="dropdown-item" href="{{ route('$season.show', $season->id) }}">
                                    {{ $season->name }}
                                </a>
                            @endforeach
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>