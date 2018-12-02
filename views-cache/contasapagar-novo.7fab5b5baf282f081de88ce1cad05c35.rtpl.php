<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contas a Pagar
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/contasapagar">Contas a Pagar</a></li>
            <li class="active"><a href="/admin/contasapagar/novo">Cadastrar</a></li>
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
                                <div class="col-xs-12">
                                    <label for="exampleInputEmail1">Fornecedor</label>
                                    <div class="input-group">                  
                                        <input type="text" class="form-control" placeholder="Nome do fornecedor">
                                        <div class="input-group-btn">                        
                                            <button class="btn btn-success" type="button" style="border-radius: 0px;" data-toggle="modal" data-target="#myModalcad" class="glyphicon glyphicon-pencil" aria-hidden="true"
                                                    aria-label="Left Align" data-toggle="tooltip" data-placement="top" title="Cadastro Rápido">
                                                <span class="glyphicon glyphicon-plus-sign" title="Editar Cadastro"></span>
                                            </button></a>
                                        </div>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">Digite parte do nome do fornecedor.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-2">
                                    <label for="exampleInputEmail1">Data emissão</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control" id="dtemissao" placeholder="dd/mm/aaaa">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <label for="exampleInputEmail1">Vencimento</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control" id="vencimento" placeholder="dd/mm/aaaa">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <label for="exampleInputEmail1">Competência</label>
                                    <div class="input-group date">
                                        <input type="text" name="competencia_id" class="form-control" id="competencia" placeholder="dd/mm/aaaa">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-xs-2">
                                    <label>Valor</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">R$</span>
                                        <input type="text" class="form-control" placeholder="0,00">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <label for="exampleInputEmail1">Nº documento</label>
                                    <input type="tex" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nº documento">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="exampleInputEmail1">Categoria</label>
                                    <select class="form-control" name="categoria_id">
                                        <option value="">Selecione</option>                    
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <label for="exampleInputEmail1">Ocorrência</label>
                                    <select class="form-control" name="ocorrencia_id">
                                        <option value="">Selecione...</option>
                                        <option>Única</option>
                                        <option>Mensal</option>
                                        <option>Parcelada</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">Única ou recorrente</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="exampleInputEmail1">Histórico</label>
                                    <textarea name="obs" class="form-control">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Inicio Modal -->
                    <div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title text-center" id="myModalLabel">Cadastro Rápido de Cliente/Fornecedor</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" name="form_cad_rap" action="processa.php" method="POST">
                                        <div class="form-group">
                                            <div class="col-xs-8">
                                                <label for="exampleInputEmail1">Nome</label>
                                                <input type="text" name='nome' class="form-control" id="nome" placeholder="Nome ou Razão Social" value="
                                                       </div>
                                                       <div class="col-xs-4">
                                                       <label for="exampleInputEmail1">Fantasia</label>
                                                <input type="text" name='fantasia' class="form-control" id="fantasia" placeholder="Nome fantasia" value="
                                                       </div>
                                                       </div>
                                                       <div class="form-group"> 
                                                       <div class="col-xs-3">
                                                    <label for="exampleInputEmail1">Tipo de pessoa</label>
                                                    <select id="tipo_pessoa" class="form-control" name="tipo_pessoa" onchange="valor(this.value);">
                                                        <option value="cnpj">Pessoa jurídica</option>
                                                        <option value="cpf">Pessoa física</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label id="cnpj" style="display:none;">CNPJ</label>
                                                    <input type="text" name="cnpj" class="form-control" placeholder="CNPJ" style="display:none;">
                                                    <label id="cpf" style="display:none;">CPF</label>
                                                    <input type="text" name="cpf" class="form-control" placeholder="CPF" style="display:none;">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label id="ie" style="display:none;">Inscrição Estadual</label>
                                                    <input type="text" name="ie" class="form-control" placeholder="IE" style="display:none;">
                                                    <label id="rg" style="display:none;">RG</label>
                                                    <input type="text" name="rg" class="form-control" placeholder="RG" style="display:none;">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label id="im" style="display:none;">Inscrição Municipal</label>
                                                    <input type="text" name="im" class="form-control" placeholder="IM" style="display:none;">
                                                </div>
                                            </div>

                                            <span style="font-size:20px;">Endereço</span>
                                            <div class="table table-bordered table-hover"></div>
                                            <div class="form-group">
                                                <div class="col-xs-2">
                                                    <label for="exampleInputEmail1">CEP</label>
                                                    <input type="text" name='cep' class="form-control" id="cep" placeholder="Cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" value=""
                                                </div>
                                                <div class="col-xs-10">
                                                    <label for="exampleInputEmail1">Endereço</label>
                                                    <input type="text" name='rua' class="form-control" id="rua" placeholder="Endereço" value=""
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-2">
                                                    <label for="exampleInputEmail1">Número</label>
                                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="Número" value=""
                                                </div>
                                                <div class="col-xs-2">
                                                    <label for="exampleInputEmail1">Complemento</label>
                                                    <input type="text" name='complemento' class="form-control" id="complemento" placeholder="Complemento" value=""
                                                </div>
                                                <div class="col-xs-3">
                                                    <label for="exampleInputEmail1">Bairro</label>
                                                    <input type="text" name='bairro' class="form-control" id="bairro" placeholder="Bairro" value="">
                                                </div>						
                                                <div class="col-xs-3">
                                                    <label for="exampleInputEmail1">Município</label>
                                                    <input type="text" name='cidade' class="form-control" id="cidade" placeholder="Município" value="&lt;?php
                                                           if (isset($_SESSION['dados']['cidade'])) {
                                                           echo $_SESSION['dados']['cidade'];
                                                           }
                                                           ?&gt;">
                                                </div>
                                                <div class="col-xs-2">
                                                    <label for="exampleInputEmail1">UF</label>
                                                    <select class="form-control" name="uf" id="uf">
                                                        <option value="">...</option>
                                                        <option value="AC" >AC</option>
                                                        <option value="AL" >AL</option>
                                                        <option value="AM" >AM</option>
                                                        <option value="AP" >AP</option>
                                                        <option value="BA" >BA</option>
                                                        <option value="CE" >CE</option>
                                                        <option value="DF" >DF</option>
                                                        <option value="ES" >ES</option>
                                                        <option value="EX" >EX</option>
                                                        <option value="GO" >GO</option>
                                                        <option value="MA" >MA</option>
                                                        <option value="MG" >MG</option>
                                                        <option value="MS" >MS</option>
                                                        <option value="MT" >MT</option>
                                                        <option value="PA" >PA</option>
                                                        <option value="PB" >PB</option>
                                                        <option value="PE" >PE</option>
                                                        <option value="PI" >PI</option>
                                                        <option value="PR" >PR</option>
                                                        <option value="RJ" >RJ</option>
                                                        <option value="RN" >RN</option>
                                                        <option value="RO" >RO</option>
                                                        <option value="RR" >RR</option>
                                                        <option value="RS" >RS</option>
                                                        <option value="SC" >SC</option>
                                                        <option value="SE" >SE</option>
                                                        <option value="SP" >SP</option>
                                                        <option value="TO" >TO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-3">
                                                    <label for="exampleInputEmail1">Telefone Fixo</label>
                                                    <input type="text" name='bairro' class="form-control" id="bairro" placeholder="Telefone Fixo" value="">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label for="exampleInputEmail1">Telefone Celular</label>
                                                    <input type="text" name='numero' class="form-control" id="numero" placeholder="Telefone Celular" value="">
                                                </div>
                                                <div class="col-xs-6">
                                                    <label for="exampleInputEmail1">E-mail</label>
                                                    <input type="text" name='complemento' class="form-control" id="complemento" placeholder="E-mail" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-4">
                                                    <input type="submit" class="btn btn-success" value="Cadastrar" name="SendCadCtaPg">
                                                    <a href=""><button type="button" class="btn btn-default">Cancelar</button></a>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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