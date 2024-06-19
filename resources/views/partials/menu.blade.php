<li class="nav-item mT-30">
      <a href="">
          <span class="icon-holder">
              <i class="c-blue-500 fa fa-home fa-lg"></i>
          </span>
          <span class="title">Inicio</span>
      </a>
</li>

	@can('sistemas')
	  @include('partials.sub_menu_sistema')
	@endcan
	@can('generals')
	  @include('partials.sub_menu_general')
	@endcan
	@can('procesos')
	  @include('partials.sub_menu_proceso')
	@endcan
    @can('inventarios')
	  @include('partials.sub_menu_inventarios')
	@endcan
	@can('facturacions')
	  @include('partials.sub_menu_factura')
	@endcan
	@can('contabilidads')
	  @include('partials.sub_menu_contabilidad')
	@endcan
	@can('infests')
	  @include('partials.sub_menu_infest')
	@endcan

@section('js')
@endsection
