<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
      <i class="c-purple-500 fa fa-cogs fa-lg"></i>
    </span>
    <span class="title">Procesos</span>
    <span class="arrow">
      <i class="ti-angle-right"></i>
    </span>
  </a>

      <ul class="dropdown-menu">


        @can('procesos.periodos.index')
        <li class="nav-item dropdown">
          <a href="{{ route('procesos.periodos.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-calendar-alt fa-lg"></i>
            </span>
            <span class="title">Gestión Periodos</span>
          </a>
        </li>
        @endcan

        @can('procesos.tarifas.index')
        <li class="nav-item dropdown">
          <a href="{{ route('procesos.tarifas.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-stream fa-lg"></i>
            </span>
            <span class="title">Gestión Tarifas</span>
          </a>
        </li>
        @endcan

        @can('procesos.tarifadets.index')
        <li class="nav-item dropdown">
          <a href="{{ route('procesos.tarifadets.index',0) }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-tasks fa-lg"></i>
            </span>
            <span class="title">Gestión Tarifas Det.</span>
          </a>
        </li>
        @endcan

        @can('procesos.predios.index')
        <li class="nav-item dropdown">
          <a href="{{ route('procesos.predios.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-house-damage fa-lg"></i>
            </span>
            <span class="title">Gestión Predios</span>
          </a>
        </li>
        @endcan

        @can('procesos.lecturas.index')
        <li class="nav-item dropdown">
          <a href="{{ route('procesos.lecturas.index', 0) }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-purple-500 fa fa-route fa-lg"></i>
            </span>
            <span class="title">Gestión Lecturas</span>
          </a>
        </li>
        @endcan
      </ul>
</li>