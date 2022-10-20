<?php

	//Funções Recursivas
	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(
				//Início Diretor Comercial
				array(
					'nome_cargo' => 'Direto Comercial',
					//Inicio Gerente de Vendas
					'subordinados' => array(
						array(
							'nome_cargo' => 'Gerente de Vendas'
						)
						//Término Gerente de Vendas
					)
				),
				//Término Diretor Comercial
				//Início Direto Financeiro				
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' => array(
						//Início Gerente de Contas a Pagar
						array(
							'nome_cargo' => 'Gerente de Contas a Pagar',
							'subordinados' => array(
								//Início do Supervisor de Pagamentos
								array(
									'nome_cargo' => 'Supervisor de Pagamentos'
									)
								)
								),
						//Término Gerente de Contas a Pagar
						//Início Gerente de Compras
						array(
							'nome_cargo' => 'Gerente de Compras',
							'subordinados' => array(
								//Início Supervisor de Suprimentos
								array(
									'nome_cargo' => 'Supervisor de Suprimentos',
									'subordinados' => array(
										array(
											'nome_cargo' => 'Líder de Suprimentos',
											'subordinados' => array(
												array(
													'nome_cargo' => 'Operador',
													'subordinados' => array(
														array(
															'nome_cargo' => 'Estagiário'
														)
													)
												)
											)
										)
									)
								)
								//Término Supervisor de Suprimentos
							)
						)
					)
				)
				//Término Diretor Financeiro
			)
		)
	);

	//Criando função
	function exibe($cargos) {
		$html = "<ul>";		
		foreach ($cargos as $cargo) {
			$html .= "<li>";
			$html .= $cargo['nome_cargo'];

			if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0)
			{
				$html .= exibe($cargo['subordinados']);
			}


			$html .= "</li>";
		}		
		$html .= "</ul>";
		return $html;
	}

	echo exibe($hierarquia);

?>