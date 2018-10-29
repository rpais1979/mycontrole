<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tipo de Contato
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/tipodecontato">Tipo de Contato</a></li>
    <li class="active"><a href="/admin/tipodecontato/editar">Editar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
<!--         <div class="box-header with-border">
          <h3 class="box-title">Editar Tipo de Contato</h3>
        </div> -->
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/tipodecontato/<?php echo htmlspecialchars( $tipodecontato["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="descategory">Nome da tipo de contato</label>
              <input type="text" class="form-control" id="descategory" name="descategory" placeholder="Digite o nome do tipo de contato" value="<?php echo htmlspecialchars( $tipodecontato["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
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