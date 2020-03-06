<li><a class="nav-link" href="#">{{ __("Mi perfil") }}</a></li>
<li><a class="nav-link" href="#">{{ __("Mi subscripciones") }}</a></li>
<li><a class="nav-link" href="{{ route('invoices.admin') }}">{{ __("Mi facturas") }}</a></li>
<li><a class="nav-link" href="#">{{ __("Mi cursos") }}</a></li>

@include('partials.navigations.logged')