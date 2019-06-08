@extends('layout.master')
@section('content')
{{-- post-header section --}}
<section id="post-header">
    <div class="uk-background-blend-multiply uk-background-secondary uk-background-cover uk-panel uk-flex uk-flex-center uk-flex-middle uk-height-1-1 uk-light" style="background-image: url('https://images.pexels.com/photos/724216/pexels-photo-724216.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260);">
        <div class="uk-text-center uk-container uk-container-large">
            <h1 class="uk-title uk-text-bold uk-text-uppercase">
                Cooking website
            </h1>
            <h4 class="uk-title uk-margin-remove-top uk-width-2-3@m uk-width-1-2@l uk-margin-auto">
                Welcome to our restaurant! Together creeping heaven upon third dominion be upon won't darkness rule land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning.
            </h4>
            <a id="scroll_to_dishes" class="uk-margin-top">
                <span data-uk-icon="icon: chevron-down; ratio: 3"></span>
            </a>
        </div>
    </div>
</section>
<main class="uk-container uk-container-large">
    {{-- Popular dishes --}}
    <section id="dishes" class="uk-section">
        <div class="uk-padding uk-padding-remove-top uk-padding-remove-horizontal">
            <h2 class="uk-title uk-text-bold uk-text-center">
                Our top dishes
            </h2>
            <hr>
        </div>
        <div class="uk-child-width-1-4@m uk-child-width-1-2@s" data-uk-height-match data-uk-grid>
            {{-- card --}}
            <div>
                <div class="uk-card uk-card-default uk-height-1-1">
                    <div class="uk-card-media-top">
                        <img class="uk-width-1-1" src="https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="hamburger" title="hamburger">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Hamburger</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            {{-- card --}}
            <div>
                <div class="uk-card uk-card-default uk-height-1-1">
                    <div class="uk-card-media-top">
                        <img class="uk-width-1-1" src="https://images.pexels.com/photos/1256875/pexels-photo-1256875.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="pasta" title="pasta">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Pasta</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            {{-- card --}}
            <div>
                <div class="uk-card uk-card-default uk-height-1-1">
                    <div class="uk-card-media-top">
                        <img class="uk-width-1-1" src="https://images.pexels.com/photos/1703272/pexels-photo-1703272.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="hamburger" title="hamburger">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Tomato soup</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            {{-- card --}}
            <div>
                <div class="uk-card uk-card-default uk-height-1-1">
                    <div class="uk-card-media-top">
                        <img class="uk-width-1-1" src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="hamburger" title="hamburger">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Chicken special</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Menu section --}}
    <section id="menu" class="uk-section">
        <div class="uk-padding uk-padding-remove-horizontal">
            <h2 class="uk-title uk-text-bold uk-text-center">
                Our menu
            </h2>
            <hr>
        </div>
        <div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-child-width-1-1" data-uk-grid>
            {{-- card menu --}}
            <a href="" class="menu-card">
                <div class="uk-card uk-card-default">
                    <img class="uk-width-1-1" src="https://images.pexels.com/photos/1881336/pexels-photo-1881336.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="beef" title="beef">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h1 class="uk-title">BEEF</h1>
                    </div>
                </div>
            </a>
            {{-- card menu --}}
            <a href="" class="menu-card">
                <div class="uk-card uk-card-default">
                    <img class="uk-width-1-1" src="https://images.pexels.com/photos/616354/pexels-photo-616354.jpeg?auto=format%2Ccompress&cs=tinysrgb&h=650&w=940" alt="poultry" title="poultry">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h1 class="uk-title">POULTRY</h1>
                    </div>
                </div>
            </a>
            {{-- card menu --}}
            <a href="" class="menu-card">
                <div class="uk-card uk-card-default">
                    <img class="uk-width-1-1" src="https://images.pexels.com/photos/361184/asparagus-steak-veal-steak-veal-361184.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="pork" title="pork">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h1 class="uk-title">PORK</h1>
                    </div>
                </div>
            </a>
            {{-- card menu --}}
            <a href="" class="menu-card">
                <div class="uk-card uk-card-default">
                    <img class="uk-width-1-1" src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="pasta" title="pasta">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h1 class="uk-title">PASTA</h1>
                    </div>
                </div>
            </a>
            {{-- card menu --}}
            <a href="" class="menu-card">
                <div class="uk-card uk-card-default">
                    <img class="uk-width-1-1" src="https://images.pexels.com/photos/1656663/pexels-photo-1656663.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="vegetables" title="vegetables">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h1 class="uk-title">VEGETABLES</h1>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section id="customers" class="uk-section">
        <div class="uk-padding uk-padding-remove-horizontal">
            <h2 class="uk-title uk-text-bold uk-text-center">
                Customers feedback
            </h2>
            <hr>
        </div>
        <div class="uk-padding uk-padding-remove-horizontal uk-width-1-2@m uk-margin-auto" data-uk-slideshow="animation: push; autoplay: true; max-height: 200;">

                <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1">
            
                    <ul class="uk-slideshow-items">
                        <li class="uk-background-muted customer-comment">
                            <article class="uk-comment">
                                <header class="uk-comment-header">
                                    <h4 class="uk-comment-title">John B</h4>
                                </header>
                                <div class="uk-comment-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id sit tenetur quaerat nisi ea quisquam?</p>
                                </div>
                            </article>
                        </li>
                        <li class="uk-background-muted customer-comment">
                            <article class="uk-comment">
                                <header class="uk-comment-header">
                                    <h4 class="uk-comment-title">John B</h4>
                                </header>
                                <div class="uk-comment-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id sit tenetur quaerat nisi ea quisquam?</p>
                                </div>
                            </article>
                        </li>
                        <li class="uk-background-muted customer-comment">
                            <article class="uk-comment">
                                <header class="uk-comment-header">
                                    <h4 class="uk-comment-title">John B</h4>
                                </header>
                                <div class="uk-comment-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id sit tenetur quaerat nisi ea quisquam?</p>
                                </div>
                            </article>
                        </li>
                    </ul>
            
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            
                </div>
            
                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
            
            </div>
    </section>
</main>
@endsection