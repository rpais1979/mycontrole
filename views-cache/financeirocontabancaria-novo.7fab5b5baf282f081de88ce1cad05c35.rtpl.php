<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Bancos
  </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/financeirobanco">Bancos</a></li>
        <li class="active"><a href="/admin/financeirobanco/novo">Cadastrar</a></li>
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
                <div class="col-sm-4">
                    <label for="exampleInputEmail1">Nome Banco</label>
                    <select class="form-control" name="nome_banco">
                        <option value="">Selecione</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="exampleInputEmail1">Descrição da conta</label>
                    <input type="text" name="descricao_conta" class="form-control" placeholder="Nome completo" value="">
                </div>
                <div class="col-sm-4">
                    <label for="exampleInputEmail1">Tipo</label>
                    <select class="form-control" name="nome_tipo_cta">
                        <option value="">Selecione</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-3">
                    <label for="agencia">Agência - Dígito</label>
                    <div class="input-group">
                        <input type="number" name="agencia" class="form-control" value="">
                        <span class="input-group-addon">-</span>
                        <input style="width:75px;" type="number" name="dig_ag" min="0" max="9" class="form-control" value="">
                    </div>
                    <small id="agdig" class="form-text text-muted">Exemplo: 12345-6</small>
                </div>
                <div class="col-sm-3">
                    <label for="conta">Conta - Dígito</label>
                    <div class="input-group">
                        <input type="number" name="conta" class="form-control" value="">
                        <span class="input-group-addon">-</span>
                        <input style="width:75px;" type="number" name="dig_cta" min="0" max="9" class="form-control" value="">
                    </div>
                    <small id="ctadig" class="form-text text-muted">Exemplo: 12345-6</small>
                </div>
                <div class="col-sm-4">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-control" name="nome_sit_tipo_cta">
                        <option value="">Selecione</option>
                    </select>
                </div>            
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->