<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
      <i class="c-cyan-500 fa fa-landmark fa-lg"></i>
    </span>
    <span class="title">Contabilidad</span>
    <span class="arrow">
      <i class="ti-angle-right"></i>
    </span>
  </a>

      <ul class="dropdown-menu">

      @can('contabilidads.conpucs.index')
        <li class="nav-item dropdown">
          <a href="{{ route('contabilidads.conpucs.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-cyan-500 fa fa-chart-bar fa-lg"></i>
            </span>
            <span class="title">Plan Unico Cuentas</span>
          </a>
        </li>
      @endcan

      @can('contabilidads.registrocontables.index')
        <li class="nav-item dropdown">
          <a href="{{ route('contabilidads.registrocontables.index') }}"  rel="tab">
            <span class="icon-holder">
                <i class="c-cyan-500 fa fa-donate fa-lg"></i>
            </span>
            <span class="title">Notas Contables</span>
          </a>
        </li>
      @endcan

      </ul>
      
</li>