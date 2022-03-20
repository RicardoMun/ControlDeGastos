<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s10">
                <div class="mb-3">
                    <label for="valor_ingreso" class="form-label">De qué valor será el ingreso? </label>
                    {!! Form::textarea('valor_ingreso', null,['class' => 'form-control', 'rows' => 1] ) !!}
                </div>
            </div>

            {{-- TODOs validación de Enum --}}
            <div class="col s2">
                <div class="form-group mb-3">
                    <label for=""></label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Selecciona la categoría del ingreso</option>
                        <option value="1">Salario</option>
                        <option value="2">Honorarios</option>
                        <option value="3">Donaciones</option>
                        <option value="4">Otros</option>
                      </select>
                </div>
            </div>

        </div>

    </div>
</div>
