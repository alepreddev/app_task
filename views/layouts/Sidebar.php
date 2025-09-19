<!-- Sidebar -->
<aside class="sidebar">

    <div class="logo">Dashboard</div>

    <nav class="menu">

        <?php $active = $page ?>

        <ul class="principal">

            <a href="home">
                <li class="<?php if($active=='home') echo 'active'; ?>">
                    <i class="fi fi-rr-home"></i>
                    <span> Dashboard</span>
                </li>
            </a>

            <a href="tareas">
                <li class="<?php if($active=='task') echo 'active'; ?>">
                    <i class="fi fi-rr-edit"></i>
                    <span> Tareas</span>
                </li>
            </a>

            <a href="calendario">
                <li class="<?php if($active=='calender') echo 'active'; ?>">
                    <i class="fi fi-rr-calendar"></i>
                    <span> Calendario</span>
                </li>
            </a>

            <!-- <a href="">
                <li class="<?php //if($active=='') echo 'active'; ?>">
                    <i class="fi fi-rr-stats"></i>
                    <span> Analisis</span>
                </li>
            </a> -->

            <a href="equipo">
                <li class="<?php if($active=='team') echo 'active'; ?>">
                    <i class="fi fi-rr-employees"></i>
                    <span> Equipo</span>
                </li>
            </a>

        </ul>

        <ul class="general">

            <a href="botones">
                <li class="<?php if($active=='botones') echo 'active'; ?>">
                    <i class="fi fi-rr-toggle-off"></i>
                    <span> Botones</span>
                </li>
            </a>

            <a href="ventanas">
                <li class="<?php if($active=='ventanas') echo 'active'; ?>">
                    <i class="fi fi-rr-window-restore"></i>
                    <span> Ventanas</span>
                </li>
            </a>

            <a href="formularios">
                <li class="<?php if($active=='formularios') echo 'active'; ?>">
                    <i class="fi fi-rr-form"></i>
                    <span> Formularios</span>
                </li>
            </a>

            <li><i class="fi fi-rr-settings"></i> Settings</li>
            <li><i class="fi fi-rr-exclamation"></i> Help</li>
            <li><i class="fi fi-rr-sign-out-alt"></i> Logout</li>

        </ul>

    </nav>
    
    <!-- en esta parte se puede agregar informacion adicional al final del sidebart -->

    <div class="mobile-app">
        <p>informacion adicional como footer</p>
    </div>
</aside>
<!-- Sidebar:end -->