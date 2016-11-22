	<!DOCTYPE html>
<html>
    <head>
        <title></title>
        @section ('content')
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        
    

    </head>
    <body>
        <div class="container">
            <div class="content">

              <form role="form">


                <div>
                    <h2><b>Registrar </b></h2>
                </div>    



                <div class="col-md-12">
                    
                        <div style="padding: 10px;">
                         <form class="form-horizontal" role="form" method="POST" action="Formulario" enctype="multipart/form-data">
                        
                             <div class="form-group">
                                    <label for="nombre" class="col-sm-10 control-label">Nombre del Curso</label>
                                        <div class="col-sm-8">
                                             <input type="text" class="form-control input-sm text-left" id="nombre" name="nombre" placeholder="Digite su nombre" required>
                                        </div>
                             </div>



                                              
                            <div class="form-group">
									<label for="materia" class="col-sm-6">Materia</label>
									<div class="col-sm-6">
										<select class="form-control input-sm" name="materia" id="materia" Required>
										<option value=""> --- </option>
										@foreach($Materia as $materias) 
											<option value= "{{$materias->id}}"> {{$materias->materias}} </option>
											@endforeach
										</select>
									</div>
								   </div>
                                              

                                              
                            <div class="form-group">
                                    <label for="horarios" class="col-sm-10 control-label">Horarios</label>
                                        <div class="col-sm-8">
                                             <input type="horarios" class="form-control input-sm text-left" id="horarios" name="horarios" placeholder="Horario">
                                        </div>
                            </div>

                             

                             <br>
                            <div class="form-group">
                                <div class="col-xs-9">
                                    <input type="submit" class="btn btn-primary" value="Enviar">
                                    
                                </div>
                            </div>
                         </form>

                   </div>    
                </div>
            </div>
            </div>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
