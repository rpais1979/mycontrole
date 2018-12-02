<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Contas Financeiras
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/contafinanceira">Contas Financeiras</a></li>
    <li class="active"><a href="/admin/contafinanceira/novo">Cadastrar</a></li>
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
                <div class="col-sm-8">
                    <label for="nome">Nome da conta</label>
                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome da conta" value="">
                </div>
                <div class="col-sm-4">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-control" name="situacao_id">
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
<!-- /.content-wrapper