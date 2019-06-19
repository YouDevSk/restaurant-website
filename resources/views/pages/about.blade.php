@extends('layout.master')
@section('content')
    <div class="uk-width-1-2@m uk-margin-auto uk-text-center uk-margin-large-bottom">
      <h1 class="uk-text-bold uk-text-uppercase">
        About
      </h1>
      <hr>
      <p class="uk-text-justify">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolore neque doloribus consequuntur ipsam provident voluptatem, nam est perspiciatis, pariatur quas alias corrupti voluptate? Accusantium perspiciatis aspernatur iste facere harum ex in officiis excepturi expedita rem eos, nam at non consequatur sit? Cumque optio nihil quidem illum ullam repellat assumenda aspernatur harum accusantium dignissimos recusandae cum, hic enim ipsam vero nulla, totam quod eius. Dolore sapiente iusto itaque dicta repudiandae odit, culpa, commodi illum, esse odio doloribus. Molestias aut molestiae nobis, animi fuga inventore. Iure officia vero animi sint ex veniam? Laudantium dolor, necessitatibus in ipsa explicabo pariatur magnam aspernatur.
      </p>
    </div>
    <div class="uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-large-bottom" data-uk-grid data-uk-lightbox="animation:slide">
      <div>
        <a class="uk-inline" href="/images/about_one.jpg" data-caption="Mushrooms">
          <img src="/images/about_one.jpg" alt="about_one" title="about_one">
        </a>
      </div>
      <div>
        <a href="/images/about_two.jpg" data-caption="Bread and meat">
          <img src="/images/about_two.jpg" alt="about_two" title="Bread and meat">
        </a>
      </div>
      <div>
        <a href="/images/about_three.jpg" data-caption="Wok">
          <img src="/images/about_three.jpg" alt="about_three" title="Wok">
        </a>
      </div>
      <div>
        <a href="/images/about_four.jpg" data-caption="Saucepot">
          <img src="/images/about_four.jpg" alt="about_four" title="Saucepot">
        </a>
      </div>
    </div>
    <div class="uk-padding uk-padding-remove-horizontal">
      <div class="uk-width-1-2@m uk-margin-auto">
        <h1 class="uk-text-bold uk-text-uppercase">
          Our team
        </h1>
        <hr>
      </div>
      {{-- team cards --}}
      <div class="uk-width-2-3@m uk-margin-auto uk-position-relative uk-visible-toggle uk-padding uk-padding-remove-horizontal" tabindex="-1" data-uk-slider>
        <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-grid">
          <li>
            <div class="uk-card">
              <div class="uk-card-media-top">
                <img src="/images/team/man_1.jpg" alt="John J. Keeshan" title="John J. Keeshan CEO">
              </div>
              <div class="uk-card-body">
                <h3 class="uk-card-title uk-text-bold">
                  John J. Keeshan
                </h3>
                <p class="uk-text-muted">
                  CEO
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="uk-card">
              <div class="uk-card-media-top">
                <img src="/images/team/man_2.jpg" alt="John J. Keeshan" title="John J. Keeshan CEO">
              </div>
              <div class="uk-card-body">
                <h3 class="uk-card-title uk-text-bold">
                  John J. Keeshan
                </h3>
                <p class="uk-text-muted">
                  CEO
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="uk-card">
              <div class="uk-card-media-top">
                <img src="/images/team/man_3.jpg" alt="John J. Keeshan" title="John J. Keeshan CEO">
              </div>
              <div class="uk-card-body">
                <h3 class="uk-card-title uk-text-bold">
                  John J. Keeshan
                </h3>
                <p class="uk-text-muted">
                  CEO
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="uk-card">
              <div class="uk-card-media-top">
                <img src="/images/team/man_4.jpg" alt="John J. Keeshan" title="John J. Keeshan CEO">
              </div>
              <div class="uk-card-body">
                <h3 class="uk-card-title uk-text-bold">
                  John J. Keeshan
                </h3>
                <p class="uk-text-muted">
                  CEO
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="uk-card">
              <div class="uk-card-media-top">
                <img src="/images/team/woman_1.jpg" alt="John J. Keeshan" title="John J. Keeshan CEO">
              </div>
              <div class="uk-card-body">
                <h3 class="uk-card-title uk-text-bold">
                  John J. Keeshan
                </h3>
                <p class="uk-text-muted">
                  CEO
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="uk-card">
              <div class="uk-card-media-top">
                <img src="/images/team/woman_2.jpg" alt="John J. Keeshan" title="John J. Keeshan CEO">
              </div>
              <div class="uk-card-body">
                <h3 class="uk-card-title uk-text-bold">
                  John J. Keeshan
                </h3>
                <p class="uk-text-muted">
                  CEO
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="uk-card">
              <div class="uk-card-media-top">
                <img src="/images/team/woman_3.jpg" alt="John J. Keeshan" title="John J. Keeshan CEO">
              </div>
              <div class="uk-card-body">
                <h3 class="uk-card-title uk-text-bold">
                  John J. Keeshan
                </h3>
                <p class="uk-text-muted">
                  CEO
                </p>
              </div>
            </div>
          </li>
        </ul>
        <a class="uk-light uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-light uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
      </div>
    </div>
@endsection