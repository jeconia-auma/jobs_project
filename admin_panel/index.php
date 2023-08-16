<?php require_once('partials/header.php'); ?>
    <div class="container">
        <div class="wrapper">
            <h1>Dashboard</h1>
            <div class="cards">
                <div class="card">
                    <div class="title">
                        <h3>Jobs Presents Vs Jobs Applied</h3>
                    </div>
                    <div class="main">
                        <canvas id="jobsAvailable"></canvas>
                    </div>
                    <div class="footer">
                        <h3></h3>
                    </div>
                </div>
                <div class="card">
                    <div class="title">
                        <h3>Employees Vs Employers</h3>
                    </div>
                    <div class="main">
                        <canvas id="employeesEmployers"></canvas>
                    </div>
                    <div class="footer">
                        <h3></h3>
                    </div>
                </div>
                <div class="card">
                    <div class="title">
                        <h3>Job Generation Per Week</h3>
                    </div>
                    <div class="main">
                        <canvas id="jobGeneration"></canvas>
                    </div>
                    <div class="footer">
                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('partials/footer.php'); ?>