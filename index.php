<?php include("includes/header.php") ?>
<?php include("db.php"); ?>




<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="" method="POST">
                <div class="form-group">
                        <h3>CONSULTAR PICO Y PLACA</h3>
                        <br>
                        <h6>INGRESAR EL ULTIMO DIGITO DE LA PLACA</h6>
                        <input type="number" name="digito" value="<?php echo $digito ?>" class="form-control" placeholder="Ingrese Ultimo Numero de la Placa" min="0" max="9" required>
                        <br>
                        <button class="btn btn-success" name="update">Consultar</button>
                </div>                 
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>