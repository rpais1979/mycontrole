<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Funcionario
            <small>Novos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/funcionario">Funcionario</a></li>
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
                                    <h3 class="box-title">Dados Gerais</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label for="desperson">Tipo de Funcionario</label>
                                            <select id="tipo_pessoa" class="form-control" name="tipo_pessoa" onchange="valor(this.value);">
                                                <option value="cnpj">Pessoa jurídica</option>
                                                <option value="cpf">Pessoa física</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-2">
                                            <label for="desperson">Status</label>
                                            <select id="tipo_pessoa" class="form-control" name="tipo_pessoa">
                                                <option value="0">Inativo</option>
                                                <option value="1">Ativo</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-7">
                                            <label id="desnome" style="display:none;">Nome</label>
                                            <input type="text" name="desnome" class="form-control" placeholder="Nome" style="display:none;">
                                        </div>
                                        <div class="col-xs-3">
                                            <label id="desnomefantasia" style="display:none;">Nome Fantasia</label>
                                            <input type="text" name="desnomefantasia" class="form-control" placeholder="Nome Fantasia" style="display:none;">
                                        </div>
                                        <div class="col-xs-4">
                                            <label id="desrazaosocial" style="display:none;">Razão Social</label>
                                            <input type="text" name="desrazaosocial" class="form-control" placeholder="Razão Social" style="display:none;">
                                        </div>
                                    </div>
                                    <div style="padding-top:10px;"></div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label id="descnpj" style="display:none;">CNPJ</label>
                                            <input type="text" name="descnpj" class="form-control" placeholder="CNPJ" style="display:none;">
                                            <label id="descpf" style="display:none;">CPF</label>
                                            <input type="text" name="descpf" class="form-control" placeholder="CPF" style="display:none;">
                                        </div>
                                        <div class="col-xs-3">
                                            <label id="desie" style="display:none;">Inscrição Estadual</label>
                                            <input type="text" name="desie" class="form-control" placeholder="Inscrição Estadual" style="display:none;">
                                            <label id="desrg" style="display:none;">RG</label>
                                            <input type="text" name="desrg" class="form-control" placeholder="RG" style="display:none;">
                                        </div>
                                        <div class="col-xs-3">
                                            <label id="desim" style="display:none;">Inscrição Municipal</label>
                                            <input type="text" name="desim" class="form-control" placeholder="Inscrição Municipal" style="display:none;">
                                            <div id="dtnascimento" style="display:none;" class="form-group">
                                                <label id="dtnascimento">Data de Nascimento</label>
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input name="dtnascimento" type="text" class="form-control pull-right" id="dtnascimento" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <!-- /.input group -->

                                            <!-- <label id="dtnascimento" style="display:none;">Data de Nascimento</label>
                                            <input type="text" name="dtnascimento" id="dtnascimento" class="form-control" placeholder="Data de Nascimento" style="display:none;"> -->
                                        </div>
                                        <div class="col-xs-3">
                                            <label id="descontribuinte" style="display:none;">Tipo de Contribuinte</label>
                                            <select id="descontribuinte" class="form-control" name="descontribuinte" style="display:none;">
                                                <option value="">Selecione...</option>
                                                <option value="1">Não Informado</option>
                                                <option value="2">Contribuinte ICMS</option>
                                                <option value="3">Contribuinte isente de Incrição no cadastro de Contribuintes do ICMS</option>
                                                <option value="4">Não Contribuinte, que pode ou não possuir Incrição Estadual no Cadastro de </option>
                                            </select>
                                            <label id="desemail" style="display:none;">E-mail</label>
                                            <input type="text" name="desemail" class="form-control" placeholder="E-mail" style="display:none;">
                                        </div>
                                    </div>  
                                    <!--  <div style="padding-top:2px;"></div> -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label id="desestadocivil" style="display:none;">Estado civil</label>
                                            <select id="desestadocivil" class="form-control" name="desestadocivil" style="display:none;">
                                                <option value="">Selecione...</option>
                                                <option value="1">Casado</option>
                                                <option value="2">Solteiro</option>
                                                <option value="3">Viúvo</option>
                                                <option value="4">Separado</option>
                                                <option value="5">Desquitado</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label id="dessexo" style="display:none;">Sexo</label>
                                            <select class="form-control" name="dessexo" style="display:none;">
                                                <option value="">Selecione...</option>
                                                <option value="1">Feminino</option>
                                                <option value="2">Masculino</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label id="desprofissao" style="display:none;">Profissão</label>
                                            <input type="text" name="desprofissao" class="form-control" id="desprofissao" placeholder="Profissão" style="display:none;" value="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label id="desnaturalidade" style="display:none;">Naturalidade</label>
                                            <input type="text" name="desnaturalidade" class="form-control" id="desnaturalidade" placeholder="Naturalidade" style="display:none;" value="">
                                        </div>
                                    </div>
                                    <div style="padding-top:10px;"></div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="destelcomercial">Telefone Comercial</label>
                                            <input type="text" class="form-control" placeholder="Telefone Comercial">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="descelutar">Telefone Celular</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">E-mail</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="dessite">Site</label>
                                            <input type="text" class="form-control" placeholder="Site">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form class="form-horizontal" name="form_dados_transportador_novos" action="" method="POST">
                                <div class="box box-primary box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Endereço</h3>
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
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
                                        <div class="row">
                                            <div style="padding-top:10px;"></div>
                                            <div class="col-sm-3">
                                                <label for="exampleInputEmail1">Bairro</label>
                                                <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" value="">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="exampleInputEmail1">Município</label>
                                                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Município" value="">
                                            </div>
                                            <div class="col-sm-2">
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
                                    </div>
                                </div>
                                <div class="box box-primary box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Pessoas de contato</h3>
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <form class="form-horizontal" name="form_dados_Transportador_contato" id="contato">
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
                                    </div>
                                </div>
                                <div class="box box-primary box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Observação</h3>
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <textarea name="desobs" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div style="padding-top:10px;"></div> -->
                            </form>
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
        valor('cnpj');
    });

    function valor(tipo) {
        if (tipo == "cpf") {
            //Apresentar campo Nome
            document.form_dados_transportador_novos.desnome.style.display = "block";
            $('#desnome').show();
            //Apresentar campo Nome
            document.form_dados_transportador_novos.descpf.style.display = "block";
            $('#descpf').show();
            //Apresentar campo Nome
            document.form_dados_transportador_novos.desrg.style.display = "block";
            $('#desrg').show();
            //Apresentar campo Nome
            document.form_dados_transportador_novos.dtnascimento.style.display = "block";
            $('#dtnascimento').show();
            //Apresentar campo Nome
            document.form_dados_transportador_novos.desemail.style.display = "block";
            $('#desemail').show();
            //Apresentar campo Nome
            document.form_dados_transportador_novos.desestadocivil.style.display = "block";
            $('#desestadocivil').show();
            //Apresentar campo Nome
            document.form_dados_transportador_novos.desprofissao.style.display = "block";
            $('#desprofissao').show();
            //Apresentar campo Nome
            document.form_dados_transportador_novos.dessexo.style.display = "block";
            $('#dessexo').show();
            //Oculta campo Nome
            document.form_dados_transportador_novos.desnaturalidade.style.display = "block";
            $('#desnaturalidade').show();



            //Oculta campo Nome Fantasia
            document.form_dados_transportador_novos.desnomefantasia.style.display = "none";
            $('#desnomefantasia').hide();
            //Apresentar campo Nome Fantasia
            document.form_dados_transportador_novos.desrazaosocial.style.display = "none";
            $('#desrazaosocial').hide();
            //Oculta campo Nome Fantasia
            document.form_dados_transportador_novos.descnpj.style.display = "none";
            $('#descnpj').hide();
            //Oculta campo Nome Fantasia
            document.form_dados_transportador_novos.desie.style.display = "none";
            $('#desie').hide();
            //Oculta campo Nome Fantasia
            document.form_dados_transportador_novos.desim.style.display = "none";
            $('#desim').hide();
            //Oculta campo Nome Fantasia
            document.form_dados_transportador_novos.descontribuinte.style.display = "none";
            $('#descontribuinte').hide();

        }

        if (tipo == "cnpj") {
            //Apresentar campo Nome Fantasia
            document.form_dados_transportador_novos.desnomefantasia.style.display = "block";
            $('#desnomefantasia').show();
            //Apresentar campo Nome Fantasia
            document.form_dados_transportador_novos.desrazaosocial.style.display = "block";
            $('#desrazaosocial').show();
            //Apresentar campo Nome Fantasia
            document.form_dados_transportador_novos.descnpj.style.display = "block";
            $('#descnpj').show();
            //Apresentar campo Nome Fantasia
            document.form_dados_transportador_novos.desie.style.display = "block";
            $('#desie').show();
            //Apresentar campo Nome Fantasia
            document.form_dados_transportador_novos.desim.style.display = "block";
            $('#desim').show();
            //Apresentar campo Nome Fantasia
            document.form_dados_transportador_novos.descontribuinte.style.display = "block";
            $('#descontribuinte').show();


            //Oculta campo Nome
            document.form_dados_transportador_novos.desnome.style.display = "none";
            $('#desnome').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.desnome.style.display = "none";
            $('#desnome').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.descpf.style.display = "none";
            $('#descpf').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.desrg.style.display = "none";
            $('#desrg').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.dtnascimento.style.display = "none";
            $('#dtnascimento').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.desemail.style.display = "none";
            $('#desemail').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.desestadocivil.style.display = "none";
            $('#desestadocivil').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.desprofissao.style.display = "none";
            $('#desprofissao').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.dessexo.style.display = "none";
            $('#dessexo').hide();
            //Oculta campo Nome
            document.form_dados_transportador_novos.desnaturalidade.style.display = "none";
            $('#desnaturalidade').hide();

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
<!-- <script type="text/javascript">
    $('#dtnascimento').datepicker({
        format: "dd/mm/yyyy",
        autoclose: 1,
        language: "pt-BR",
        startDate: '+0d',
    });
</script> -->
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
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'})
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
        )

        //Date picker
        $('#dtnascimento').datepicker({
            format: "dd/mm/yyyy",
            autoclose: 1,
            language: "pt-BR",
            startDate: '+0d',
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>