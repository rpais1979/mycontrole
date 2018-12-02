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
                        <form class="form-horizontal" name="form_vendas" action="" method="POST">
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
                                        <div class="col-sm-8">
                                            <label for="descelutar">Nome / Razão Social</label>
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-info btn-solid" data-toggle="tooltip" data-placement="top" title="Localizar"><i class="fa  fa-search"></i></button>
                                                    <button type="button" onclick="ocultarExibir()" class="btn btn-info btn-flat" data-toggle="tooltip" data-placement="top" title="Cadastrar"><i class="fa fa-user"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="descelutar">Vendedor</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                    </div>
                                    <div id="cad_cli_1" style="display:none" class="form-group">
                                        <div class="col-xs-3">
                                            <label for="desperson">Tipo de Cliente</label>
                                            <select id="tipo_pessoa" class="form-control" name="tipo_pessoa" onchange="valor(this.value);">
                                                <option value="cnpj">Pessoa jurídica</option>
                                                <option value="cpf">Pessoa física</option>
                                            </select>
                                        </div>
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
                                            <label id="descontribuinte" style="display:none;">Tipo de Contribuinte</label>
                                            <select id="descontribuinte" class="form-control" name="descontribuinte" style="display:none;">
                                                <option value="">Selecione...</option>
                                                <option value="1">Não Informado</option>
                                                <option value="2">Contribuinte ICMS</option>
                                                <option value="3">Contribuinte isente de Incrição no cadastro de Contribuintes do ICMS</option>
                                                <option value="4">Não Contribuinte, que pode ou não possuir Incrição Estadual no Cadastro de </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="cad_cli_2" style="display:none" class="form-group">
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
                                    <div id="cad_cli_3" style="display:none" class="form-group">
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
                                    <div id="cad_cli_4" style="display:none" class="form-group">
                                        <div class="col-sm-3">
                                            <label for="descelutar">Telefone</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="descelutar">Celular</label>
                                            <input type="text" class="form-control" placeholder="Telefone Celular">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="descelutar">E-mail</label>
                                            <input type="email" class="form-control" placeholder="Telefone Celular">
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
                                            <th class="text-center" style="width: 10px">#</th>
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
                                        <div class="col-sm-2">
                                            <label for="exampleInputEmail1">Local da Venda</label>
                                            <select class="form-control" name="ocorrencia_id">
                                                <option value="">Selecione...</option>
                                                <option>Única</option>
                                                <option>Mensal</option>
                                                <option>Parcelada</option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Única ou recorrente</small>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="desemail">Nº do pedido</label>
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
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
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Forma de Pagamento</label>
                                            <select class="form-control" name="ocorrencia_id">
                                                <option value="">Selecione...</option>
                                                <option>Única</option>
                                                <option>Mensal</option>
                                                <option>Parcelada</option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Única ou recorrente</small>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Condição de pagamento</label>
                                            <select class="form-control" name="ocorrencia_id">
                                                <option value="">Selecione...</option>
                                                <option>Única</option>
                                                <option>Mensal</option>
                                                <option>Parcelada</option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Única ou recorrente</small>
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Categoria</label>
                                            <select class="form-control" name="ocorrencia_id">
                                                <option value="">Selecione...</option>
                                                <option>Única</option>
                                                <option>Mensal</option>
                                                <option>Parcelada</option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Única ou recorrente</small>
                                        </div>
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
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">Forma de envio</label>
                                            <select class="form-control" name="ocorrencia_id">
                                                <option value="">Selecione...</option>
                                                <option>Correios</option>
                                                <option>Transportadora</option>
                                                <option>Motoboy</option>
                                                <option>Cliente Retira</option>
                                            </select>
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
                                        <div class="col-sm-12">
                                            <label for="exampleInputEmail1">Observações do Pedido</label>
                                            <textarea name="obs" class="form-control"></textarea>
                                            <small id="emailHelp" class="form-text text-muted">Esta informação será impressa na venda e transferida para as observações da nota.</small>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="exampleInputEmail1">Obeservações Internas</label>
                                            <textarea name="obs" class="form-control"></textarea>
                                            <small id="emailHelp" class="form-text text-muted">Esta informação é de uso interno, portando não será impressa ou visivel ao cliente.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    $(document).ready(function () {
        valor('cnpj');
    });

    function valor(tipo) {
        if (tipo == "cpf") {
            //Apresentar campo Nome
            document.form_vendas.descpf.style.display = "block";
            $('#descpf').show();
            //Apresentar campo Nome
            document.form_vendas.desrg.style.display = "block";
            $('#desrg').show();

            //Oculta campo Nome Fantasia
            document.form_vendas.descnpj.style.display = "none";
            $('#descnpj').hide();
            //Oculta campo Nome Fantasia
            document.form_vendas.desie.style.display = "none";
            $('#desie').hide();
            //Oculta campo Nome Fantasia
            document.form_vendas.descontribuinte.style.display = "none";
            $('#descontribuinte').hide();

        }

        if (tipo == "cnpj") {
            //Apresentar campo Nome Fantasia
            document.form_vendas.descnpj.style.display = "block";
            $('#descnpj').show();
            //Apresentar campo Nome Fantasia
            document.form_vendas.desie.style.display = "block";
            $('#desie').show();
            //Apresentar campo Nome Fantasia
            document.form_vendas.descontribuinte.style.display = "block";
            $('#descontribuinte').show();

            //Oculta campo Nome
            document.form_vendas.descpf.style.display = "none";
            $('#descpf').hide();
            //Oculta campo Nome
            document.form_vendas.desrg.style.display = "none";
            $('#desrg').hide();

        }
    }
</script>
<script type="text/javascript">

var visibilidade = true; //Variável que vai manipular o botão Exibir/ocultar
 
function ocultarExibir() { // Quando clicar no botão.
 
    if (visibilidade) {//Se a variável visibilidade for igual a true, então...
        document.getElementById("cad_cli_1").style.display = "none";//Ocultamos a div
        visibilidade = false;//alteramos o valor da variável para falso.
        document.getElementById("cad_cli_2").style.display = "none";//Ocultamos a div
        visibilidade = false;//alteramos o valor da variável para falso.
        document.getElementById("cad_cli_3").style.display = "none";//Ocultamos a div
        visibilidade = false;//alteramos o valor da variável para falso.
        document.getElementById("cad_cli_4").style.display = "none";//Ocultamos a div
        visibilidade = false;//alteramos o valor da variável para falso.
    } else {//ou se a variável estiver com o valor false..
        document.getElementById("cad_cli_1").style.display = "block";//Exibimos a div..
        visibilidade = true;//Alteramos o valor da variável para true.
        document.getElementById("cad_cli_2").style.display = "block";//Exibimos a div..
        visibilidade = true;//Alteramos o valor da variável para true.
        document.getElementById("cad_cli_3").style.display = "block";//Exibimos a div..
        visibilidade = true;//Alteramos o valor da variável para true.
        document.getElementById("cad_cli_4").style.display = "block";//Exibimos a div..
        visibilidade = true;//Alteramos o valor da variável para true.
        
    }
}
</script>