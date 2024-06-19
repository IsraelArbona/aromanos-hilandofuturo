<li class="nav-item dropdown">
      <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
          <i class="c-teal-500 fa fa-desktop fa-lg"></i>
        </span>
        <span class="title">Sistema</span>
        <span class="arrow">
          <i class="ti-angle-right"></i>
        </span>
      </a>

      <ul class="dropdown-menu">

        @can('sistemas.empresas.index')
        <li class="nav-item dropdown">
          <a href="{{ route('sistemas.empresas.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-teal-500 fa fa-info-circle fa-lg"></i>
            </span>
            <span class="title">Información Empresa</span>
          </a>
        </li>
        @endcan

        @can('sistemas.sucursals.index')
        <li class="nav-item dropdown">
          <a href="{{ route('sistemas.sucursals.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-teal-500 fa fa-warehouse fa-lg"></i>
            </span>
            <span class="title">Gestión Sucursales</span>
          </a>
        </li>
        @endcan

        @can('sistemas.personas.index')
        <li class="nav-item dropdown">
          <a href="{{ route('sistemas.personas.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-teal-500 fa fa-user-cog fa-lg"></i>
            </span>
            <span class="title">Gestión Personas</span>
          </a>
        </li>
        @endcan

        @can('sistemas.ddocumentos.index')
        <li class="nav-item dropdown">
          <a href="{{ route('sistemas.ddocumentos.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-teal-500 fa fa-book fa-lg"></i>
            </span>
            <span class="title">Definición Documentos</span>
          </a>
        </li>
        @endcan

        @can('sistemas.fnumeracions.index')
        <li class="nav-item dropdown">
          <a href="{{ route('sistemas.fnumeracions.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-teal-500 fa fa-microchip fa-lg"></i>
            </span>
            <span class="title">Gestión Numeración</span>
          </a>
        </li>
        @endcan

        @can('sistemas.users.index')
        <li class="nav-item dropdown">
          <a href="{{ route('sistemas.users.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-teal-500 fa fa-user-shield fa-lg"></i>
            </span>
            <span class="title">Gestión Usuarios</span>
          </a>
        </li>
        @endcan

        @can('sistemas.roles.index')
        <li class="nav-item dropdown">
          <a href="{{ route('sistemas.roles.index') }}" rel="tab">
            <span class="icon-holder">
                <i class="c-teal-500 fa fa-user-lock fa-lg"></i>
            </span>
            <span class="title">Gestión Roles</span>
          </a>
        </li>
        @endcan

        @can('sistemas.tipodocs.index')
        <li class="nav-item dropdown">
          <a href="{{ route('sistemas.tipodocs.index') }}" rel="tab">
            <span class="icon-holder">
                <i class="c-teal-500 fa fa-file-alt fa-lg"></i>
            </span>
            <span class="title">Tipo Doc.</span>
          </a>
        </li>
        @endcan

        @can('sistemas.paises.index')
        <li class="nav-item dropdown">
          <a href="javascript:void(0);">
            <span class="icon-holder">
              <i class="c-teal-500 fa fa-compass fa-lg"></i>
            </span>
            <span>Ubicación</span>
            <span class="arrow">
              <i class="ti-angle-right"></i>
            </span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('sistemas.paises.index') }}" rel="tab">
                <span class="icon-holder">
                  <i class="fa fa-map fa-lg"></i>
                </span>
                <span class="title">Paises</span>
              </a>
            </li>
            <li>
              <a href="{{ route('sistemas.dptos.index') }}" rel="tab">
                <span class="icon-holder">
                  <i class="fa fa-map-marked fa-lg"></i>
                </span>
                <span class="title">Departamentos</span>
              </a>
            </li>
            <li>
              <a href="{{ route('sistemas.ciudades.index') }}" rel="tab">
                <span class="icon-holder">
                  <i class="fa fa-map-marked-alt fa-lge"></i>
                </span>
                <span class="title">Ciudades</span>
              </a>
            </li>
          </ul>
        </li>
        @endcan
      </ul>
    </li>
