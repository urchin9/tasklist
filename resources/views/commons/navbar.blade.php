      <header class="mb-3">
            <nav class="navbar navbar-default navbar-expand-sm navbar-light bg-light">
 
                <a href="/" class="navbar-brand">MyTasks</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        @if (Auth::check())
                            <li class="dropdown-item">{!! Auth::user()->name !!}</li>
                            <li class="dropdown-item">{!! link_to_route('task.create', 'AddNewTask', null, []) !!}</li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                        @else
                            <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                            <li>{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>