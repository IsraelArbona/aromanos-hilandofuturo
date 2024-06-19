<li class="nav-item dropdown">
      <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
          <i class="c-indigo-500 fa fa-list-alt fa-lg"></i>
        </span>
        <span class="title">General</span>
        <span class="arrow">
          <i class="ti-angle-right"></i>
        </span>
      </a>

      <ul class="dropdown-menu">

        @can('generals.diametros.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.diametros.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-drafting-compass fa-lg"></i>
            </span>
            <span class="title">Gestión Diametros</span>
          </a>
        </li>
        @endcan

        @can('generals.marcas.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.marcas.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-globe fa-lg"></i>
            </span>
            <span class="title">Gestión Marcas</span>
          </a>
        </li>
        @endcan

        @can('generals.rutas.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.rutas.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-route fa-lg"></i>
            </span>
            <span class="title">Gestión Rutas</span>
          </a>
        </li>
        @endcan

        @can('generals.barrios.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.barrios.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-dungeon fa-lg"></i>
            </span>
            <span class="title">Gestión Barrios</span>
          </a>
        </li>
        @endcan

        @can('generals.manzanas.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.manzanas.index') }}" rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-ruler-combined fa-lg"></i>
            </span>
            <span class="title">Gestión Manzanas</span>
          </a>
        </li>
        @endcan

        @can('generals.servicios.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.servicios.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-handshake fa-lg"></i>
            </span>
            <span class="title">Gestión Servicios</span>
          </a>
        </li>
        @endcan

        @can('generals.conceptos.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.conceptos.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-layer-group fa-lg"></i>
            </span>
            <span class="title">Gestión Conceptos</span>
          </a>
        </li>
        @endcan

        @can('generals.uservicios.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.uservicios.index') }}" rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-sort-amount-up fa-lg"></i>
            </span>
            <span class="title">Gestión Uso Servicio</span>
          </a>
        </li>
        @endcan

        @can('generals.cconstrucs.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.cconstrucs.index') }}" rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-pallet fa-lg"></i>
            </span>
            <span class="title">Gestión C. Construcción</span>
          </a>
        </li>
        @endcan

        @can('generals.categorias.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.categorias.index') }}" rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-sitemap fa-lg"></i>
            </span>
            <span class="title">Gestión Categoriás</span>
          </a>
        </li>
        @endcan

        @can('generals.puntospagos.index')
        <li class="nav-item dropdown">
          <a href="{{ route('generals.puntospagos.index') }}" rel="tab">
            <span class="icon-holder">
                <i class="c-indigo-500 fa fa-bullseye fa-lg"></i>
            </span>
            <span class="title">Punto Pagos</span>
          </a>
        </li>
        @endcan
      </ul>
    </li>
