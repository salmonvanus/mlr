<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">


                        <h4 class="mt-0 header-title">Perhitungan</h4>
                        <p class="text-muted mb-4 font-13">Perhitungan Tingkat Kesejahteraan Masyarakat.</p>
                        <br />
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="mt-0 header-title">Tahap 2 : Dari persamaan normal disusun menjadi dalam bentuk matriks, dan didapatkan angka dari tiap matrix.</h4>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <table class="table table-bordered nowrap" style="border-spacing: 0; width: 20%; height: 10px; font-size:10px;  ">
                                        <?php
                                        echo "<tr>"; ?>
                                        <td colspan="6">
                                            <center><b>Matriks A</b></center>
                                        </td>
                                        <?php
                                        for ($row = 0; $row < 6; $row++) {
                                            echo "<tr>";
                                            echo "";
                                            for ($col = 0; $col < 6; $col++) {
                                                echo "<td>" . round($matriks_a[$row][$col], 4) . "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    &emsp;&emsp;&emsp;
                                    <table class="table table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 20%; font-size:10px">
                                        <?php
                                        echo "<tr>"; ?>
                                        <td colspan="6">
                                            <center><b>Matriks A1</b></center>
                                        </td>
                                        <?php
                                        for ($row = 0; $row < 6; $row++) {
                                            echo "<tr>";
                                            echo "";
                                            for ($col = 0; $col < 6; $col++) {
                                                echo "<td>" . round($matriks_a1[$row][$col], 4) . "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    &emsp;&emsp;&emsp;
                                    <table class="table table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 20%; font-size:10px">
                                        <?php
                                        echo "<tr>"; ?>
                                        <td colspan="6">
                                            <center><b>Matriks A2</b></center>
                                        </td>
                                        <?php
                                        for ($row = 0; $row < 6; $row++) {
                                            echo "<tr>";
                                            echo "";
                                            for ($col = 0; $col < 6; $col++) {
                                                echo "<td>" . round($matriks_a2[$row][$col], 4) . "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    &emsp;&emsp;&emsp;
                                    <table class="table table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 20%; font-size:10px">
                                        <?php
                                        echo "<tr>"; ?>
                                        <td colspan="6">
                                            <center><b>Matriks A3</b></center>
                                        </td>
                                        <?php
                                        for ($row = 0; $row < 6; $row++) {
                                            echo "<tr>";
                                            echo "";
                                            for ($col = 0; $col < 6; $col++) {
                                                echo "<td>" . round($matriks_a3[$row][$col], 4) . "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    &emsp;&emsp;&emsp;
                                    <table class="table table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 20%; font-size:10px">
                                        <?php
                                        echo "<tr>"; ?>
                                        <td colspan="6">
                                            <center><b>Matriks A4</b></center>
                                        </td>
                                        <?php
                                        for ($row = 0; $row < 6; $row++) {
                                            echo "<tr>";
                                            echo "";
                                            for ($col = 0; $col < 6; $col++) {
                                                echo "<td>" . round($matriks_a4[$row][$col], 4) . "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    &emsp;&emsp;&emsp;
                                    <table class="table table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 20%; font-size:10px">
                                        <?php
                                        echo "<tr>"; ?>
                                        <td colspan="6">
                                            <center><b>Matriks A5</b></center>
                                        </td>
                                        <?php
                                        for ($row = 0; $row < 6; $row++) {
                                            echo "<tr>";
                                            echo "";
                                            for ($col = 0; $col < 6; $col++) {
                                                echo "<td>" . round($matriks_a5[$row][$col], 4) . "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                    &emsp;&emsp;&emsp;
                                    <table class="table table-bordered  nowrap" style="border-collapse: collapse; border-spacing: 0; width: 20%; font-size:10px">
                                        <?php
                                        echo "<tr>"; ?>
                                        <td colspan="6">
                                            <center><b>Matriks A6</b></center>
                                        </td>
                                        <?php
                                        for ($row = 0; $row < 6; $row++) {
                                            echo "<tr>";
                                            echo "";
                                            for ($col = 0; $col < 6; $col++) {
                                                echo "<td>" . round($matriks_a6[$row][$col], 4) . "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        <?= $footer; ?>
    </footer>
</div>
<!-- end page content -->


</div>
<!--end page-wrapper-inner -->
</div>
<!-- end page-wrapper -->