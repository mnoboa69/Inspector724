@extends('principal')
@section('contenido')

<title>AnywayTrack - Reporte de uso</title>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Seleccione los filtros</h5>
                </div>
                <div class="ibox-content">
                    <div class="row m-b-lg">
                        <div class="input-daterange input-group" id="datepicker">
                            <span class="input-group-addon">Fecha desde:</span>
                            <input type="text" class="input-sm form-control" name="start" value="{{ date("Y/m/d")}}">
                            <span class="input-group-addon">Fecha hasta:</span>
                            <input type="text" class="input-sm form-control" name="end" value="{{ date("Y/m/d")}}">
                        </div>
                    </div>

                    <div class="row m-b-lg">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="font-noraml">Grupo:</label>
                                <div class="input-group">
                                    {!! Form::select('grupo', $arrayGrupo, $selected) !!}
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="font-noraml">Tito:</label>
                                <div class="input-group">
                                    {!! Form::select('nombres', $array, $selected) !!}
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="font-noraml">Usuarios:</label>
                                <div class="input-group">
                                    <select data-placeholder="Seleccione un grupo..." class="chosen-select" style="width: 230px; display: one;" tabindex="-1">
                                        <option value="">Todos</option>
                                        <option value="Juan Perez">Juan Perez</option>
                                        <option value="Maria Andrade">Maria Andrade</option>
                                        <option value="Carlos Cabrera">Carlos Cabrera</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="font-noraml">Productividad:</label>
                                <div class="input-group">
                                    <select data-placeholder="Seleccione un grupo..." class="chosen-select" style="width: 230px; display: one;" tabindex="-1">
                                        <option value="">Todos</option>
                                        <option value="Productiva">Productiva</option>
                                        <option value="No productiva">No productiva</option>
                                        <option value="Indefinida">Indefinida</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="font-noraml">Tipo:</label>
                                <div class="input-group">
                                    <select data-placeholder="Seleccione un grupo..." class="chosen-select" style="width: 230px; display: one;" tabindex="-1">
                                        <option value="">Todos</option>
                                        <option value="Aplicación">Aplicación</option>
                                        <option value="Web">Web</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row m-b-sm">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-w-m btn-primary pull-right">Consultar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><h5>Aplicación</h5></div>
                <div class="ibox-content">
                    <div>
                        <canvas id="doughnutChart" height="226"></canvas>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Aplicación</th>
                                <th>Tiempo</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Word</td>
                                <td>300</td>
                                <td>66%</td>
                            </tr>
                            <tr>
                                <td>Chrome</td>
                                <td>100</td>
                                <td>22%</td>
                            </tr>
                            <tr>
                                <td>Skype</td>
                                <td>50</td>
                                <td>12%</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Total</th>
                                <th>450</th>
                                <th>100%</th>
                            </tr>
                        <thead>
                            <tr>
                                <th>Total idle</th>
                                <th>150</th>
                                <th></th>
                            </tr>
                        </thead>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><h5>Detalle</h5></div>
                <div class="ibox-content">
                    <div>
                        <canvas id="doughnutChartDetail" height="226"></canvas>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Detalle</th>
                                <th>Tiempo</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Documento de vision.docx</td>
                                <td>300</td>
                                <td>54%</td>
                            </tr>
                            <tr>
                                <td>Presupuesto 2014.docx</td>
                                <td>100</td>
                                <td>18%</td>
                            </tr>
                            <tr>
                                <td>Revision diciembre.docx</td>
                                <td>100</td>
                                <td>18%</td>
                            </tr>
                            <tr>
                                <td>Spect.docx</td>
                                <td>50</td>
                                <td>9%</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Total</th>
                                <th>550</th>
                                <th>100%</th>
                            </tr>
                        <thead>
                            <tr>
                                <th>Total idle</th>
                                <th>20</th>
                                <th></th>
                            </tr>
                        </thead>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>


@endsection('contenido')