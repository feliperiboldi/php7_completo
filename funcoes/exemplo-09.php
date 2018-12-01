<?php 

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			// Inicio: Diretor - Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					// Inicio: Gerente - Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					// Término: Gerente - Gerente de Vendas
				)
			),
			// Término: Diretor - Diretor Comercial

			// Inicio: Diretor - Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					// Inicio: Gerente - Gerente de Contar a Pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							// Inicio: Supervisor - Supervisor de Pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
						)
						// Inicio: Supervisor - Supervisor de Pagamentos
					)
					// Término: Gerente - Gerente de Contar a Pagar
				),
				// Inicio: Gerente - Gerente de Comrpas
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							// Inicio: Supervisor - Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							)
							// Término: Supervisor - Supervisor de Suprimentos
						)
					)
				// Término: Gerente - Gerente de Comrpas

			)
			// Término: Diretor - Diretor Financeiro
		)
	)
);

function exibe($cargos) {

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html .= '<li>';
		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

			$html .= exibe($cargo['subordinados']);
			
		}

		$html .= '</li>';
	}

	$html .= '</ul>';

	return $html;

}

echo exibe($hierarquia);

 ?>