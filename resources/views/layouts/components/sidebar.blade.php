<link rel="stylesheet" href="{{url('css/simplebar.css')}}">
<link rel="stylesheet" href="{{url('css/vendors/simplebar.css')}}">

<link href="{{url('css/style.css')}}" rel="stylesheet">

<div class="sidebar sidebar-dark sidebar-fixed sidebar-self-hiding-xl" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <img class="sidebar-brand-full" width="118" height="80"src="{{url('img/italo.png')}}"/>
        <img class="sidebar-brand-narrow" width="46" height="46" src="{{url('img/italo.png')}}">
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <li class="nav-item"><a class="nav-link" href="{{url('index')}}">
        <img src="{{url('img/casa.png')}}"/>
    <svg class="nav-icon">
    </svg>
    Inicio
    <span class="badge bg-info-gradient ms-auto">Index</span></a></li>

    <li class="nav-title">Inforcacion</li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <img src="{{url('img/tabla-de-datos.png')}}"/>
    <svg class="nav-icon">
    </svg> Tablas</a>
    <ul class="nav-group-items">
    <li class="nav-item"><a class="nav-link" href="{{url('products')}}" target="_top">
        <img src="{{url('img/paquete.png')}}"/>
    <svg class="nav-icon">
     </svg> Productos</a></li>
    <li class="nav-item"><a class="nav-link" href="{{url('companies')}}" target="_top">
        <img src="{{url('img/empresa.png')}}"/>
    <svg class="icon">
    </svg>
    Compañias</a></li>
    </ul>
    </li>

    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>

    <script src="{{url('js/coreui.bundle.min.js')}}"></script>
<script src="{{url('js/simplebar.min.js')}}"></script>
