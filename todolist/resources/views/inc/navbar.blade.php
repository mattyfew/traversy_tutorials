<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/traversy_tutorials/todolist/public/">Todolist</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
        <a class="nav-link" href="/traversy_tutorials/todolist/public/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
        <a class="nav-link" href="/traversy_tutorials/todolist/public/todo/create">Create Todo</a>
      </li>
      <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/traversy_tutorials/todolist/public/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
