<div class="container">
    <div class="section">
        <div class="row">

            <div class="col s10">
                <div class="mb-3">
                    <label for="content" class="form-label"> ¿Qué valor tendrá el egreso?</label>
                    {!! Form::textarea('content', null, ['class'=>"form-control",'rows'=>1] ) !!}
                </div>
            </div>

            <div class="col s2">
                <label for=""></label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option disabled selected>Seleccione categoria</option>
                    <option value="1">Transporte</option>
                    <option value="2">Alimentacion</option>
                    <option value="3">Vivienda</option>
                    <option value="4">Servicios</option>
                    <option value="5">Cine</option>
                    <option value="6">Fiesta</option>
                    <option value="6">Otros</option>
                </select>
            </div>

        </div>
    </div>
</div>

