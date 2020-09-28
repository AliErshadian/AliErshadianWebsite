@extends('layouts.app')

@section('title', "Homepage")


@section('content')
    <div class="jumbotron">
	  <h1 class="display-4">Welcome to Ali Ershadina's Site</h1>
	  <p class="lead">I am a very dedicated game developer that will always be looking to improve my skills and adapt to any environment very quickly, which has always been one of my best skills. I am able to work with people from different backgrounds. I am extremely confident and I can deliver commendable output in any task given.I really like to become a good indie game developer, so I’m going to work and train as hard as needed.</p>
	  <hr class="my-4">
	  <a target="blank" class="btn btn-primary btn-lg" href="https://twitter.com/AliErshadian" role="button">
	  	<i class="fab fa-twitter"></i> Follow
	  </a>
        <a id="bookmark-this" class="btn btn-danger btn-lg" href="#" role="button" rel="sidebar" title="Ali Ershadian WebSite">
            <i class="fa fa-heart" aria-hidden="true"></i> Favorites
        </a>
	</div>
@endsection


@section('scripts')
    <script>
    jQuery(function($) {

    $('#bookmark-this').click(function(e) {
    var bookmarkURL = window.location.href;
    var bookmarkTitle = document.title;

    if ('addToHomescreen' in window && addToHomescreen.isCompatible) {
    // Mobile browsers
    addToHomescreen({ autostart: false, startDelay: 0 }).show(true);
    } else if (window.sidebar && window.sidebar.addPanel) {
    // Firefox <=22
    window.sidebar.addPanel(bookmarkTitle, bookmarkURL, '');
    } else if ((window.sidebar && /Firefox/i.test(navigator.userAgent)) || (window.opera && window.print)) {
    // Firefox 23+ and Opera <=14
    $(this).attr({
    href: bookmarkURL,
    title: bookmarkTitle,
    rel: 'sidebar'
    }).off(e);
    return true;
    } else if (window.external && ('AddFavorite' in window.external)) {
    // IE Favorites
    window.external.AddFavorite(bookmarkURL, bookmarkTitle);
    } else {
    // Other browsers (mainly WebKit & Blink - Safari, Chrome, Opera 15+)
    alert('Press ' + (/Mac/i.test(navigator.platform) ? 'Cmd' : 'Ctrl') + '+D to bookmark Ali Ershadian Page.');
    }

    return false;
    });

    });
    </script>
@endsection
