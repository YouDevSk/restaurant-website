<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Admin')</title>
    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="/js/uikit/uikit.js"></script>
    {{-- CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <div class="uk-position-center">
    <h2 class="uk-title uk-text-center uk-text-bold">Register</h2>
    <form class="uk-width-medium" action="/register" method="POST">
      @csrf
      <fieldset class="uk-fieldset">
        <div class="uk-margin">
          <input type="text" name="name" class="uk-input" placeholder="Your Name">
        </div>
        <div class="uk-margin">
          <input type="email" name="email" class="uk-input" placeholder="Your email">
        </div>
        <div class="uk-margin">
          <input type="password" name="password" class="uk-input" placeholder="Your password">
        </div>
        <div class="uk-margin">
          <input type="password" name="password_confirmation" class="uk-input" placeholder="Password Confirmation">
        </div>
        <div class="uk-margin">
          <button class="uk-width-1-1 uk-button uk-button-primary" type="submit">Register</button>
        </div>
      </fieldset>
    </form>
    @include('layout.errors')
  </div>
</body>
</html>