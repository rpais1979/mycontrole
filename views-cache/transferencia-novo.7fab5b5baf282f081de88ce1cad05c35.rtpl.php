<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Transferencias entre Contas
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/transferencia">Transferencias</a></li>
            <li class="active"><a href="/admin/transferencia/novo">Cadastrar</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="exampleInputEmail1">Data</label>
                                    <div class="input-group date">
                                        <input type="text" name="competencia_id" class="form-control" id="competencia" placeholder="dd/mm/aaaa">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-sm-3">
                                    <label>Valor</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R$</span>
                                        <input type="text" class="form-control" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="exampleInputEmail1">Conta Origem</label>
                                    <select class="form-control" name="categoria_id">
                                        <option value="">Selecione</option>                    
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="exampleInputEmail1">Conta Destino</label>
                                    <select class="form-control" name="categoria_id">
                                        <option value="">Selecione</option>                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="exampleInputEmail1">Histórico</label>
                                    <textarea name="obs" class="form-control">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $('#dtemissao').datepicker({
            format: "dd/mm/yyyy",
            autoclose: 1,
            language: "pt-BR",
            startDate: '+0d',
        });
        $('#vencimento').datepicker({
            format: "dd/mm/yyyy",
            autoclose: 1,
            language: "pt-BR",
            startDate: '+0D',
        });
        $('#competencia').datepicker({
            format: "dd/mm/yyyy",
            autoclose: 1,
            language: "pt-BR",
            startDate: '+0d',
        });
    </script>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->