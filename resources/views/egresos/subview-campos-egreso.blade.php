<div class="container">
    <div class="section">
        <div class="row">

            <div class="col s10">
                <div class="mb-3">
                    <label for="valor" class="form-label"> ¿Qué valor tendrá el egreso?</label>

                    {!! Form::textarea('valor', null, ['class'=>"form-control",'rows'=>1] ) !!}
                </div>
            </div>

            <div class="col s2">
                <label for=""></label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="categoria">
                    <option disabled selected>Seleccione categoria</option>
                    <option value="Transporte">Transporte</option>
                    <option value="Alimentacion">Alimentacion</option>
                    <option value="Vivienda">Vivienda</option>
                    <option value="Servicios">Servicios</option>
                    <option value="Cine">Cine</option>
                    <option value="Fiesta">Fiesta</option>
                    <option value="Otros">Otros</option>
                </select>
            </div>

        </div>
    </div>
</div>

