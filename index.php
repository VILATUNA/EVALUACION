<?php include("servicios.php")?>
<?php include("includes/header.php") ?>

<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="">
                    <div class="form-group">
                        <h5>INGRESE EL ULTIMO NUMERO DE SU PLACA</h5>
                        <br>
                        <input type="text" name="title" class="form-control" placeholder="Task Tittle" autofocus>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Save Task" name="save_task">
                        <br>
                </form>
            </div>
        </div>
        <div class="col-md-8"> 
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Dias que PUEDE Circular</th>
                        <th>Dias que NO PUEDE Circular</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</main>

<?php include("includes/footer.php") ?>
