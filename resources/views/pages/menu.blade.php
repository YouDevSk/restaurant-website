@extends('layout.master')
@section('content')
  <h1 class="uk-text-bold uk-text-uppercase">
    Menu
  </h1>
  <div class="uk-section">
    <ul class="uk-flex-center uk-width-1-2@m uk-margin-auto" data-uk-switcher="animation: uk-animation-fade" data-uk-tab>
      <li class="uk-active"><a href="#">Beef</a></li>
      <li><a href="#">Pork</a></li>
      <li><a href="#">Pasta</a></li>
      <li><a href="#">Pizza</a></li>
    </ul>
    <ul class="uk-switcher uk-margin" id="menu-items">
      <div class="uk-flex uk-child-width-1-4@l uk-child-width-1-2@m" data-uk-grid>
        <div class="uk-height-medium">
          <div class="uk-card uk-height-1-1">
            <div class="uk-media uk-height-1-1">
              <img src="https://images.pexels.com/photos/1881336/pexels-photo-1881336.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="beef" title="beef">
            </div>
          </div>
        </div>
        {{-- end card --}}
        <div class="uk-height-medium">
          <div class="uk-card uk-height-1-1">
            <div class="uk-media uk-height-1-1">
              <img src="https://images.pexels.com/photos/1268549/pexels-photo-1268549.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="beef" title="beef">
            </div>
          </div>
        </div>
        {{-- end card --}}
        <div class="uk-height-medium">
          <div class="uk-card uk-height-1-1">
            <div class="uk-media uk-height-1-1">
              <img src="https://images.pexels.com/photos/1881336/pexels-photo-1881336.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="beef" title="beef">
            </div>
          </div>
        </div>
        {{-- end card --}}
        <div class="uk-height-medium">
          <div class="uk-card uk-height-1-1">
            <div class="uk-media uk-height-1-1">
              <img src="https://images.pexels.com/photos/1268549/pexels-photo-1268549.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="beef" title="beef">
            </div>
          </div>
        </div>
        {{-- end card --}}
      </div>
      <div class="uk-child-width-1-2@m" data-uk-grid="">
        <div>
          <ul class="uk-list uk-list-striped">
            <li class="uk-text-left">
              <div class="uk-flex uk-flex-between uk-child-width-1-2" data-uk-grid>
                <div class="uk-text-left">
                  <h4 class="uk-title uk-text-bold">
                    Pork with pork
                  </h4>
                </div>
                <div class="uk-text-right">
                  <span>5€</span>
                </div>
              </div>
              <p>
                <span class="uk-text-bold uk-text-capitalize">Ingredients:</span>
                Pork, pork, pork, onion, mustard, tomato ketchup.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </ul>
  </div>
@endsection