<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pedido de Vendas
            <small>Novos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/vendas">Vendas</a></li>
            <li class="active"><a>Cadastrar</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="box box-primary">
                    <div class="box-body">
                        <form class="form-horizontal" name="form_dados_transportador_novos" action="" method="POST">
                            <div class="box box-primary box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Dados do Cliente</h3>
                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="descelutar">Cliente</label>
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                                      <button type="button" class="btn btn-info btn-solid"><i class="fa  fa-search"></i></button>
                                                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-users"></i></button>
                                                      <!-- <button type="button" class="btn btn-info btn-flat">Go!</button> -->
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box box-primary box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Itens de produtos</h3>
                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="box-body">                                        
                                    <table class="table" id="tab_logic">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th class="text-center" style="width: 300px">Descrição</th>
                                            <th class="text-center" style="width: 75px">Cód</th>
                                            <th class="text-center" style="width: 75px">Qtds</th>
                                            <th class="text-center" style="width: 75px">Un</th>
                                            <th class="text-center" style="width: 100px">Preço un</th>
                                            <th class="text-center" style="width: 100px">Preço Total</th>
                                            <!-- <th class="text-center" style="width: 100px">Ramal</th> -->
                                        </tr>
                                        <tr id='add0'>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                <input type="text" name='descricao0' class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name='cod0' class="form-control"/>
                                            </td> 
                                            <td>
                                                <input type="text" name='qtds0' class="form-control"/>
                                            </td> 
                                            <td>
                                                <input type="text" name='un0'class="form-control"/>
                                            </td> 
                                            <td>
                                                <input type="text" name='precoun0'class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name='precototal0' class="form-control"/>
                                            </td>  
                                        </tr>
                                        <tr id='addr1'></tr>
                                    </table>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div style="padding-top:5px;"></div>
                                            <a id="add_row" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></a>
                                            <a id='delete_row' class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="box box-primary box-solid">
                            <div class="box-header with-border">
                              <h3 class="box-title">Totais</h3>
                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                </button>
                              </div>
                            </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="descelutar">N de itens</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Soma de Qtds</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="descelutar">Peso Bruto</label>
                                            <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                                <span class="input-group-addon">kg</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Peso Líquido</label>
                                            <div class="input-group">
                                            <input type="text" class="form-control" placeholder="E-mail">
                                                <span class="input-group-addon">kg</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="descelutar">Total de produtos</label>
                                            <div class="input-group">                                                
                                                <span class="input-group-addon">R$</span>
                                                <input type="text" class="form-control" placeholder="Telefone Celular">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Valor de IPI</label>
                                            <div class="input-group">                                                
                                                <span class="input-group-addon">R$</span>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="descelutar">Valor ICMS ST</label>
                                            <div class="input-group">                                                
                                                <span class="input-group-addon">R$</span>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Total da Venda</label>
                                            <div class="input-group">                                                
                                                <span class="input-group-addon">R$</span>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div> 
                            </div>
                        </div>
                        <div class="box box-primary box-solid">
                            <div class="box-header with-border">
                              <h3 class="box-title">Detalhes da venda</h3>
                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                </button>
                              </div>
                            </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="descelutar">Data da venda</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Nº do pedido</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                        <!-- <div class="col-sm-3">
                                            <label for="descelutar">Peso Bruto</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Peso Líquido</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="descelutar">Total de produtos</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Valor de IPI</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="descelutar">Valor ICMS ST</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Total da Venda</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div> -->
                                    </div> 
                            </div>
                        </div>
                        <div class="box box-primary box-solid">
                            <div class="box-header with-border">
                              <h3 class="box-title">Pagamento</h3>
                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                </button>
                              </div>
                            </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="descelutar">Forma de recebimento</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Condição de Pagamento</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="descelutar">Categoria</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <!-- <div class="col-sm-3">
                                            <label for="desemail">Peso Líquido</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="descelutar">Total de produtos</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Valor de IPI</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="descelutar">Valor ICMS ST</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Total da Venda</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div> -->
                                    </div> 
                                </div>
                        </div>
                        <div class="box box-primary box-solid">
                            <div class="box-header with-border">
                              <h3 class="box-title">Transporte / Volumes</h3>
                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                </button>
                              </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="descelutar">N de itens</label>
                                        <input type="text" class="form-control" placeholder="Telefone Celular">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="desemail">Soma de Qtds</label>
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="descelutar">Peso Bruto</label>
                                        <input type="text" class="form-control" placeholder="Telefone Celular">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="desemail">Peso Líquido</label>
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="descelutar">Total de produtos</label>
                                        <input type="text" class="form-control" placeholder="Telefone Celular">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="desemail">Valor de IPI</label>
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="descelutar">Valor ICMS ST</label>
                                        <input type="text" class="form-control" placeholder="Telefone Celular">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="desemail">Total da Venda</label>
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="box box-primary box-solid">
                            <div class="box-header with-border">
                              <h3 class="box-title">Dados adicionais</h3>
                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                </button>
                              </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="descelutar">N de itens</label>
                                        <input type="text" class="form-control" placeholder="Telefone Celular">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="desemail">Soma de Qtds</label>
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="descelutar">Peso Bruto</label>
                                        <input type="text" class="form-control" placeholder="Telefone Celular">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="desemail">Peso Líquido</label>
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="descelutar">Total de produtos</label>
                                        <input type="text" class="form-control" placeholder="Telefone Celular">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="desemail">Valor de IPI</label>
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="descelutar">Valor ICMS ST</label>
                                        <input type="text" class="form-control" placeholder="Telefone Celular">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="desemail">Total da Venda</label>
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script type="text/javascript">
    $(document).ready(function () {
        var i = 1;
        $("#add_row").click(function () {
            $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='descricao" + i + "' type='text' class='form-control input-md'  /> </td><td><input  name='cod" + i + "' type='text' class='form-control input-md'></td><td><input  name='qtds" + i + "' type='text' class='form-control input-md'></td><td><input  name='un" + i + "' type='text' class='form-control input-md'></td><td><input  name='precoun" + i + "' type='text' class='form-control input-md'></td><td><input  name='precototal" + i + "' type='text' class='form-control input-md'></td>");

            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;
        });
        $("#delete_row").click(function () {
            if (i > 1) {
                $("#addr" + (i - 1)).html('');
                i--;
            }
        });

    });
</script>