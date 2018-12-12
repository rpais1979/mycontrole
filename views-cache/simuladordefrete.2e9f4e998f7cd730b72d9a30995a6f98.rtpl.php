<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Simulador de Frete
            <small>Informe o CEP e as dimensões estimadas do pacote para estimar o frete</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="/admin/tipodecliente">Correios</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="box-body no-padding">
                            <!--                            <span style="font-size: 25px;">Estimar Frete</span>
                                                        <span style="font-size: 15px;"> - Informe o CEP e as dimensões estimadas do pacote para estimar o frete</span>-->
                            <div style="padding-top:10px;"></div>
                            <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <div class="col-xs-2">
                                        <label for="sCepDestino">CEP DESTINO</label>
                                        <input type="text" name="sCepDestino" class="form-control" id="sCepDestino" aria-describedby="emailHelp" required="" maxlength="9" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        <label for="nVlValorDeclarado">Valor (R$):</label>
                                        <input type="text" name="nVlValorDeclarado" required="" class="form-control" id="nVlValorDeclarado" aria-describedby="emailHelp" placeholder="0.00" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        <label for="nVlLargura">Largura</label>
                                        <input type="text" name="nVlLargura" class="form-control" id="nVlLargura" aria-describedby="emailHelp" min="11" max="105" maxlength="3" required="" value="">
                                        <small id="emailHelp" class="form-text text-muted">Mín 11cm/Máx 105cm</small>
                                    </div>
                                    <div class="col-xs-2">
                                        <label for="nVlAltura">Altura</label>
                                        <input type="text" name="nVlAltura" class="form-control" id="nVlAltura" aria-describedby="emailHelp" min="2" max="105"  maxlength="3" required="" value="">
                                        <small id="emailHelp" class="form-text text-muted">Mín 2cm/Máx 105cm</small>
                                    </div>
                                    <div class="col-xs-2">
                                        <label for="nVlComprimento">Comprimento</label>
                                        <input type="text" name="nVlComprimento" min="16" max="105" maxlength="3" required="" class="form-control" id="nVlComprimento" aria-describedby="emailHelp" value="">
                                        <small id="emailHelp" class="form-text text-muted">Mín 2cm/Máx 105cm</small>
                                    </div>
                                    <div class="col-xs-2">
                                        <label for="sCepDestino">Peso</label>
                                        <input type="text" name="sCepDestino" class="form-control" id="sCepDestino" aria-describedby="emailHelp" required="" maxlength="9" value="">
                                        <small id="emailHelp" class="form-text text-muted">Peso Total pacote + produto</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-2">
                                        <input type="submit" class="btn btn-success" value="Simular Frete" name="SendCadCatDepRec">
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->