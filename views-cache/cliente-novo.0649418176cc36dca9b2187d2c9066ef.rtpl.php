<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Clientes
            <small>Novos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/users">Clientes</a></li>
            <li class="active"><a href="/admin/users/create">Cadastrar</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom" role="tablist">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Dados Gerais</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Dados Contato</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Dados Complementares</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Observações</a></li>
                        <!-- <li><a href="#tab_5" data-toggle="tab">Teste</a></li> -->
                        <!--                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>-->
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div style="padding-top:5px;">
                                <form class="form-horizontal" name="form_dados_pessoais" action="" method="POST">

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="desperson">Nome</label>
                                            <input type="text" class="form-control" id="desperson" name="desperson" placeholder="Digite o nome">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="deslogin">Nome Fantasia</label>
                                            <input type="text" class="form-control" id="deslogin" name="deslogin" placeholder="Digite o login"> 
                                        </div>
                                        <div class="col-md-3">
                                            <label for="nrphone">Código</label>
                                            <input type="tel" class="form-control" id="nrphone" name="nrphone" placeholder="Digite o telefone">
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Contribuinte</label>
                                            <select class="form-control" name="contribuinte_id">
                                                <option value="">Selecione...</option>
                                                <option value="1">Não Informado</option>
                                                <option value="2">Contribuinte ICMS</option>
                                                <option value="3">Contribuinte isente de Incrição no cadastro de Contribuintes do ICMS</option>
                                                <option value="4">Não Contribuinte, que pode ou não possuir Incrição Estadual no Cadastro de </option>

                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Tipo de pessoa</label>
                                            <select id="tipo_pessoa" class="form-control" name="tipo_pessoa" onchange="valor(this.value);">
                                                <option value="cnpj">Pessoa jurídica</option>
                                                <option value="cpf">Pessoa física</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label id="cnpj" style="display:none;">CNPJ</label>
                                            <input type="text" name="cnpj" class="form-control" placeholder="CNPJ" style="display:none;">
                                            <label id="cpf" style="display:none;">CPF</label>
                                            <input type="text" name="cpf" class="form-control" placeholder="CPF" style="display:none;">
                                        </div>
                                        <div class="col-sm-2">
                                            <label id="ie" style="display:none;">Inscrição Estadual</label>
                                            <input type="text" name="ie" class="form-control" placeholder="IE" style="display:none;">
                                            <label id="rg" style="display:none;">RG</label>
                                            <input type="text" name="rg" class="form-control" placeholder="RG" style="display:none;">
                                        </div>
                                        <div class="col-sm-2">
                                            <label id="im" style="display:none;">Inscrição Municipal</label>
                                            <input type="text" name="im" class="form-control" placeholder="IM" style="display:none;">
                                        </div>
                                        <div class="col-sm-3">
                                            <label id="crt" style="display:none;">Código de regime tributário</label>
                                            <input type="text" name="crt" class="form-control" placeholder="Código de regime tributário" style="display:none;">
                                        </div>
                                        <div class="col-sm-2">
                                            <label id="insc_suf" style="display:none;">Inscrição Suframa</label>
                                            <input type="text" name="insc_suf" class="form-control" placeholder="Inscrição Suframa" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="padding-top:20px;">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label id="crt" style="display:none;">Código de regime tributário</label>
                                            <input type="text" name="crt" class="form-control" placeholder="Código de regime tributário" style="display:none;" value="">
                                        </div>
                                        <div class="col-sm-2">
                                            <label id="insc_suf" style="display:none;">Inscrição Suframa</label>
                                            <input type="text" name="insc_suf" class="form-control" id="insc_suf" placeholder="Inscrição Suframa" style="display:none;" value="">
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <div class="col-sm-2">
                                        <label id="ec" style="display:none;">Estado civil</label>
                                        <select id="ec" class="form-control" name="estadocivil" style="display:none;">
                                            <option value="">Selecione...</option>
                                            <option value="1">Casado</option>
                                            <option value="2">Solteiro</option>
                                            <option value="3">Viúvo</option>
                                            <option value="4">Separado</option>
                                            <option value="5">Desquitado</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label id="profissao" style="display:none;">Profissão</label>
                                        <input type="text" name="profissao" class="form-control" id="profissao" placeholder="Profissão" style="display:none;" value="">
                                    </div>
                                    <div class="col-sm-2">
                                        <label id="sexo" style="display:none;">Sexo</label>
                                        <select class="form-control" name="sexo" style="display:none;">
                                            <option value="">Selecione...</option>
                                            <option value="1">Feminino</option>
                                            <option value="2">Masculino</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <label id="dtnasc" style="display:none;">Data de Nascimento</label>
                                        <div name="dtnasc" id="dtnasc" class="input-group date">
                                            <input type="text" name="dtnasc" class="form-control" id="dtnasc" placeholder="dd/mm/aaaa" style="display:none;" value="">
                                            <div name="dtnasc" id="dtnasc" style="display:none;" class= "input-group-addon">
                                                <span name="dtnasc" id="dtnasc" class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label id="naturalidade" style="display:none;">Naturalidade</label>
                                        <input type="text" name="naturalidade" class="form-control" id="naturalidade" placeholder="Naturalidade" style="display:none;" value="">
                                    </div>
                                </div>

                                    <span style="font-size:20px;">Endereço</span>
                                    <div class="table table-bordered table-hover"></div>
                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <label>CEP</label>
                                            <input type="text" name="cep" class="form-control" id="cep" placeholder="Cep" size="8" maxlength="8" onblur="pesquisacep(this.value);" value="">
                                        </div>
                                        <div class="col-sm-5">
                                            <label for="exampleInputEmail1">Endereço</label>
                                            <input type="text" name="rua" class="form-control" id="rua" placeholder="Endereço" value="">
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Número</label>
                                            <input type="text" name="numero" class="form-control" id="numero" placeholder="Número" value="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Complemento</label>
                                            <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Complemento" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Bairro</label>
                                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" value="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Município</label>
                                            <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Município" value="">
                                        </div>
                                        <div class="col-sm-1">
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
                                        <div class="col-sm-4">
                                            <input type="submit" class="btn btn-success" value="Cadastrar" name="SendCadCliente">
                                            <a href="&lt;?php echo pg . '/listar/list_fin_contas_pagar' ?&gt;"><button type="button" class="btn btn-default">Cancelar</button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div style="padding-top:5px;">
                                <form class="form-horizontal" action="" method="POST">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="exampleInputEmail1">Fone</label>
                                            <input type="text" name='telefone_fixo' class="form-control" id="telefone_fixo" placeholder="Fixo" value="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Fax</label>
                                            <input type="text" name='telefone_fax' class="form-control" id="telefone_fax" placeholder="Fax" value="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Celular</label>
                                            <input type="text" name='telefone_celular' class="form-control" id="telefone_celular" placeholder="Celular" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="exampleInputEmail1">WebSite</label>
                                            <input type="text" name='website' class="form-control" id="website" placeholder="WebSite" value="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" name='email' class="form-control" id="email" placeholder="E-mail" value="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">E-mail para envio de NFe</label>
                                            <input type="email" name='email_nfe' class="form-control" id="email_nfe" placeholder="E-mail para envio de NFe" value="">
                                        </div>
                                    </div>
                                    <div id="dados_pessoais"></div>
                                    <div class="box-header with-border">
                                        <span style="font-size: 20px;">Pessoas de contato</span>
                                    </div>
                                    <div class="table table-bordered  table-hover"></div>   
                                    <!-- /.box-header -->
                                    <div class="clear"></div>
                                    <div class="box-body">                                        
                                        <table class="table table-bordered  table-hover" id="tab_logic">
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th class="text-center">Nome</th>
                                                <th class="text-center">Setor</th>
                                                <th class="text-center">E-mail</th>
                                                <th class="text-center">Telefone</th>
                                                <th class="text-center" style="width: 100px">Ramal</th>
                                            </tr>
                                            <tr id='add0'>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <input type="text" name='name0' placeholder="Nome" class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name='setor0' placeholder="Setor" class="form-control"/>
                                                </td> 
                                                <td>
                                                    <input type="email" name='email0' placeholder="E-mail" class="form-control"/>
                                                </td> 
                                                <td>
                                                    <input type="text" name='telefone0' placeholder="Telefone" class="form-control"/>
                                                </td> 
                                                <td>
                                                    <input type="text" name='ramal0' placeholder="Ramal" class="form-control"/>
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
                                </form>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            <!--                            <div style="padding-top:5px;">-->
                            <form class="form-horizontal" class="form-horizontal" name="form_dados_complementares" action="" method="POST">
                                <div style="padding-top:20px;">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label id="crt" style="display:none;">Código de regime tributário</label>
                                            <input type="text" name="crt" class="form-control" placeholder="Código de regime tributário" style="display:none;" value="">
                                        </div>
                                        <div class="col-sm-2">
                                            <label id="insc_suf" style="display:none;">Inscrição Suframa</label>
                                            <input type="text" name="insc_suf" class="form-control" id="insc_suf" placeholder="Inscrição Suframa" style="display:none;" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label id="ec" style="display:none;">Estado civil</label>
                                        <select id="ec" class="form-control" name="estadocivil" style="display:none;">
                                            <option value="">Selecione...</option>
                                            <option value="1">Casado</option>
                                            <option value="2">Solteiro</option>
                                            <option value="3">Viúvo</option>
                                            <option value="4">Separado</option>
                                            <option value="5">Desquitado</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label id="profissao" style="display:none;">Profissão</label>
                                        <input type="text" name="profissao" class="form-control" id="profissao" placeholder="Profissão" style="display:none;" value="">
                                    </div>
                                    <div class="col-sm-2">
                                        <label id="sexo" style="display:none;">Sexo</label>
                                        <select class="form-control" name="sexo" style="display:none;">
                                            <option value="">Selecione...</option>
                                            <option value="1">Feminino</option>
                                            <option value="2">Masculino</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <label id="dtnasc" style="display:none;">Data de Nascimento</label>
                                        <div name="dtnasc" id="dtnasc" class="input-group date">
                                            <input type="text" name="dtnasc" class="form-control" id="dtnasc" placeholder="dd/mm/aaaa" style="display:none;" value="">
                                            <div name="dtnasc" id="dtnasc" style="display:none;" class= "input-group-addon">
                                                <span name="dtnasc" id="dtnasc" class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label id="naturalidade" style="display:none;">Naturalidade</label>
                                        <input type="text" name="naturalidade" class="form-control" id="naturalidade" placeholder="Naturalidade" style="display:none;" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab_4">
                            <div style="padding-top:5px;">
                                <form class="form-horizontal" class="form-horizontal"  action="" method="POST">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="exampleInputEmail1">Observação</label>
                                            <textarea name="obs" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_5">
                            
                        </div>
                    </div>
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

    function valor(tipo) {
        if (tipo == "cpf") {
            //Apresentar campo RG
            document.form_dados_pessoais.rg.style.display = "block";
            $('#rg').show();
            //Apresentar campo CPF
            document.form_dados_pessoais.cpf.style.display = "block";
            $('#cpf').show();
            //Apresentar campo Estado civil
            document.form_dados_complementares.ec.style.display = "block";
            $('#ec').show();
            //Apresentar campo Profissão
            document.form_dados_complementares.profissao.style.display = "block";
            $('#profissao').show();
            //Apresentar campo Sexo
            document.form_dados_complementares.sexo.style.display = "block";
            $('#sexo').show();
            //Apresentar campo Data Nascimento
            document.form_dados_complementares.dtnasc.style.display = "block";
            $('#dtnasc').show();
            //Apresentar campo Naturalidade
            document.form_dados_complementares.naturalidade.style.display = "block";
            $('#naturalidade').show();


            //Ocultar campo CNPJ
            document.form_dados_pessoais.cnpj.style.display = "none";
            $('#cnpj').hide();
            $('#cnpj_espaco').hide();
            //Ocultar campo IE
            document.form_dados_pessoais.ie.style.display = "none";
            $('#ie').hide();
            $('#ie_espaco').hide();
            //Ocultar campo IM
            document.form_dados_pessoais.im.style.display = "none";
            $('#im').hide();
            $('#im_espaco').hide();
            //Ocultar campo Código de regime tributário
            document.form_dados_complementares.crt.style.display = "none";
            $('#crt').hide();
            //Ocultar campo Inscrição Suframa
            document.form_dados_complementares.insc_suf.style.display = "none";
            $('#insc_suf').hide();
        }
        if (tipo == "cnpj") {
            //Apresentar campo IE
            document.form_dados_pessoais.ie.style.display = "block";
            $('#ie').show();
            $('#ie_espaco').show();
            //Apresentar campo IM
            document.form_dados_pessoais.im.style.display = "block";
            $('#im').show();
            $('#im_espaco').show();
            //Apresentar campo CNPJ
            document.form_dados_pessoais.cnpj.style.display = "block";
            $('#cnpj').show();
            $('#cnpj_espaco').show();
            //Apresentar campo Código de regime tributário
            document.form_dados_complementares.crt.style.display = "block";
            $('#crt').show();
            //Apresentar campo Inscrição Suframa
            document.form_dados_complementares.insc_suf.style.display = "block";
            $('#insc_suf').show();


            //Ocultar campo CPF
            document.form_dados_pessoais.cpf.style.display = "none";
            $('#cpf').hide();
            //Ocultar campo RG
            document.form_dados_pessoais.rg.style.display = "none";
            $('#rg').hide();
            //Ocultar campo Estado civil
            document.form_dados_complementares.ec.style.display = "none";
            $('#ec').hide();
            //Ocultar campo Profissão
            document.form_dados_complementares.profissao.style.display = "none";
            $('#profissao').hide();
            //Ocultar campo Sexo
            document.form_dados_complementares.sexo.style.display = "none";
            $('#sexo').hide();
            //Ocultar campo Data Nascimento
            document.form_dados_complementares.dtnasc.style.display = "none";
            $('#dtnasc').hide();
            //Ocultar campo Naturalidade
            document.form_dados_complementares.naturalidade.style.display = "none";
            $('#naturalidade').hide();
        }
    }
</script>
<!-- Adicionando Javascript -->
<script type="text/javascript" >

    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");
        //document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);
            //document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";
                //document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    }
    ;
</script>
<script type="text/javascript">
    $('#dtnasc').datepicker({
        format: "dd/mm/yyyy",
        autoclose: 1,
        language: "pt-BR",
        startDate: '+0d',
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        var i = 1;
        $("#add_row").click(function () {
            $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='name" + i + "' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='setor" + i + "' type='text' placeholder='Setor'  class='form-control input-md'></td><td><input  name='email" + i + "' type='email' placeholder='E-mail'  class='form-control input-md'></td><td><input  name='telefone" + i + "' type='text' placeholder='Telefone'  class='form-control input-md'></td><td><input  name='ramal" + i + "' type='text' placeholder='Ramal'  class='form-control input-md'></td>");

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