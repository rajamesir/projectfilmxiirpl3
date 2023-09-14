<?php
//session_start();
//modular memanggil file dari folder tampleate
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';
?>
                <!-- /.container-fluid -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul Film</th>
                                            <th>Sutradara</th>
                                            <th>Jenis Film</th>
                                            <th>Tanggal Rilis</th>
                                            <th>Durasi</th>
                                            <th>Rating</th>
                                            <th>Poster</th>
                                        </tr>
                                    </thead>
                                   
                                    
                                    <tbody>
                                    <tr>
                                        <td>Oppenheimer</td>
                                        <td>Christopher Nolan</td>
                                        <td>Hollywood</td>
                                        <td>21 Juli 2023</td>
                                        <td>180 menit</td>
                                        <td>9.0</td>
                                        <td align="center"><img src="../assets/img/oppenheimer.jpg" width="40%" center> </td>
                                    </tr>
                                    <tr>
                                        <td>Oppenheimer</td>
                                        <td>Christopher Nolan</td>
                                        <td>Hollywood</td>
                                        <td>21 Juli 2023</td>
                                        <td>180 menit</td>
                                        <td>9.0</td>
                                        <td align="center"><img src="../assets/img/oppenheimer.jpg" width="40%" center> </td>
                                    </tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>

<?php
    include_once 'template/footer.php';
?>
