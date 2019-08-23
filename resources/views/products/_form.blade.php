{!! form_start($form) !!}

<div class="row">
    <div class="col-md-8 container">
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Informações Gerais</h3>
            </div>

            <div class="box-body">
                <div class="form-group">
                    {!! form_label($form->name) !!}
                    {!! form_widget($form->name) !!}
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    {!! form_label($form->amount) !!}
                    {!! form_widget($form->amount) !!}
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    {!! form_label($form->vendor) !!}
                    {!! form_widget($form->vendor) !!}
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    {!! form_label($form->brand) !!}
                    {!! form_widget($form->brand) !!}
                </div>
            </div>
        </div>

        <div class="box-footer">
            {!! form_widget($form->submit) !!}
        </div>
    </div>
</div>
{!! form_end($form) !!}
