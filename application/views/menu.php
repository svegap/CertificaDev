<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url('index.php/Inicio') ?>">MSS IT - Producciones</a>
            </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
<!--                    <li><a href="#">About</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artistas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="<?php echo base_url('index.php/Artistas/VerArtistas')?>">Ver/Editar/Eliminar Artistas</a></li>
                            <li><a href="<?php echo base_url('index.php/Artistas/AgregarArtistas')?>">Agregar Artista</a></li>
                            

                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estilos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('index.php/Estilos/VerEstilos')?>">Ver/Editar/Eliminar Estilos</a></li>
                            <li><a href="<?php echo base_url('index.php/Estilos/AgregarEstilos')?>">Agregar Estilo</a></li>

                        </ul>
                    </li>
               
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="<?php echo base_url('index.php/Salas/VerSalas')?>">Ver/Editar/Eliminar Salas</a></li>
                            <li><a href="<?php echo base_url('index.php/Salas/AgregarSalas')?>">Agregar Salas</a></li>
                            

                        </ul>
                    </li>                       
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eventos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="<?php echo base_url('index.php/Eventos/VerEventos')?>">Listar Eventos</a></li>
                            

                        </ul>
                    </li>                     
                </ul>            
            </div><!--/.nav-collapse -->
            
            
        </div><!--/.container-fluid -->
    </nav>
</div> <!-- /container -->
