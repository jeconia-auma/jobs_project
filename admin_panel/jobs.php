<?php require_once('partials/header.php'); ?>
    <div class="container">
        <div class="wrapper">
            <h1>Manage Jobs</h1>
            <div class="table">
                <table>
                    <thead>
                        <th>SN</th>
                        <th>JOB</th>
                        <th>DESCRIPTION</th>
                        <th>ROLES/DUTIES</th>
                        <th>Employer</th>
                        <th>LOCATION</th>
                        <th>POST DATE</th>
                        <th>DEADLINE</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ICT INTERN</td>
                            <td>ICT INTERN</td>
                            <td>Maintenance</td>
                            <td>Logos Christian School</td>
                            <td>Jamhuri Ngong Road</td>
                            <td>7/8/2023</td>
                            <td>14/8/2023</td>
                            <td><a href="">update</a> <a href="">delete</a></td>
                        </tr>
                        <tr class="odd">
                            <td>2</td>
                            <td>CHEF</td>
                            <td>CHIEF CHEF</td>
                            <td>Manage</td>
                            <td>The Hub</td>
                            <td>Karen</td>
                            <td>9/8/2023</td>
                            <td>31/8/2023</td>
                            <td><a href="">update</a> <a href="">delete</a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan='8'>Table Showing Jobs Present</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
<?php require_once('partials/footer.php'); ?>