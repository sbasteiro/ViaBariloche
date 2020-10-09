<?php
include 'core/App.php';
?>
<html>
    <head>
        <meta charset="UTF-8">   
        <!-- Librerias Bootstrap -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
        <!-- Librerias Css Propia -->
        <link rel="stylesheet" href="style.css">
        <title>Listado de Empresas</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h2 class="text_center">Listado de Empresas</h2>
                <hr />                               
                <div class="row">
                    <div class="panel panel-info col-md-6">
                        <div class="panel-heading">
                          <h3 class="panel-title">Empleados</h3>
                        </div>
                        <div class="panel-body">
                            <form action="javascript:void(0);" method="POST"> 
                                <label class="label_width" for="first_name">Nombre: </label>
                                <input type="text" required id="first_name"><br>
                                <label class="label_width" for="last_name">Apellido: </label>
                                <input type="text" required id="last_name"><br>
                                <label class="label_width" for="company_id">Empresa: </label>
                                <select class="select_width" required id="company_id">                                    
                                </select><br>
                                <div class="text_center">
                                    <button id="add_employee" class="btn btn-info">Agregar</button>
                                    <button type="reset" class="btn btn-danger">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-info col-md-6">
                        <div class="panel-heading">
                          <h3 class="panel-title">Empresas</h3>
                        </div>
                        <div class="panel-body">
                            <form action="javascript:void(0);" method="POST"> 
                                <label class="label_width" for="name">Nombre: </label>
                                <input type="text" required id="name"><br>
                                <label class="label_width" for="sector">Rubro: </label>
                                <input type="text"  required id="sector"><br>
                                <label class="label_width" for="address">Direcci&oacute;n: </label>
                                <input type="text" required id="address"><br>
                                <div class="text_center">
                                    <button id="add_company" class="btn btn-info">Agregar</button>
                                    <button type="reset" class="btn btn-danger">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-info col-md-12">
                        <div class="panel-body">
                            <table class="table table-striped" id="company_table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre de Empresa</th>
                                        <th scope="col">Direcci&oacute;n</th>
                                        <th scope="col">Rubro</th>
                                        <th scope="col">Acci&oacute;n</th>
                                    </tr>
                                </thead>
                                <tbody>                                                                    
                                </tbody>
                            </table>
                            <!-- Modal -->
                            <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="userModalLabel">Listado de empleados de la empresa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-default col-md-6 text_left">                    
                          Proyecto: <?php echo App::NAME; ?>
                    </div>
                    <div class="panel panel-default col-md-6 text_rigth">                    
                          Versión: <?php echo App::VERSION; ?>
                    </div>                    
                </div>
                </div>
            </div>
        </div>
        <!-- Libreria Bootstrap y Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="script.js"></script>         
    </body>
</html>

