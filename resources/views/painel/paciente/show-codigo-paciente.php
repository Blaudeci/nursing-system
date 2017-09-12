
				<div class="row">
					
				</div>
				<div class="row">
					
				</div>
				
				
				
				
				
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Alergias:</label>
						<br>
						@if($fisiologico->alergias != "")
							<abbr>{{$fisiologico->alergias}}</abbr>
						@else
							<abbr>Não</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Primeira Mestruação:</label>
						<br>
						@if($fisiologico->primeira_mestruacao != "")
							<abbr>{{$fisiologico->primeira_mestruacao}}</abbr>
						@else
							<abbr>Não</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Queixas:</label>
						<br>
						@if($fisiologico->queixas != "")
							<abbr>{{$fisiologico->queixas}}</abbr>
						@else
							<abbr>Não</abbr>
						@endif
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4 form-group">
						<label>Gesta:</label>
						<br>
						@if($fisiologico->gesta != "")
							<abbr>{{$fisiologico->gesta}}</abbr>
						@else
							<abbr>Não</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Para:</label>
						<br>
						@if($fisiologico->para != "")
							<abbr>{{$fisiologico->para}}</abbr>
						@else
							<abbr>Não</abbr>
						@endif
					</div>
					<div class="col-sm-4 form-group">
						<label>Aborto:</label>
						<br>
						@if($fisiologico->aborto != "")
							<abbr>{{$fisiologico->aborto}}</abbr>
						@else
							<abbr>Não</abbr>
						@endif
					</div>
				</div>
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<h1>
						História Mórbida Pregressa
					</h1>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<h2>Doenças Pré-existentes</h2>
						</div>
						<div class="col-sm-12 form-group">
							<label>Acidente Vascular:</label>
							<br>
							@if($morbida->acidente_vascular != "")
								<abbr>{{$morbida->acidente_vascular}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Câncer:</label>
							<br>
							@if($morbida->cancer != "")
								<abbr>{{$morbida->cancer}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Hipertensão:</label>
							<br>
							@if($morbida->hipertensao != "")
								<abbr>{{$morbida->hipertensao}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Cardiopatia:</label>
							<br>
							@if($morbida->cardiopatia != "")
								<abbr>{{$morbida->cardiopatia}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif

						</div>

						<div class="col-sm-12 form-group">
							<label>Diabetes:</label>
							<br>
							@if($morbida->diabetes != "")
								<abbr>{{$morbida->diabetes}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Doença Renal:</label>
							<br>
							@if($morbida->doenca_renal != "")
								<abbr>{{$morbida->doenca_renal}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Pneumopatia:</label>
							<br>
							@if($morbida->pneumopatia != "")
								<abbr>{{$morbida->pneumopatia}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							@if($morbida->outros_pre_existentes != "")
								<abbr>{{$morbida->outros_pre_existentes}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
					</div>

					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<h2>
								Transtornos Alérgicos
							</h2>
						</div>
						<div class="col-sm-12 form-group">
							<label>Drogas:</label>
							<br>
							@if($morbida->drogas != "")
								<abbr>{{$morbida->drogas}}</abbr>
							@else 
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Alimentos:</label>
							<br>
							@if($morbida->alimentos != "")
								<abbr>{{$morbida->alimentos}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Cosméticos:</label>
							<br>
							@if($morbida->cosmeticos != "")
								<abbr>{{$morbida->cosmeticos}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Esparadrapo:</label>
							<br>
							@if($morbida->esparadrapo != "")
								<abbr>{{$morbida->esparadrapo}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Lã:</label>
							<br>
							@if($morbida->la_alergico != "")
								<abbr>{{$morbida->la_alergico}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							@if($morbida->outros_alergicos != "")
								<abbr>{{$morbida->outros_alergicos}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
					</div>

					<div class="col-sm-4">
						<div class="col-sm-12 form-group">
							<h2>
								Fatores de Risco
							</h2>
						</div>
						<div class="col-sm-12 form-group">
							<label>Tabagismo:</label>
							<br>
							@if($morbida->tabagismo != "")
								<abbr>{{$morbida->tabagismo}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Etilismo:</label>
							<br>
							@if($morbida->etilismo != "")
								<abbr>{{$morbida->etilismo}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Quimioterapia:</label>
							<br>
							@if($morbida->quimioterapia != "")
								<abbr>{{$morbida->quimioterapia}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Radioterapia:</label>
							<br>
							@if($morbida->radioterapia != "")
								<abbr>{{$morbida->radioterapia}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Dependência Química:</label>
							<br>
							@if($morbida->dependencia_quimica != "")
								<abbr>{{$morbida->dependencia_quimica}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Violência:</label>
							<br>
							@if($morbida->violencia != "")
								<abbr>{{$morbida->violencia}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
						<div class="col-sm-12 form-group">
							<label>Outros:</label>
							<br>
							@if($morbida->outros_fatores_riscos != "")
								<abbr>{{$morbida->outros_fatores_riscos}}</abbr>
							@else
								<abbr>Não</abbr>
							@endif
						</div>
					</div>
				</div>
				<hr class="hrs">
				<div class="col-sm-12 form-group">
					<h1>
						Hábitos
					</h1>
				</div>	
				<div class="col-sm-12 form-group">
					<div class="col-sm-3">
						<label>Sono e Repouso:</label>
						<br>
						<abbr>{{$habito->sono_repouso}}</abbr>
					</div>

					<div class="col-sm-3">
						<label>Horas de Sono:</label>
						<br>
						<abbr>{{$habito->horas_sono}} horas/dia</abbr>
					</div>

					<div class="col-sm-3">
						<label>Atividade Física:</label>
						<br>
						<abbr>{{$habito->atividade_fisica}}</abbr>
					</div>

					<div class="col-sm-3">
						<label>Qtde Atividade Física:</label>
						<br>
						<abbr>{{$habito->qtde_atividade_fisica}} x semana</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<h3>Alimentos e liquidos ingeridos:</h3>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4">
						<label>Frutas e verduras:</label>
						<br>
						<abbr>{{$habito->frutas_verduras}} x semana</abbr>
					</div>
					<div class="col-sm-4">
						<label>Carne vermelha:</label>
						<br>
						<abbr>{{$habito->carne_vermelha}} x semana</abbr>
					</div>
					<div class="col-sm-4">
						<label>Carne branca:</label>
						<br>
						<abbr>{{$habito->carne_branca}} x semana</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-4">
						<label>Suco:</label>
						<br>
						<abbr>{{$habito->suco_habitos}} copos/dia</abbr>
					</div>
					<div class="col-sm-4">
						<label>Água:</label>
						<br>
						<abbr>{{$habito->agua_habitos}} copos/dia</abbr>
					</div>
					<div class="col-sm-4">
						<label>Chá:</label>
						<br>
						<abbr>{{$habito->cha_habitos}} copos/dia</abbr>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<label>Outras Informações:</label>
						<br>
						@if($habito->outras_informacoes != "")
							<abbr>{{$habito->outras_informacoes}}</abbr>
						@else
							<abbr>Não</abbr>
						@endif
					</div>
					<br>
				</div>
				<div class="col-sm-12 form-group">
					<div class="col-sm-12">
						<button class="btn btn-lg btn-primary button-print__patient2"  onclick="cont();"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
					</div>
				</div>