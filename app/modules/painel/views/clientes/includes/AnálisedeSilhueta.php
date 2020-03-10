<div class="card card-default color-palette-box">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Análise do Tipo Físico
        </h3>
    </div>
<?php error_log(print_r($viewData,1)); ?>
    <div class="col-md-6">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Estatura</label>
                        <select class="form-control select2" style="width: 100%;" name="silhueta[sil_estatura]" id="sil_estatura" aria-hidden="true" required>
                            <option  value="">Selecione</option>
                            <option  value="pequena">pequena</option>
                            <option  value="média">média</option>
                            <option  value="grande">grande</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Altura</label>
                        <select class="form-control select2" style="width: 100%;" name="silhueta[sil_altura]" id="sil_altura" aria-hidden="true" required>
                            <option  value="">Selecione</option>
                            <option  value="baixa">baixa</option>
                            <option  value="média">média</option>
                            <option  value="alta">alta</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ombro x Quadril</label>
                        <select class="form-control select2" style="width: 100%;" name="silhueta[sil_ombro_quadril]" id="sil_ombro_quadril" aria-hidden="true" required>
                            <option  value="">Selecione</option>
                            <option  value="ombros mais estreitos que o quadril">ombros mais estreitos que o quadril</option>
                            <option  value="proporcionais entre si">proporcionais entre si</option>
                            <option  value="ombros mais largos">ombros mais largos</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pescoço</label>
                        <select class="form-control select2" style="width: 100%;" name="silhueta[sil_pescoco]" id="sil_pescoco" aria-hidden="true" required>
                            <option  value="">Selecione</option>
                            <option  value="longo">longo</option>
                            <option  value="curto">curto</option>
                            <option  value="fino">fino</option>
                            <option  value="grosso">grosso</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cintura</h3>
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Em relação ao quadril e aos ombro</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_cintura_quadril_ombro]" id="sil_cintura_quadril_ombro" aria-hidden="true" required>
                                <option  value="">Selecione</option>
                                <option  value="estreitinha / definida">estreitinha / definida</option>
                                <option  value="laterais de torso mais retas">laterais de torso mais retas</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Largura</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_largura]" id="sil_largura" aria-hidden="true" required>
                                <option  value="">Selecione</option>
                                <option  value="abaixo do peso">abaixo do peso</option>
                                <option  value="proporcional">proporcional</option>
                                <option  value="acima do peso">acima do peso</option>
                                <option  value="sobrepeso">baixa</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Peso Visual</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_pesovisual]" id="sil_pesovisual" aria-hidden="true" required>
                                <option  value="">Selecione</option>
                                <option  value="na parte de baixo da silhueta">na parte de baixo da silhueta</option>
                                <option  value="no meio do corpo">no meio do corpo</option>
                                <option  value="na parte de cima">na parte de cima</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pernas x Torso</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_pernas_torso]" id="sil_pernas_torso" aria-hidden="true" required>
                                <option  value="">Selecione</option>
                                <option  value="pernas curtas">pernas curtas</option>
                                <option  value="proporcional">proporcional</option>
                                <option  value="pernas longas">pernas longas</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Formas</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_formas]" id="sil_formas" aria-hidden="true" required>
                                <option  value="">Selecione</option>
                                <option  value="mais arredondadas">mais arredondadas</option>
                                <option  value="mais angulares">mais angulares</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Em Relação ao gancho e aos ombros</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_cintura_gancho_ombro]" id="sil_cintura_gancho_ombro" aria-hidden="true" required>
                                <option  value="">Selecione</option>

                                <option  value="alta">alta</option>
                                <option  value="proporcional">proporcional</option>
                                <option  value="baixa">baixa</option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Como você se sente em relação ao seu(s)</h3>
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Seios</label>
                            <input type="text" class="form-control" name="silhueta[sil_seios]" id="sil_seios" placeholder="Resposta" value="">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Bumbum</label>
                            <input type="text" class="form-control" name="silhueta[sil_bumbum]" id="sil_bumbum" placeholder="Resposta" value="">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pernas</label>
                            <input type="text" class="form-control" name="silhueta[sil_pernas]" id="sil_pernas" placeholder="Resposta" value="">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Quadril</label>
                            <input type="text" class="form-control" name="silhueta[sil_quadril]" id="sil_quadril" placeholder="Resposta" value="">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Braços</label>
                            <input type="text" class="form-control" name="silhueta[sil_bracos]" id="sil_bracos" placeholder="Resposta" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tamanhos que a cliente constuma usar</h3>
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tamanho de partes de cima</label>
                            <input type="text" class="form-control" name="silhueta[sil_tamanho_cima]" id="sil_tamanho_cima" placeholder="Resposta" value="">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tamanho de partes de baixo</label>
                            <input type="text" class="form-control" name="silhueta[sil_tamanho_baixo]" id="sil_tamanho_baixo" placeholder="Resposta" value="">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tamanho dos Sapatos</label>
                            <input type="text" class="form-control" name="silhueta[sil_tamanho_sapatos]" id="sil_tamanho_sapatos" placeholder="Resposta" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Biotipo</h3>
                </div>

                <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_biotipo]" id="sil_biotipo" aria-hidden="true" required>
                                <option  value="">Selecione</option>
                                <option  value="ampulheta">ampulheta</option>
                                <option  value="retangular">retangular</option>
                                <option  value="triângular / triângulo invertido">triângular / triângulo invertido</option>
                                <option  value="oval">oval</option>
                                <option  value="pêra / triângulo ">pêra / triângulo </option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Observações</label>
                <textarea class="form-control" name="silhueta[observacoes]" id="observacoes"> </textarea>
            </div>
        </div>
    </div>
</div>

