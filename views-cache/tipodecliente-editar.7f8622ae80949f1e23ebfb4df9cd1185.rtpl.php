<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tipo de Clientes
    <small>Editar</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/tipodecliente">Tipo de Clientes</a></li>
    <li class="active"><a href="/admin/tipodecliente/editar">Editar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <!-- <div class="box-header with-border">
          <h3 class="box-title">Editar Tipo de Cliente</h3>
        </div> -->
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/tipodecliente/<?php echo htmlspecialchars( $tipodecliente["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <div class="col-sm-10">
                <label for="descategory">Nome do Tipo de Cliente</label>
                <input type="text" class="form-control" id="descategory" name="descategory" placeholder="Digite o nome do Tipo de Cliente" value="<?php echo htmlspecialchars( $tipodecliente["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
              </div>
              <div class="col-sm-2">
                <label for="">Status</label>
                  <select class="form-control" name="" value="<?php echo htmlspecialchars( $tipodecliente["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                   <option value="">Selecione...</option>
                   <option value="1">Ativo</option>
                   <option value="2">Inativo</option>
                  </select>
              </div>
           </div>
        </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->