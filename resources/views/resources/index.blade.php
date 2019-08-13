@extends('templates.theme')

@section('title','School Of Computer Science UNSA')


@section('resources','active')

@section('body')

    <div class="container bg-3">
    <div class="row">
        <div class="col-sm-12">
            <h1>RECURSOS</h1>
            [En contrucción]
            <hr>


            <div class="row">
                <h2>Plan Curricular</h2>
                <div class="col-sm-4 text-center">
                    <img src="/images/cslogos/logocs.png" width="50%" >
                </div>
                <div class="col-sm-8">
                    <ul class="list-group">
                        <li class="list-group-item"><a target="_blank" href="https://wwww.spc.org.pe/Peru/CS-UNSA/Plan2017/CS-UNSA-poster.pdf" > Descargar ṕlan Curricular 2017</a></li>
                        <li class="list-group-item"><a target="_blank" href="https://wwww.spc.org.pe/Peru/CS-UNSA/Plan2017/CS-UNSA%20Plan2017.pdf" >Descargar malla Curricular 2017</a></li>
                        <li class="list-group-item"><a target="_blank" href="http://delivery.acm.org/10.1145/2540000/2534860/CS2013_Web_Final.pdf?ip=179.7.226.222&id=2534860&acc=OPEN&key=4D4702B0C3E38B35%2E4D4702B0C3E38B35%2E4D4702B0C3E38B35%2EB7DAD1475E171B0A&__acm__=1539060744_f13a92148a97f600c1a316b00aa6e77d" > Descargar Computing Curricula (Association for Computing Machinery , IEEE Computer Society) </a></li>
                    </ul>
                </div>
            </div>
            <hr>

            <div class="row">
                <h2>Titutlo 2</h2>
                <div class="col-xs-4">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                </div>

                <div class="col-xs-4">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <hr>
                </div>

                <div class="col-xs-4">
                    <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <hr>
                </div>
            </div>

            <div class="row">

                <h2>Principiantes</h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#linux">Introducción a Linux</a></li>
                    <li><a data-toggle="tab" href="#home"> LaTeX </a></li>
                    <li><a data-toggle="tab" href="#menu1">Introducción a la Programación</a></li>
                    <li><a data-toggle="tab" href="#menu2">Estructuras Discretas</a></li>
                    <li><a data-toggle="tab" href="#menu3">Arte Computacional</a></li>
                </ul>

                <div class="tab-content">
                    <div id="linux" class="tab-pane fade in active">

                        <div class="col-sm-12">
                            <h3>Welcome to Linux</h3>
                            <div class="col-sm-4">
                                <img src="/images/linux.png" style=" padding:15px 15px 15px;" width="80%"></img>
                            </div>

                            <div class="col-sm-8">

                                <p></p>
                                <table class="table">
                                <thead>
                                <tr>
                                    <th>Nombre del archivo</th>
                                    <th>Descripción</th>
                                    <th>Enlace</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Ubuntu 18</td>
                                    <td>Archivos .iso de Ubuntu.</td>
                                    <td><a  href="https://www.ubuntu.com/download/desktop" target="_blank">Ir a la pagina de Ubuntu</a></td>
                                </tr>
                                <tr>
                                    <td>Instalación de Ubuntu</td>
                                    <td>Como instalar ubuntu desde un LiveUSB o CD</td>
                                    <td><a target="_blank" href="https://www.youtube.com/watch?v=lxKB91sFNKk">
                                        Ver video
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Comandos basicos</td>
                                    <td>Comandos básicos para trabajar con la terminal de cualquier SO en Linux.</td>
                                    <td>
                                        <a  target="_blank" href="http://fcaglp.unlp.edu.ar/~observacional/manuales/tutorial_linux.pdf">
                                        Descargar
                                        </a>
                                    <td>

                                </tr>
                                <tr>
                                    <td>Insltalación de Programas</td>
                                    <td>Como instalar programas desde Centro de Software, Terminal y con archivos .deb</td>
                                    <td><a target="_blank" href="https://www.youtube.com/watch?v=gGNGqj69Qjw">
                                        Ver video
                                        </a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            </div>
                        </div>


                    </div>
                    <div id="home" class="tab-pane fade ">
                        <h3>LaTeX</h3>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Introducción a la Programación</h3>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Estructuras Discretas</h3>

                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Arte Computacional</h3>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


@endsection
