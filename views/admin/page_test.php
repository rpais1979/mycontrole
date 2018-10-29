<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="education_fields">
                </div>
                <div class="col-sm-3 nopadding">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nome_contato" name="nome_contato[]" value="" placeholder="School name">
                    </div>
                </div>
                <div class="col-sm-3 nopadding">
                    <div class="form-group">
                        <input type="text" class="form-control" id="setor_contato" name="setor_contato[]" value="" placeholder="setor_contato">
                    </div>
                </div>
                <div class="col-sm-3 nopadding">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email_contato" name="email_contato[]" value="" placeholder="email_contato">
                    </div>
                </div>

                <div class="col-sm-3 nopadding">
                    <div class="form-group">
                        <input type="text" class="form-control" id="telefone_contato" name="telefone_contato[]" value="" placeholder="email_contato">
                    </div>
                </div>

                <div class="col-sm-3 nopadding">
                    <div class="form-group">
                        <div class="input-group">
                            <select class="form-control" id="educationDate" name="educationDate[]">

                                <option value="">Date</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                            </select>
                            <div class="input-group-btn">
                                <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    var room = 1;
    function education_fields() {

        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="nome_contato" name="nome_contato[]" value="" placeholder="School name"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="setor_contato" name="setor_contato[]" value="" placeholder="setor_contato"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="email_contato" name="email_contato[]" value="" placeholder="email_contato"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="telefone_contato" name="telefone_contato[]" value="" placeholder="setor_contato"></div></div> <select class="form-control" id="educationDate" name="educationDate[]"><option value="">Date</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option> </select><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';

        objTo.appendChild(divtest)
    }
    function remove_education_fields(rid) {
        $('.removeclass' + rid).remove();
    }
</script>


<div class="form-group">
                                        <div class="col-sm-3 nopadding">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" name='nome_contato' class="form-control" id="nome_contato" placeholder="Nome Contato" value="">
                                        </div>
                                        <div class="col-sm-2 nopadding">
                                            <label for="exampleInputEmail1">Setor</label>
                                            <input type="text" name='setor_contato' class="form-control" id="setor_contato" placeholder="Setor" value="">
                                        </div>
                                        <div class="col-sm-2 nopadding">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" name='email_contato' class="form-control" id="email_contato" placeholder="E-mail" value="">
                                        </div>
                                        <div class="col-sm-2 nopadding">
                                            <label for="exampleInputEmail1">Telefone</label>
                                            <input type="text" name='telefone_contato' class="form-control" id="telefone_contato" placeholder="Telefone" value="">
                                        </div>
                                        <div class="col-sm-2 nopadding">
                                            <label for="exampleInputEmail1">Ramal</label>
                                            <input type="text" name='ramal' class="form-control" id="ramal" placeholder="Ramal" value="">
                                        </div>
                                        <div class="col-sm-1">
                                            <button class="btn btn-success" type="button"  onclick="dados_pessoais();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                        </div>
                                    </div>





<div class="form-group">
                                        <div class="col-sm-3 nopadding">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" name='nome_contato' class="form-control" id="nome_contato" placeholder="Nome Contato" value="">
                                        </div>
                                        <div class="col-sm-2 nopadding">
                                            <label for="exampleInputEmail1">Setor</label>
                                            <input type="text" name='setor_contato' class="form-control" id="setor_contato" placeholder="Setor" value="">
                                        </div>
                                        <div class="col-sm-2 nopadding">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" name='email_contato' class="form-control" id="email_contato" placeholder="E-mail" value="">
                                        </div>
                                        <div class="col-sm-2 nopadding">
                                            <label for="exampleInputEmail1">Telefone</label>
                                            <input type="text" name='telefone_contato' class="form-control" id="telefone_contato" placeholder="Telefone" value="">
                                        </div>
                                        <div class="col-sm-2 nopadding">
                                            <label for="exampleInputEmail1">Ramal</label>
                                            <input type="text" name='ramal' class="form-control" id="ramal" placeholder="Ramal" value="">
                                        </div>
                                    </div>