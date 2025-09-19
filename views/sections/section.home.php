<!-- Dashboard Body -->
<section class="dashboard">

    <!-- Aqui se muestra informacion de la pagina, se utiliza como una cabezera -->
    <div class="dashboard-header">

        <h1>Dashboard</h1>

        <p>Planifique, priorice y realice sus tareas con facilidad.</p>

        <div class="actions">

            <button class="btn btn-blue md-trigger" data-modal="modal-1">+ Agregar Proyecto</button>
            <button class="btn btn-azu md-trigger" data-modal="modal-2">Importar Datos</button>
            <button class="btn">boton</button>
            <button class="btn">boton</button>
            <button class="btn">boton</button>

        </div>

    </div>

    <div class="stats">

        <div class="card">Proyectos totales: <strong>24</strong></div>
        <div class="card">Proyectos finalizados: <strong>10</strong></div>
        <div class="card">Proyectos en procesos: <strong>12</strong></div>

    </div>

    <div class="analytics">Project Analytics</div>

    <div class="reminders">

        <p>Meeting with Arc Company</p>
        <button>Start Meeting</button>

    </div>

    <div class="projects">

        <h2>Proyecto</h2>

        <ul>

            <li>Develop API Endpoints</li>
            <li>Onboarding Flow</li>
            <li>Build Dashboard</li>
            <li>Optimize Page Load</li>
            <li>Cross-Browser Testing</li>

        </ul>

    </div>

    <div class="team">

        <h2>Equipo que colaboro</h2>

        <ul>
            <!-- <li>Alexandra Deff - Completed</li>
            <li>Edwin Adenike - In Progress</li>
            <li>Isaac Oluwatemilorun - In Progress</li>
            <li>David Oshodi - In Progress</li> -->
        </ul>

    </div>

    <div class="progress">

        <h2>Project Progress</h2>
        <p>41% Project Ended</p>

    </div>

<!-- include para las ventanas modales -->
<?php include 'views/windows/window.modal.php'; ?>

</section>