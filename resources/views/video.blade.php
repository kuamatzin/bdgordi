@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Ahora un poema...</h1>
        <img src="https://1.bp.blogspot.com/-0JDFisnHaQI/UiU6gffQZBI/AAAAAAAAAHE/cbDtbrC2o4s/s1600/y-ahora-un-poema.gif" alt="" class="img-responsive center-block">

        <br>
    
        <h1 class="text-center">Video de despedida... me voy a Texas</h1>
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mxOXaDQaZ1w"></iframe>
        </div>

        <br>
        
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h1 class="panel-title text-center">PRECAUCIÓN</h1>
            </div>
            <div class="panel-body">
                <button type="button" class="btn btn-danger btn-lg center-block" data-toggle="modal" href='#modal-id'>NO PRESIONE ESTE BOTÓN</button>
            </div>
        </div>
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
                                <p style="font-weight: bold; font-size: 17px">Existen personas que son como las columnas y son el soporte para levantarnos hacia las alturas</p>
                                <br>
                                <p style="font-weight: bold; font-size: 17px">Existen personas que son todos nuestros sueños y al despertar se transforman en impetú para hacerlos realidad</p>
                                <br>
                                <p style="font-weight: bold; font-size: 17px">Existen personas que son como los senderos y al caminarlos nos llevan a los mejores horizontes</p>
                                <br>
                                <p style="font-weight: bold; font-size: 17px">Existen personas que son como los colores primarios y que nos regalan las bases para nuestras mejores tonalidades.</p>
                                <br>
                                <p style="font-weight: bold; font-size: 17px">Existen personas  como tú y yo.</p>
                                <br>
                                <p style="font-weight: bold; font-size: 17px">Existen personas  como nosotros</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection