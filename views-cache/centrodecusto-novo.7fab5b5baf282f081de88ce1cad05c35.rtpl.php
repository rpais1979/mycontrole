<?php if(!class_exists('Rain\Tpl')){exit;}?>Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Centro de Custo
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/centrodecusto">Centro de Custo</a></li>
    <li class="active"><a href="/admin/centrodecusto/novo">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
<!--         <div class="box-header with-border">
          <h3 class="box-title">Novo Tipo de Cliente</h3>
        </div> -->
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/centrodecusto/novo" method="post">
        <div class="box-body">
            <div class="form-group">
              <div class="col-sm-12">
                <label for="descategory">Nome do Centro de Custo</label>
                <input type="text" class="form-control" id="descategory" name="descategory" placeholder="Digite o nome do Centro de Custo">
              </div>
<!--               <div class="col-sm-2">
                <label for="">Status</label>
                  <select class="form-control" name="">
                   <option value="">Selecione...</option>
                   <option value="1">Ativo</option>
                   <option value="2">Inativo</option>
                  </select>
              </div> -->
           </div>
        </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper