 <ul>
 	@foreach( $items as $menu)
    <li><a class="" href="{{ $menu->link() }}">{{ $menu->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</a></li>
  	@endforeach
  </ul>