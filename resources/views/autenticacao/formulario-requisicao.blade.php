@extends('layouts.app')

@section('conteudo')
@section('navbar')
    Home
@endsection
<div class="container" style="width: 100rem;margin-left: 200px;">
        <div class="col-md-8">
            <div class="card" style="width: 70rem;">
                <div class="card-header" align="center">{{ __('Solicitar Documentos') }}</div>
                  <div class="card-body">
                      <form method="GET" action={{ route('confirmacao-requisicao') }} enctype="multipart/form-data" id="formRequisicao">
                              <div class="form-group row justify-content-center"></div>  <!-- COMPROVANTE DE MATRICULA / COMPROVANTE DE VINCULO / HISTORICO-->

                                  <input type="checkbox" name="Declaracao de Vinculo" value="Declaracao de Vinculo" id="declaracaoVinculo"> Declaração de Vínculo</br>

                                  <input type="checkbox" name="Comprovante de Matricula" value="Comprovante de Matricula" id="comprovanteMatricula">Comprovante de matricula</br>

                                  <input type="checkbox" name="Histórico" value="Histórico" id="historico"> Histórico</br>

                                  <input type="checkbox" name="Programa de Disciplina" value="Programa de Disciplina" id="programaDisciplina" onclick="checaSelecaoProgramaDisciplina()"> Programa de Disciplina</br>

                                          <textarea form ="formRequisicao" style="display:none" name=""name="requisicaoPrograma" cols="100" id="textareaProgramaDisciplina"></textarea>

                                  <input type="checkbox" name="Outros" value="Outros" id="outros" onclick="checaSelecaoOutros()"> Outros<br>

                                          <textarea form ="formRequisicao" style="display:none" name="requisicaoOutros" id="textareaOutrosDocumentos" cols="100" ></textarea>

                              <!-- </label> -->
                                  </div>
                                    <div class="form-group row mb-0">
                                      <div class="col-md-8 offset-md-4">
                                        <button type="submit"class="btn btn-primary btn-primary-lmts" route=('confirmacao_requisicao')>
                                        {{ __('Finalizar') }}
                                      </button>
                                      <button type="cancel" class="btn btn-primary btn-primary-lmts" route=('home-aluno')>
                                        {{ __('Cancelar') }}
                                      </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
       </div>
<script>
function checaSelecaoProgramaDisciplina() {
  var checkBoxPrograma = document.getElementById("programaDisciplina");
  var textareaProgramaDisciplina = document.getElementById("textareaProgramaDisciplina");
  if (checkBoxPrograma.checked == true){
    textareaProgramaDisciplina.style.display = "block";
  } else {
    textareaProgramaDisciplina.style.display = "none";
  }
}

function checaSelecaoOutros() {
  var checkBoxOutros = document.getElementById("outros");
  var textareaOutrosDocumentos = document.getElementById("textareaOutrosDocumentos");
  if (checkBoxOutros.checked == true){
    textareaOutrosDocumentos.style.display = "block";
  } else {
    textareaOutrosDocumentos.style.display = "none";
  }
}
</script>
@endsection