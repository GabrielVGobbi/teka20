<div class="card card-default color-palette-box">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Análise do Tipo Físico
        </h3>
    </div>
    <div class="col-md-6">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Estatura</label>
                        <select class="form-control select2" style="width: 100%;" name="silhueta[sil_estatura]" id="sil_estatura" aria-hidden="true" required>
                            <option <?php echo isset($tableInfo['silhueta']['sil_estatura']) && $tableInfo['silhueta']['sil_estatura'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_estatura']) && $tableInfo['silhueta']['sil_estatura'] == 'pequena' ? 'selected' : '' ?> value="pequena">pequena</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_estatura']) && $tableInfo['silhueta']['sil_estatura'] == 'média' ? 'selected' : '' ?> value="média">média</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_estatura']) && $tableInfo['silhueta']['sil_estatura'] == 'grande' ? 'selected' : '' ?> value="grande">grande</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Altura</label>
                        <select class="form-control select2" style="width: 100%;" name="silhueta[sil_altura]" id="sil_altura" aria-hidden="true" required>
                            <option <?php echo isset($tableInfo['silhueta']['sil_altura']) && $tableInfo['silhueta']['sil_altura'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_altura']) && $tableInfo['silhueta']['sil_altura'] == 'baixa' ? 'selected' : '' ?> value="baixa">baixa</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_altura']) && $tableInfo['silhueta']['sil_altura'] == 'média' ? 'selected' : '' ?> value="média">média</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_altura']) && $tableInfo['silhueta']['sil_altura'] == 'alta' ? 'selected' : '' ?> value="alta">alta</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ombro x Quadril</label>
                        <select class="form-control select2" style="width: 100%;" name="silhueta[sil_ombro_quadril]" id="sil_ombro_quadril" aria-hidden="true" required>
                            <option <?php echo isset($tableInfo['silhueta']['sil_ombro_quadril']) && $tableInfo['silhueta']['sil_ombro_quadril'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_ombro_quadril']) && $tableInfo['silhueta']['sil_ombro_quadril'] == 'ombros mais estreitos que o quadril' ? 'selected' : '' ?> value="ombros mais estreitos que o quadril">ombros mais estreitos que o quadril</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_ombro_quadril']) && $tableInfo['silhueta']['sil_ombro_quadril'] == 'proporcionais entre si' ? 'selected' : '' ?> value="proporcionais entre si">proporcionais entre si</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_ombro_quadril']) && $tableInfo['silhueta']['sil_ombro_quadril'] == 'ombros mais largos' ? 'selected' : '' ?> value="ombros mais largos">ombros mais largos</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pescoço</label>
                        <select class="form-control select2" style="width: 100%;" name="silhueta[sil_pescoco]" id="sil_pescoco" aria-hidden="true" required>
                            <option <?php echo isset($tableInfo['silhueta']['sil_pescoco']) && $tableInfo['silhueta']['sil_pescoco'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_pescoco']) && $tableInfo['silhueta']['sil_pescoco'] == 'longo' ? 'selected' : '' ?> value="longo">longo</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_pescoco']) && $tableInfo['silhueta']['sil_pescoco'] == 'curto' ? 'selected' : '' ?> value="curto">curto</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_pescoco']) && $tableInfo['silhueta']['sil_pescoco'] == 'fino' ? 'selected' : '' ?> value="fino">fino</option>
                            <option <?php echo isset($tableInfo['silhueta']['sil_pescoco']) && $tableInfo['silhueta']['sil_pescoco'] == 'grosso' ? 'selected' : '' ?> value="grosso">grosso</option>
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
                                <option <?php echo isset($tableInfo['silhueta']['sil_cintura_quadril_ombro']) && $tableInfo['silhueta']['sil_cintura_quadril_ombro'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_cintura_quadril_ombro']) && $tableInfo['silhueta']['sil_cintura_quadril_ombro'] == 'estreitinha / definida' ? 'selected' : '' ?> value="estreitinha / definida">estreitinha / definida</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_cintura_quadril_ombro']) && $tableInfo['silhueta']['sil_cintura_quadril_ombro'] == 'laterais de torso mais retas' ? 'selected' : '' ?> value="laterais de torso mais retas">laterais de torso mais retas</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Largura</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_largura]" id="sil_largura" aria-hidden="true" required>
                                <option <?php echo isset($tableInfo['silhueta']['sil_largura']) && $tableInfo['silhueta']['sil_largura'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_largura']) && $tableInfo['silhueta']['sil_largura'] == 'abaixo do peso' ? 'selected' : '' ?> value="abaixo do peso">abaixo do peso</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_largura']) && $tableInfo['silhueta']['sil_largura'] == 'proporcional' ? 'selected' : '' ?> value="proporcional">proporcional</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_largura']) && $tableInfo['silhueta']['sil_largura'] == 'acima do peso' ? 'selected' : '' ?> value="acima do peso">acima do peso</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_largura']) && $tableInfo['silhueta']['sil_largura'] == 'sobrepeso' ? 'selected' : '' ?> value="sobrepeso">baixa</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Peso Visual</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_pesovisual]" id="sil_pesovisual" aria-hidden="true" required>
                                <option <?php echo isset($tableInfo['silhueta']['sil_pesovisual']) && $tableInfo['silhueta']['sil_pesovisual'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_pesovisual']) && $tableInfo['silhueta']['sil_pesovisual'] == 'na parte de baixo da silhueta' ? 'selected' : '' ?> value="na parte de baixo da silhueta">na parte de baixo da silhueta</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_pesovisual']) && $tableInfo['silhueta']['sil_pesovisual'] == 'no meio do corpo' ? 'selected' : '' ?> value="no meio do corpo">no meio do corpo</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_pesovisual']) && $tableInfo['silhueta']['sil_pesovisual'] == 'na parte de cima' ? 'selected' : '' ?> value="na parte de cima">na parte de cima</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pernas x Torso</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_pernas_torso]" id="sil_pernas_torso" aria-hidden="true" required>
                                <option <?php echo isset($tableInfo['silhueta']['sil_pernas_torso']) && $tableInfo['silhueta']['sil_pernas_torso'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_pernas_torso']) && $tableInfo['silhueta']['sil_pernas_torso'] == 'pernas curtas' ? 'selected' : '' ?> value="pernas curtas">pernas curtas</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_pernas_torso']) && $tableInfo['silhueta']['sil_pernas_torso'] == 'proporcional' ? 'selected' : '' ?> value="proporcional">proporcional</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_pernas_torso']) && $tableInfo['silhueta']['sil_pernas_torso'] == 'pernas longas' ? 'selected' : '' ?> value="pernas longas">pernas longas</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Formas</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_formas]" id="sil_formas" aria-hidden="true" required>
                                <option <?php echo isset($tableInfo['silhueta']['sil_formas']) && $tableInfo['silhueta']['sil_formas'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_formas']) && $tableInfo['silhueta']['sil_formas'] == 'mais arredondadas' ? 'selected' : '' ?> value="mais arredondadas">mais arredondadas</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_formas']) && $tableInfo['silhueta']['sil_formas'] == 'mais angulares' ? 'selected' : '' ?> value="mais angulares">mais angulares</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Em Relação ao gancho e aos ombros</label>
                            <select class="form-control select2" style="width: 100%;" name="silhueta[sil_cintura_gancho_ombro]" id="sil_cintura_gancho_ombro" aria-hidden="true" required>
                                <option <?php echo isset($tableInfo['silhueta']['sil_cintura_gancho_ombro']) && $tableInfo['silhueta']['sil_cintura_gancho_ombro'] == '' ? 'selected' : '' ?> value="">Selecione</option>

                                <option <?php echo isset($tableInfo['silhueta']['sil_cintura_gancho_ombro']) && $tableInfo['silhueta']['sil_cintura_gancho_ombro'] == 'alta' ? 'selected' : '' ?> value="alta">alta</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_cintura_gancho_ombro']) && $tableInfo['silhueta']['sil_cintura_gancho_ombro'] == 'proporcional' ? 'selected' : '' ?> value="proporcional">proporcional</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_cintura_gancho_ombro']) && $tableInfo['silhueta']['sil_cintura_gancho_ombro'] == 'baixa' ? 'selected' : '' ?> value="baixa">baixa</option>

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
                            <input type="text" class="form-control" name="silhueta[sil_seios]" id="sil_seios" placeholder="Resposta" value="<?php echo isset($tableInfo['silhueta']['sil_seios'])  ? $tableInfo['silhueta']['sil_seios'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Bumbum</label>
                            <input type="text" class="form-control" name="silhueta[sil_bumbum]" id="sil_bumbum" placeholder="Resposta" value="<?php echo isset($tableInfo['silhueta']['sil_bumbum'])  ? $tableInfo['silhueta']['sil_bumbum'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pernas</label>
                            <input type="text" class="form-control" name="silhueta[sil_pernas]" id="sil_pernas" placeholder="Resposta" value="<?php echo isset($tableInfo['silhueta']['sil_pernas'])  ? $tableInfo['silhueta']['sil_pernas'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Quadril</label>
                            <input type="text" class="form-control" name="silhueta[sil_quadril]" id="sil_quadril" placeholder="Resposta" value="<?php echo isset($tableInfo['silhueta']['sil_quadril'])  ? $tableInfo['silhueta']['sil_quadril'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Braços</label>
                            <input type="text" class="form-control" name="silhueta[sil_bracos]" id="sil_bracos" placeholder="Resposta" value="<?php echo isset($tableInfo['silhueta']['sil_bracos'])  ? $tableInfo['silhueta']['sil_bracos'] : '' ?>">
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
                            <input type="text" class="form-control" name="silhueta[sil_tamanho_cima]" id="sil_tamanho_cima" placeholder="Resposta" value="<?php echo isset($tableInfo['silhueta']['sil_tamanho_cima'])  ? $tableInfo['silhueta']['sil_tamanho_cima'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tamanho de partes de baixo</label>
                            <input type="text" class="form-control" name="silhueta[sil_tamanho_baixo]" id="sil_tamanho_baixo" placeholder="Resposta" value="<?php echo isset($tableInfo['silhueta']['sil_tamanho_baixo'])  ? $tableInfo['silhueta']['sil_tamanho_baixo'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tamanho dos Sapatos</label>
                            <input type="text" class="form-control" name="silhueta[sil_tamanho_sapatos]" id="sil_tamanho_sapatos" placeholder="Resposta" value="<?php echo isset($tableInfo['silhueta']['sil_tamanho_sapatos'])  ? $tableInfo['silhueta']['sil_tamanho_sapatos'] : '' ?>">
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
                                <option <?php echo isset($tableInfo['silhueta']['sil_biotipo']) && $tableInfo['silhueta']['sil_biotipo'] == '' ? 'selected' : '' ?> value="">Selecione</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_biotipo']) && $tableInfo['silhueta']['sil_biotipo'] == 'ampulheta' ? 'selected' : '' ?> value="ampulheta">ampulheta</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_biotipo']) && $tableInfo['silhueta']['sil_biotipo'] == 'retangular' ? 'selected' : '' ?> value="retangular">retangular</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_biotipo']) && $tableInfo['silhueta']['sil_biotipo'] == 'triângular / triângulo invertido' ? 'selected' : '' ?> value="triângular / triângulo invertido">triângular / triângulo invertido</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_biotipo']) && $tableInfo['silhueta']['sil_biotipo'] == 'oval' ? 'selected' : '' ?> value="oval">oval</option>
                                <option <?php echo isset($tableInfo['silhueta']['sil_biotipo']) && $tableInfo['silhueta']['sil_biotipo'] == 'pêra / triângulo' ? 'selected' : '' ?> value="pêra / triângulo">pêra / triângulo </option>

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Observações</label>
                <textarea class="form-control" name="silhueta[observacoes]" id="observacoes"> <?php echo isset($tableInfo['silhueta']['observacoes'])  ? $tableInfo['silhueta']['observacoes'] : '' ?> </textarea>
            </div>
        </div>
    </div>
</div>

