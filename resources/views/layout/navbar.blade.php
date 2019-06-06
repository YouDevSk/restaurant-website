<header class="uk-background-secondary uk-light" data-uk-sticky>
  <div class="uk-container uk-container-large">
    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
      <div class="uk-navbar-left">
        <a href="/" id="logo" class="uk-navbar-item uk-logo">Cooking<span>Website</span></a>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav uk-visible@m">
          <li>
            <a href="/">home</a>
          </li>
          <li>
            <a href="/about">about</a>
          </li>
        </ul>
        <a class="uk-navbar-toggle uk-hidden@m" data-uk-navbar-toggle-icon uk-toggle="target: #offcanvas-slide"></a>
      </div>
    </nav>
  </div>
  {{-- sidebar offcanvas --}}
  <div id="offcanvas-slide" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" data-uk-close></button>
        <ul class="uk-nav uk-margin-large-top">
          <li class="uk-nav-header">
            <a href="/">home</a>
          </li>
          <li class="uk-nav-header">
            <a href="/about">about</a>
          </li>
        </ul>
    </div>
</div>
</header>