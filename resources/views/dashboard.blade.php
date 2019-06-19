<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- JS --}}
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="/js/uikit/uikit.js"></script>
  {{-- CSS --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <header class="uk-background-primary uk-light">
    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <li>
            <a href="">
              {{auth()->user()->name}}
            </a>
          </li>
        </ul>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li>
            <a href="/logout">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="uk-section">
    <div class="uk-container">
      <h1 class="uk-title uk-text-bold">
        Dashboard, welcome!
      </h1>
    </div>
  </div>
</body>
</html>