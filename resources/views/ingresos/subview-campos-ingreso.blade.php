<div class="container">
    <div class="section">

        <div class="row s10">

            <div class="mb-3">
                <label for="valor_ingreso" class="form-label">De qué valor será el ingreso? </label>
                {!! Form::textarea('valor_ingreso', null,['class' => 'form-control', 'rows' => 1] ) !!}
            </div>
        </div>


        <div class="row s2">
            <div class="form-group mb-3">
                <select class="form control" name="categoria" id="">
                    <option value="1">Cardiologo</option>
                    <option value="2">Cirujano</option>
                    <option value="3">Neurologo</option>
                </select>
            </div>
        </div>
    </div>
</div>
