<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Caioba</title>
        
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;500;700;800&display=swap" rel="stylesheet">
        
        <!-- Style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mdb.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?01" />
        
        <?php wp_head(); ?>
        
		<style>
			ul.step-steps li{
				pointer-events: none;
			}
		</style>

    </head>
    
    <body>
        
    <div class="top-area" style="background:#101820;height:20px"></div>
    
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-4 text-center" style="z-index:1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-caioba.png" class="img-fluid"><br>
                            <p class="text-uppercase">
                                <strong>Faça a sua inscrição no maior evento de futebol para famílias da américa latina</strong>
                            </p><br>
                            <a href="<?php echo get_site_url(); ?>/#eventos" class="btn btn-dark text-uppercase">Inscreva-se</a>
                        </div>
                        <div class="col-md-8">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bg-caioba.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <section class="escolha d-flex align-items-end">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/Banner-desktop-comandatuba-2023.png" class="img-fluid d-none d-sm-block">
		    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/Banner-mobile-comandatuba-2023.png" class="img-fluid d-block d-sm-none">
<!--         <div class="col-md-6 offset-md-3">
            <div class="row margin-border align-items-center">
                <div class="col-md-5 text-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/menino2.png" class="img-fluid">
                </div>
                <div class="col-md-7 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/texto-escolha.png"><br><br>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/setas.png">
                </div>
            </div>
        </div> -->
    </section>
		
<!-- 	 <section class="banner-amarelo m-0 p-0" style="background:#000">
		<div class="img-banner text-center py-5">
			<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/banner_amarelo.png" class="img-fluid">
		</div>
	</section> -->
    
    <section class="eventos" id="eventos">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/2-2023.png" class="img-fluid evento1">
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/2-2023-encerrada.png" class="img-fluid" id="evento1-esgotado">
							<br><br>
                            <a href="#" data-mdb-toggle="modal" data-mdb-target="#exampleModal" id="cta-edicao1">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cta-evento.png">
							</a><br><br>
                        </div>
						<div class="col-md-6 text-center">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/3-2023.png" class="img-fluid evento2">
							<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/3-2023-encerradas.png" class="img-fluid" id="evento2-esgotado">
							<br><br>
                            <a href="#" data-mdb-toggle="modal" data-mdb-target="#exampleModalToggle22" id="cta-edicao2">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cta-evento.png">
							</a><br><br>
                        </div>
                    </div>
                </div>
				<div class="col-md-12 text-center">
					<p class="text-white mt-4">
						Para participar do evento, os inscritos e acompanhantes precisam estar hospedados no hotel durante todo o final de semana da sua respectiva edição
					</p>
				</div>
            </div>
        </div>
    </section>
   
    <section class="jogar-juntos text-center pt-5">
        <img src="<?php echo get_template_directory_uri(); ?>/img/jogar-juntos.png">
<!--         <div class="container-fluid bg-light pt-5 pb-5">
            <div class="row ">
                <div class="col-12">
                    <p>
                        Nossas duas edições de Setembro irão acontecer no Club Med Lake Paradise.<br>
                        Confira aqui a tabela de preço da hospedagem.
                    </p><br>
                    <a href="<?php get_site_url(); ?>/wp-content/uploads/2022/06/CAIOBA-CLUB-MED-LAKE-Cotação-16a18-e-23a25-Setembro.pdf" class="btn btn-dark text-uppercase" target="_blank">Ver tabela</a>
                </div>
            </div>
        </div> -->
    </section>
    
    <footer class="p-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-contato.png">
                </div>
                <div class="col-md-6 offset-md-3">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <p>Mais informações entre em contato com a nossa equipe</p>
                        </div>
                        <div class="col-md-7">
                            <a href="https://www.instagram.com/caiobasoccercamp/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon.png"></a>
                            <a href="https://www.facebook.com/caiobasoccercamp" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.png"></a>
                            <a href="mailto:atendimento@caiobasc.com">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-email.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="copyright text-center p-3">
        <span class="text-white">&copy; Caioba 2022<br></span>
        <span class="text-white ypb">Desenvolvido por: YPB Marketing Digital</span>
    </div>
		
	<!-- Modal Evento 1-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title text-center text-uppercase" id="exampleModalLabel">
				Formulário de Inscrição - 24 a 26 de Março 2023
			</h5>
			<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
		  </div>	  
		  <?php echo do_shortcode("[contact-form-7 id='69' title='Formulário de Inscrição - 24 a 26 Março 2023']"); ?>	  
		</div>
	  </div>
	</div>
		
	<!-- Modal Evento 2 -->
	<div class="modal fade" id="exampleModalToggle22" aria-hidden="true" aria-labelledby="exampleModalToggleLabel22" tabindex="-1">
  		<div class="modal-dialog modal-lg">
    		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center text-uppercase" id="exampleModalToggleLabel22">
						Formulário de Inscrição - 31 de Março a 02 de Abril
					</h5>
					<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				</div>	  
			<?php echo do_shortcode("[contact-form-7 id='70' title='Formulário de Inscrição - 31 de Março a 02 de Abril 2023']"); ?>
			</div>
	  </div>
	</div>
	
	<!-- Modal Termos -->
	<div class="modal fade privacity" id="exampleModalTermos" aria-hidden="true" aria-labelledby="exampleModalTermosLabel" tabindex="-1">
  		<div class="modal-dialog modal-dialog-scrollable modal-lg">
    		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center text-uppercase" id="exampleModalTermosLabel">
						Termos e Condições
					</h5>
					<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				</div>	  
				<div class="modal-body">
				
					<p>Ao contratar os serviços e/ou adquirir os produtos ofertados pela CAIOBA SOCCER CAMP, razão social TTC SOCCER COMERCIO E SERVICOS LTDA., pessoa jurídica direito privado, inscrita no CNPJ/ME sob o nº 30.799.735/0001-98, cuja atividade consiste em prestar serviços relacionados à promoção, produção e realização de experiências de lazer e entretenimento, em especial a execução da experiência CAIOBA (“Experiência”), assim como projetos e atividades relacionadas a esta experiência, por meio da inscrição na referida experiência você adere e concorda com os presentes Termos e Condições.</p>
					<p class="text-center"><strong>CONDIÇÕES GERAIS:</strong></p>
					<p><strong>Inscrição</strong></p>
					<p>A inscrição é pessoal e intransferível, sendo emitida e vendida exclusivamente através do sistema da CAIOBA SOCCER CAMP, para contratação de serviços e/ou de produtos por meio da aquisição de pacote que compõe a Experiência, nos termos da cláusula 2 abaixo, sendo válida exclusivamente para a Experiência, dia, hora e local para o qual foi emitida, não estando sujeita a troca ou devolução, com exceção do expressamente previsto nestes Termos e Condições.</p>
					
					<p>É proibida a revenda de inscrição, bem como a sua utilização para fins promocionais ou institucionais sem o consentimento expresso e por escrito da CAIOBA SOCCER CAMP. Neste sentido, a CAIOBA SOCCER CAMP não se responsabiliza por inscrições adquiridas fora do único canal oficial autorizado, sendo este: caiobasc.com.br.</p>
					
					<p>Ao realizar sua inscrição e/ou comparecer na Experiência, você concorda, autoriza e cede, a título gratuito e definitiva, o uso de sua imagem, nome e voz, sem limitação, anuindo, inclusive, com a cessão a parceiros da CAIOBA SOCCER CAMP, e sem que se caracterize uso indevido de imagem ou qualquer outra violação de direitos e sem que, deste uso e/ou cessão, decorra qualquer ônus e/ou indenização. Esta autorização vigorará pelo prazo de 10 (dez) anos a contar da data da Experiência.</p>
					
					<p>Por questões de segurança, poderá haver câmeras registrando as ações do público, assim como agentes de segurança no local da Experiência.</p>
					
					<p><strong>Preço e itens inclusos</strong></p>
					<p>O valor da inscrição na experiência CAIOBA é de R$ 2.500,00 (dois mil e quinhentos reais). O pagamento do valor mencionado no item 2.1 acima inclui uma inscrição na experiência CAIOBA nos dias 01/04/2022 a 03/04/2022 ou 08/04/2022 a 10/04/2022, que incluirá atividades de futebol no CAIOBA SOCCER CAMP, incluindo treinos e participação no campeonato realizado durante a Experiência. A programação detalhada será divulgada no primeiro dia da Experiência.</p>
					
					<p>Em caso de inscrição de 2 ou mais irmãos será aplicado o desconto progressivo conforme abaixo:</p>
					<p>Quantidade de irmãos inscritos Desconto 2 (dois) 10% (dez) por cento sobre o valor da primeira inscrição</p>
					<p>3 (três) 10% (dez por cento) sobre o  valor da segunda inscrição</p>

					<p>Forma de Pagamento</p>
					<p>O pagamento dos valores relativos à inscrição para participação na Experiência deverá ser realizado exclusivamente através de depósito bancário para a conta bancária de dados abaixo:</p>
					
					<p>
						Banco: Banco Bradesco S.A. (237)<br>
						Agência: 2574<br>
						Conta corrente: 50916-7<br>
						Titular: TTC SOCCER COMERCIO E SERVICOS LTDA.<br>
						CNPJ/ME: 30.799.735/0001-98
					</p>
					<p>Para identificação do pagamento realizado via depósito bancário, é preciso apresentar o comprovante de depósito para validar a inscrição através do e-mail atendimento@caiobasc.com.</p>
					<p class="text-center"><strong>EXPERIÊNCIA</strong></p>
			       
			        <p><strong>Entrada</strong></p>
					<p>Será obrigatória a apresentação do comprovante de inscrição no momento da entrada no Experiência. Para essa finalidade deverá apresentado o ticket, assim como poderá ser solicitada a apresentação de documento de identificação para confirmação de identidade.</p>
					
					<p>A faixa etária para participação da Experiência é de 5 (cinco) a 14 (quatorze) anos de idade, sendo o obrigatório o acompanhamento de um dos pais ou responsável.</p>
					
					<strong>Local e Data</strong>
					<p>5.1.	A experiência CAIOBA ocorrerá 2 (duas) vezes, sendo realizada nas datas de 01 a 03, e 08 a 10 de abril de 2022, com duração de 72h cada uma, sendo a primeira das 17h00 do dia 01/04/2022 até as 18h00 do dia 03/04/2022 e a segunda das 17h00 do dia 08/04/2022 até as 18h00 do dia 10/04/2022, no endereço Rodovia Eng. Cândido do Rego Chaves, nº 4500, Jundiapeba, Mogi das Cruzes - SP, e será organizado pela CAIOBA SOCCER CAMP, em parceria com o CLUB MED BRASIL, razão social CLUB MED DO BRASIL S/A, pessoa jurídica inscrita no CNPJ/ME sob o nº 03.010.384/0010-02, pessoa jurídica de direito privado, responsável pela hospedagem dos inscritos.</p>
					
					<p><strong>Informações gerais</strong></p>
					<p>É proibida a venda de bebida alcoólica para menores de 18 anos e é vedado o porte e o consumo de drogas, substâncias entorpecentes ou de efeitos análogos.</p>
					
					<p>Para fins de proteger a segurança dos clientes, não serão admitidos objetos que possam ser considerados perigosos, tais como:</p>
					<p>armas de fogo ou armas brancas de qualquer tipo (facas, canivetes, etc.);
objetos pontiagudos;</p>
					<p>objetos perfurantes ou cortantes (tesoura, estiletes, pinças, cortadores de unha);
fogos de artificio, dispositivos explosivos, sinalizadores e aparatos incendiários de qualquer espécie; skate, bicicleta ou qualquer tipo de veículo motorizado ou não; bastão de selfie (extensor para tirar autorretrato); substâncias venenosas e/ou tóxicas, incluindo drogas ilegais; e drones de qualquer tipo.</p>
					
					<p>Não é permitida a entrada ou permanência no local da Experiência, de qualquer pessoa que demonstre comportamento violento, agressivo ou contrário à ordem pública ou que se recuse a desfazer-se de objetos não permitidos ou não autorizados.</p>

<p>Não é permitida a entrada de animais no local da Experiência, exceto cães guia devidamente identificados, que visem a atender portadores de deficiência visual.</p>

<p>É proibido fumar em qualquer espaço, total ou parcialmente fechado, do local da Experiência, conforme determina a Lei Estadual nº 5.517/2009, sujeitando-se o infrator a multa e a ser convidado a se retirar do local da Experiência.</p>

<p>Estão terminantemente proibidas as gravações e transmissões em áudio ou vídeo de totalidade ou de parte da Experiência por qualquer meio, bem como o uso de máquinas fotográficas profissionais (lente intercambiável) ou equipamentos de filmagem profissionais.</p>

<p>O titular da inscrição que eventualmente se retirar do local da Experiência, não poderá a ele regressar.</p>

<p>Os titulares de inscrições na Experiência cujas ações se revelem contrárias às presentes condições, poderão ter recusada sua entrada na Experiência, ou serem encaminhados à saída, sendo as respectivas inscrições canceladas, sem direito a reembolso, e sem prejuízo do ressarcimento dos eventuais danos causados.</p>
					
					<p class="text-center"><strong>ALTERAÇÕES</strong></p>
					<p>Atualização dos Termos e Condições</p>
					<p>Estes Termos e Condições, podem ser alterados, os quais postaremos versão atualizada em nosso site na internet.</p>

<p>Notificaremos você sobre quaisquer alterações relevantes dos presentes Termos e Condições através do e-mail fornecido no ato da inscrição.</p>

<p>O titular da inscrição é o único responsável pela consulta da versão atualizada dos Termos e Condições no site da Experiência caiobasc.com.br.</p>

					<p><strong>Alteração por motivo de força maior ou caso fortuito</strong></p>
					<p>A CAIOBA SOCCER CAMP reserva-se o direito de alterar, a qualquer momento, sem aviso prévio ou qualquer outra condição, a Experiência, a programação, a data, o local e horários pré-estabelecidos, por motivo de força maior ou caso fortuito, incluindo orientações governamentais quanto a segurança pública ou sanitária, incluindo, mas não se limitando a cenários de agravamento da pandemia do COVID-19.</p>
					
					<p class='text-center'><strong>CANCELAMENTO</strong></p>
					<p>Arrependimento e Cancelamento pelo CLIENTE</p>
					<p>Caso o titular da inscrição pretenda cancelar a compra, o pedido de cancelamento deverá ser solicitado em até 7 (sete) dias corridos, desconsiderando a data da compra, para que seja realizada a devolução do valor, conforme estabelece o Código de Defesa do Consumidor. Após este prazo o eventual reembolso obedecerá ao regramento disposto na cláusula 9.2 abaixo. </p>
					
					<p><strong>Na hipótese de pedido de cancelamento pelo CLIENTE:</strong></p>
					<p>Se realizada em até 30 (trinta) dias antes da realização da Experiência, o valor da inscrição será devolvido em sua integralidade, em até 10 (dez) dias úteis, contados a partir da solicitação de cancelamento;</p>
					<p>Se realizada em prazo de 15 (quinze) dias ou menos antes da realização da Experiência, o valor da inscrição não será reembolsado em dinheiro, mas será convertido em créditos ao CLIENTE, que poderão ser utilizados para inscrição em outras experiências da CAIOBA SOCCER CAMP, até 31/12/2022.</p>
					<p>A solicitação de cancelamento nos termos do item 9.1 acima será realizada por e-mail para atendimento@caiobasc.com. Não serão aceitos pedidos de cancelamento realizados por telefone ou qualquer outra origem que não seja o e-mail mencionado.</p>
					
					<p><strong>Cancelamento pela Caioba Soccer Camp</strong></p>
					<p>Caso haja cancelamento da Experiência, o CAIOBA SOCCER CAMP terá o prazo de até 60 (sessenta) dias para operacionalizar o processamento devolução dos valores da inscrição após a comunicação do cancelamento da Experiência no site da Experiência e no e-mail do CLIENTE informado no ato da inscrição.</p>
					<p>Caso o cancelamento previsto na cláusula 10.1 acima seja dado em razão da pandemia de COVID-19, os valores serão transformados em créditos, que poderão ser utilizados para a próxima experiência que suceder àquele cancelado, até a data máxima de 31 de dezembro de 2022. Se estiverem em vigor outras legislações em vigor no momento da ocorrência do referido caso fortuito, as orientações a ela pertinentes serão divulgadas oportunamente no site da Experiência.</p>
					<p>O CAIOBA SOCCER CAMP não se responsabiliza por eventuais despesas adicionais envolvendo hospedagem, locomoção, alimentação, entre outros em qualquer das hipóteses de cancelamento.</p>
					<p>Em nenhuma hipótese haverá reembolso da inscrição de clientes que entraram no recinto na data de realização da Experiência ou que tenha sido de qualquer forma utilizada.</p>
					
					<p><strong>INFORMAÇÕES FINAIS, CONSENTIMENTO E SUPORTE</strong></p>
					<p>A eventual declaração de nulidade ou ineficácia ou a não aplicação, pelo tribunal competente, de qualquer das disposições contidas nos presentes Termos e Condições, não invalida a incidência das demais normas.</p>
					<p>O titular da inscrição declara expressamente que leu, compreendeu e aceitou estes Termos e Condições e que está totalmente ciente dos direitos e obrigações que deles decorrem.</p>
					<p>Caso o titular tenha qualquer dúvida relacionado à Experiência, o CLIENTE pode entrar em contato com a CAIOBA SOCCER CAMP pelo e-mail atendimento@caiobasc.com.</p>
					<p>São Paulo, 04 de fevereiro de 2022.</p>	
				</div>
			</div>
	  </div>
	</div>
		
	<!-- Modal Privacidade -->
	<div class="modal fade privacity" id="exampleModalPrivacity" aria-hidden="true" aria-labelledby="exampleModalPrivacityLabel" tabindex="-1">
  		<div class="modal-dialog modal-dialog-scrollable modal-lg">
    		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center text-uppercase" id="exampleModalPrivacityLabel">
						Política de Privacidade
					</h5>
					<button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
				</div>	  
			    <div class="modal-body">
					<p>A presente Política de Privacidade (“<strong>Política</strong>”) descreve as práticas em relação ao tratamento dos dados pessoais que você tenha fornecido ou venha a fornecer ao <strong>CAIOBA SOCCER CAMP</strong>, sob livre e espontânea vontade (incluindo a coleta, uso, armazenamento e compartilhamento), quando você contrata nossos serviços ou adquire nossos produtos, incluindo inscrições, por meio de nossos sites na internet, aplicativos, e-mails e demais interações que você tenha conosco e que estejam relacionadas à presente Política.</p>
					
					<p>Sua privacidade é muito importante para nós e a presente Política vem atender nosso compromisso com a transparência e confiança que regem as relações com nossos clientes, parceiros e usuários de nossos serviços.</p>

<p>Antes de mais nada, seguem algumas definições importantes para sua leitura dessa política.</p>

                    <ul>
						<li>
							“Dados Pessoais” são quaisquer informações pessoais relacionadas com uma pessoa que possa ser identificada, direta ou indiretamente, por referência a essas informações, tais como seu nome, endereço, RG, CPF, e-mail, telefone, dados de cartão de créditos, dados bancários, dentre outros.
						</li>
						<li>
							“Tratamento” significa qualquer operação ou conjunto de operações que seja realizado em dados pessoais, como a coleta, armazenamento, organização, estruturação, conservação, alteração, recuperação, consulta, utilização, divulgação, compartilhamento, exclusão ou destruição.
						</li>
						<li>
							“Dados Sensíveis” são tipos de dados pessoais que podem demonstrar a raça, etnia, opiniões políticas, crenças religiosas ou filosóficas, adesão a um sindicato, vida sexual ou orientação sexual, dados sobre a saúde e quaisquer dados genéticos ou biométricos de uma pessoa.
						</li>
					</ul>
					<p>Ao contratar nossos serviços e/ou adquirir nossos produtos, você expressamente reconhece e concorda com os termos descritos abaixo:</p>

                    <p><strong>1. Como e por que utilizamos seus Dados Pessoais</strong></p>
					<p>Todos os dados pessoais tratados pelo <strong>CAIOBA SOCCER CAMP</strong>, razão social <strong>TTC SOCCER COMERCIO E SERVICOS LTDA</strong>., pessoa jurídica direito privado, inscrita no CNPJ/ME sob o nº 30.799.735/0001-98 cuja atividade consiste em prestar serviços relacionados à promoção, produção e realização de experiências de lazer e entretenimento, em especial durante a execução da experiência denominado <strong>CAIOBA</strong> (“Experiência”), assim como projetos e atividades relacionadas a esta Experiência, seguirão as seguintes finalidades:</p>
					
					<p><strong>Utilizamos dados pessoais para lhe oferecer produtos e serviços:</strong></p>
					<p>Utilizamos seus dados para processar seu pedido e lhe oferecer suporte e atualizações, incluindo o envio de e-mails sobre sua conta ou sobre o pedido de inscrições. Também poderemos entrar em contato com você sobre a presente política ou sobre as condições do nosso site na internet. Por exemplo, poderemos utilizar seus dados pessoais para confirmar sua inscrição em uma experiência.</p>
					
					<p><strong>Utilizamos dados pessoais para responder às suas solicitações ou perguntas:</strong></p>
					<p>Utilizamos seus dados para processar seu pedido e lhe oferecer suporte em caso de dúvidas ou problemas. Por exemplo, poderemos utilizar seus dados pessoais para responder e/ou atender qualquer pedido de suporte de sua parte.</p>
					
					<p><strong>Utilizamos dados pessoais para fins de segurança:</strong></p>
					<p>Utilizamos dados pessoais para fins de nos proteger, assim como proteger nossos clientes ou nossos sites na internet, incluindo detectar ou impedir comportamento ilegal.</p>
					
					<p><strong>Utilizamos dados pessoais para fins de marketing:</strong></p>
					<p>Utilizamos dados pessoais para fins de divulgar nossos produtos e serviços. Por exemplo, poderemos lhe enviar boletins informativos, informações sobre produtos, promoções ou ofertas especiais, assim como lhe comunicar sobre novas experências ou serviços/produtos. Nossa comunicação pode tratar de nossas próprias ofertas ou produtos ou de ofertas ou produtos de terceiros, nossos parceiros pelos quais achamos que você poderá se interessar.</p>
					
					<p><strong>Tratamos dados pessoais conforme permitido por lei ou conforme venhamos a notificá-lo:</strong></p>
					<p>Conservamos seus dados pessoais em nossos bancos de dados na medida em que seja necessário ou relevante para o nosso negócio, para lhe fornecer produtos e para prestar os serviços que você tenha contratado, bem como da forma permitida pela lei aplicável e conforme informado nesta Política. Também armazenamos dados pessoais a fim de solucionar controvérsias, executar nossos contratos e para propósitos exigidos por lei.</p>
					
					<p><strong>Justificamos o tratamento de seus dados conforme permite pela lei:</strong></p>
					<p>A base jurídica do nosso tratamento de dados pessoais dependerá do motivo pelo qual tratamos os seus dados pessoais. Ao se inscrever em nosso site, iremos tratar seus dados com base em seu consentimento, nos termos informados nesta Política. Ao realizar uma compra, trataremos seus dados para lhe fornecer o produto e/ou serviço contratado, assim executando o contratado no ato da inscrição. Se utilizar o nosso site, iremos tratar os seus dados pessoais coletados através da utilização de cookies em conformidade com a nossa política de cookies. Temos legítimo interesse em tratar os seus dados pessoais para efeitos de comunicação que nos permitam desenvolver e direcionar o marketing dos nossos produtos e serviços, gestão ativa sobre nossa relação com o titular, nossos objetivos empresariais internos. Por fim, podemos também ter que tratar os seus dados a fim de cumprir com as nossas obrigações legais.</p>
					
					<p><strong>Com quem e por que compartilhamos seus Dados Pessoais</strong></p>
					<p>Compartilharemos dados pessoais com nossos parceiros comerciais, isso inclui, mas não se limita, a terceiros que participem da produção de uma experiência, patrocinem uma experiência e/ou operem o local em que realizamos um experiência. Nossos parceiros utilizam os dados pessoais que fornecemos a eles da forma descrita em suas próprias políticas de privacidade, as quais poderão incluir o envio a você de comunicações de marketing. Você deverá ler tais políticas para saber mais sobre a forma como tais parceiros tratam seus dados pessoais.</p>
					<p>Esclarecemos que quanto à Experiência, nossa parceira na organização desta Experiência, <strong>CLUB MED BRASIL, razão social CLUB MED DO BRASIL S/A</strong>, pessoa jurídica inscrita no CNPJ/ME sob o nº 03.010.384/0010-02, pessoa jurídica de direito privado, responsável pela hospedagem dos inscritos, está desde já autorizada, nos termos desta Política e da Política de Privacidade da CLUB MED BRASIL, a realizar o tratamento de dados pessoais. Você poderá se manter informado acerca da Política de Privacidade da CLUB MED BRASIL através do seguinte link: https://www.clubmed.com.br/l/protecao-dados.</p>
					<p><strong>Dados Pessoais que coletamos></strong></p>
					<p>Coletamos, usamos e armazenamos diferentes tipos de dados pessoais que tenham sido fornecidos por você, durante contato direto com o <strong>CAIOBA SOCCER CAMP</strong>, a depender da maneira que você interage conosco, por exemplo, quando você cria uma conta de cadastro em nosso site, adquire inscrições (ainda que por meio de terceiros contratados por nós), participa de promoções e atividades, entra em contato conosco para tirar dúvidas ou, ainda, utiliza nosso site na internet.
</p>
<p>As informações que poderemos coletar de você, para a finalidade única e exclusiva de fornecimento dos benefícios garantidos pela compra da inscrição, por meio do cumprimento de nossas obrigações perante você na entrega do serviço, poderão incluir Nome, CPF, RG, Endereço, CEP, e-mail, número de telefone e celular, idade e informações de cobrança, como informações bancárias.</p>

<p>Com a finalidade de garantir a segurança e controle de acesso à Experiência, informamos que, a qualquer momento, incluindo no momento do ingresso do local, poderá realizada uma verificação de identidade e faixa etária do participante, assim como poderemos coletar uma foto de seu rosto, bem como solicitar que seja apresentado seu documento de identidade válido e com foto, a fim de permitir a devida conferência de que o portador da inscrição é de fato o indivíduo presente, e ou produção de credenciais pertinentes, se aplicável. Desde já, você autoriza expressamente o tratamento de seus dados pessoais para as finalidades acima informadas, com a ressalva de que esses dados serão utilizados tão somente para segurança e identificação durante a Experiência controle de acesso dos participantes e que, ao final da Experiência, esses dados pessoais ora fornecidos serão segura e permanentemente deletados.</p>

<p>Caso você seja o responsável legal de uma pessoa menor de idade (indivíduos com menos de 18 (dezoito) anos), garante, desde já, que está ciente e concorda com o fornecimento dos dados pessoais solicitados para a execução das finalidades informadas nesta Política.</p>
					<p><strong>Informações de saúde</strong></p>
					<p>Podemos coletar, também, informações sobre suas necessidades de saúde relacionadas a acessibilidade para comparecimento a experiências, incluindo, mas não se limitando a informações acerca de condições de locomoção e da sua vacinação contra doenças como a COVID-19. Estes dados serão coletados observando as disposições legais e mediante seu consentimento, quando necessário, e serão segura e permanentemente excluídas, quando não se mostrarem mais necessárias, ou mediante sua solicitação.</p>
					<p><strong>Seus Direitos</strong></p>
					<p>Você tem algumas escolhas sobre a forma como utilizamos seus dados pessoais, os quais explicamos abaixo.

<p>Você pode ter acesso aos dados, corrigi-los e atualizá-los:</p>

					<p>Você tem o direito de obter acesso gratuito e facilitado aos seus dados pessoais em tratamento pelo <strong>CAIOBA SOCCER CAMP</strong>, além de poder corrigir dados incorretos, incompletos e desatualizados.</p>

					<p>Você pode solicitar informações sobre o tratamento de seus dados:</p>

<p>Você tem o direito de receber informações claras, transparentes e facilmente compreensíveis sobre a forma como utilizamos os seus dados pessoais e os seus direitos. É por este motivo que lhe fornecemos informações sobre o tratamento de seus dados pessoais nesta Política. Em caso de solicitação, só podemos lhe fornecer os seus próprios dados, não o de outras pessoas.</p>
					<p><strong>Você pode revogar seu consentimento:</strong></p>
					<p>Caso você não deseje mais participar de nossa rede, pode revogar seu consentimento e cancelar seu cadastro em nossos sites. Ao revogar seu consentimento, iremos eliminar todos os seus dados que não sejam tratados por outra base legal além do consentimento. Não poderemos deletar os dados que somos obrigados a manter em decorrência do cumprimento de nossas obrigações legais e regulatórias.</p>
					
					<p><strong>Você poderá optar por não receber nossos e-mails de marketing:</strong></p>
					<p>Para parar de receber nossos e-mails promocionais siga as instruções contidas em qualquer e-mail de marketing que receber de nós. Mesmo se você optar por não receber e-mails de marketing, ainda assim nos certificaremos de lhe enviar mensagens sobre operações e transações que você tenha realizado conosco. Por exemplo, ainda assim poderemos entrar em contato com você acerca de seus pedidos.</p>
					
					<p><strong>Você pode solicitar a exclusão de seus dados ou limitar seu tratamento:</strong></p>
					<p>Você pode solicitar a exclusão ou remoção dos seus dados pessoais quando não existe base legal para que continuemos a utilizá-los. Mas lembre-se que a <strong>CAIOBA SOCCER CAMP</strong> poderá ter o direito ou a obrigação de reter os dados, como acontece, por exemplo, quando estiver sujeita a uma obrigação legal ou regulatória de o fazer ou tiver outro motivo válido e necessário para a retenção, inclusive para continuar a lhe prestar os serviços que você tenha contratado. Se você entender que o tratamento realizado é excessivo, também pode “bloquear” ou limitar o tratamento de seus dados, mediante solicitação através do seguinte e-mail atendimento@caiobasc.com.</p>
					
					<p><strong>Nossos sites e aplicativos não se destinam a crianças:</strong></p>
					<p>Nossos produtos, serviços, sites e aplicativos destinam-se a adultos. Não coletamos, deliberadamente, dados pessoais identificáveis de crianças ou adolescentes, portanto com idade inferior a 18 anos. Se você for um dos pais ou responsável legal e fornecer dados pessoais de seu filho e/ou tutelado com idade inferior a 18 anos, incluindo nome, sobrenome, data de nascimento, para consecução dos produtos e/ou serviços contratados com a inscrição na Experiência, incluindo a divisão de categoria dos times que irão participar na Experiência, está ciente e concorda, desde já, de maneira expressa e inequívoca, com o tratamento dos dados pessoais do menor sob sua responsabilidade legal e fornecidos nos termos deste item. Se, a qualquer tempo, decidir pelo bloqueio do tratamento, exclusão, ou revogação do consentimento que autorizou o tratamento dos dados pessoais dos menores sob sua responsabilidade legal, entre em contato conosco através do e-mail atendimento@caiobasc.com.</p>
					
					<p><strong>Como cuidamos de seus Dados Pessoais - Utilizamos medidas de segurança padrão:</strong></p>
					<p>Temos medidas de segurança implementadas para proteger seus dados pessoais. As medidas de segurança padrão que utilizamos dependerão do tipo de dados coletados e, nos casos exigidos por lei, incluirão controles rigorosos dos métodos de acesso e de autenticação de acesso. Nos casos exigidos por lei, também mantemos dados sobre acesso e utilizamos criptografia ou outras medidas para a proteção de dados pessoais. A internet, de modo geral, não é 100% segura, assim não é possível garantir que o uso por você de nossos sites será completamente seguro. Se você achar que houve um acesso não autorizado à sua conta ou uma conta não autorizada foi criada com utilização do seu nome, entre em contato conosco através do seguinte e-mail atendimento@caiobasc.com.</p>
					
					<p><strong>Podemos fazer link com sites ou serviços de terceiros que não controlamos:</strong></p>
					<p>Se você clicar em um desses links, você será levado a sites na internet que não controlamos. A presente Política não se aplica às práticas de privacidade de tais sites da internet. Leia cuidadosamente a política de privacidade de outros sites da internet, e salientamos que não somos responsáveis por tais sites de terceiros.</p>
					
					<p><strong>Entre em Contato</strong></p>
					<p>Sinta-se à vontade para entrar em contato conosco se tiver qualquer pergunta sobre a presente Política ou outras dúvidas sobre privacidade dos dados tratados pela <strong>CAIOBA SOCCER CAMP</strong>, através do seguinte e-mail atendimento@caiobasc.com. Pedimos que você não inclua dados sensíveis, números do seu cartão de crédito ou outros dados críticos em seu e-mail.</p>
					
					<p><strong>Atualização da Política</strong></p>
					<p>De tempos em tempos poderemos alterar nossas práticas de privacidade, a qual postaremos versão atualizada em nosso site na internet. Para verificar a Política em vigor recomendamos a consulta ao nosso site. Notificaremos você sobre quaisquer alterações relevantes da presente política conforme venha a ser exigido por lei e obteremos o seu consentimento. </p>
					
					<p><strong>Foro</strong></p>
					<p>Esta Política será regida, interpretada e executada de acordo com a legislação brasileira, especialmente a Lei nº 13.709/2018 – Lei Geral de Proteção de Dados, independentemente das leis de outros estados ou Países, sendo competente o foro do seu domicílio no Brasil, para dirimir qualquer conflito relacionado a esta Política.</p>

           </div>
		</div>
	  </div>
	</div>
		
	<!-- Jquery --> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>       
    <!-- MDB -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mdb.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    
    <?php wp_footer(); ?>
    
     <script>   
		//Start do botão finalizar Step by Step
      	$('#demo').steps({ onFinish: function () { }});		
		$('#demo2').steps({ onFinish: function () { }});		
		//Inclusão do atributo data-step-action dentro do submit CF7
      	$('.wpcf7-submit').attr('data-step-action', 'finish');   
    </script>
	<script>
        $('#validate').click(function(){
            var campo1 = $('input.step1').val();
// 			var campo2 = $('input.step2').val();
			
            if( campo1 == ""){
                alert('Todos os campos são obrigatórios');
                $("li[data-step-target='step1']").addClass("active");
                $("li[data-step-target='step1']").removeClass("done");
                $("li[data-step-target='step2']").removeClass("active");
                $("div[data-step='step1']").addClass("active");
                $("div[data-step='step2']").removeClass("active");
            }
// 			if( campo2 == ""){
//                 alert('Todos os campos são obrigatórios');
// 			}
        });
	</script>
	<script>
		//Validação de Quantidade de envios do formulário
		if ($("#demo input[name='wpadcf7sl_remaining']").val() == 0) {
  			$(".evento1").hide();
			$("#cta-edicao1").hide();
			$("#evento1-esgotado").show();
		}
		if ($("#demo2 input[name='wpadcf7sl_remaining']").val() == 0) {
  			$(".evento2").hide();
			$("#cta-edicao2").hide();
			$("#evento2-esgotado").show();
		}
	</script>
		
	<script>
		//Botão 'add' Step2>Hóspede Evento1
		$("#campo2").click(function () {
			$("#hospede2").show();
			$("#hospede2").css("display","flex");
			$(".campo2").hide();
			$(".campo3").show();
			$("a#trash4").hide();
		});
		$("#campo3").click(function () {
			$("#hospede3").show();
			$("#hospede3").css("display","flex");
			$("a#campo2").hide();
			$("a#campo3").hide();
			$("a#trash2").hide();
			$("a#trash3").css("display", "inline-block");
			$(".campo4").show();
			$(".campo3").hide();
		});
		$("#campo4").click(function () {
			$("#hospede4").show();
			$("#hospede4").css("display","flex");
			$("a#trash3").hide();
			$("a#trash4").css("display", "inline-block");
			$("a#campo4").hide();
			$(".campo5").show();
		});
		$("#campo5").click(function () {
			$("#hospede5").show();
			$("#hospede5").css("display","flex");
			$("a#trash3").hide();
			$("a#trash4").css("display", "inline-block");
			$("a#campo4").hide();
			$(".campo5").hide();
			$("a#trash4").hide();
		});
		$("#trash2").click(function () {
			$("#hospede2").hide();
			$(".campo2").show();
			$(".campo3").hide();
		});
		$("#trash3").click(function () {
			$("#hospede3").hide();
			$("a#campo3").show();
			$("a#trash2").show();
			$(".campo4").hide();
			$(".campo3").show();
		});
		$("#trash4").click(function () {
			$("#hospede4").hide();
			$("a#trash3").show();
			$("a#campo4").show();
			$(".campo5").hide();
		});
		$("#trash5").click(function () {
			$("#hospede5").hide();
			$("a#trash4").show();
			$(".campo5").show();
		});
		
		//Botão 'add' Step2>Hóspede Evento2
		$("#campo2-2").click(function () {
			$("#hospede2-2").show();
			$("#hospede2-2").css("display","flex");
			$(".campo2-2").hide();
			$(".campo3-3").show();
			$("a#trash4-4").hide();
		});
		$("#campo3-3").click(function () {
			$("#hospede3-3").show();
			$("#hospede3-3").css("display","flex");
			$("a#campo2-2").hide();
			$("a#campo3-3").hide();
			$("a#trash2-2").hide();
			$("a#trash3-3").css("display", "inline-block");
			$(".campo4-4").show();
			$(".campo3-3").hide();
		});
		$("#campo4-4").click(function () {
			$("#hospede4-4").show();
			$("#hospede4-4").css("display","flex");
			$("a#trash3-3").hide();
			$("a#trash4-4").css("display", "inline-block");
			$("a#campo4-4").hide();
			$(".campo5-5").show();
		});
		$("#campo5-5").click(function () {
			$("#hospede5-5").show();
			$("#hospede5-5").css("display","flex");
			$("a#trash3-3").hide();
			$("a#trash4-4").css("display", "inline-block");
			$("a#campo4-4").hide();
			$(".campo5-5").hide();
			$("a#trash4-4").hide();
		});
		$("#trash2-2").click(function () {
			$("#hospede2-2").hide();
			$(".campo2-2").show();
			$(".campo3-3").hide();
		});
		$("#trash3-3").click(function () {
			$("#hospede3-3").hide();
			$("a#campo3-3").show();
			$("a#trash2-2").show();
			$(".campo4-4").hide();
			$(".campo3-3").show();
		});
		$("#trash4-4").click(function () {
			$("#hospede4-4").hide();
			$("a#trash3-3").show();
			$("a#campo4-4").show();
			$(".campo5-5").hide();
		});
		$("#trash5-5").click(function () {
			$("#hospede5-5").hide();
			$("a#trash4-4").show();
			$(".campo5-5").show();
		});
	</script>
    
    </body>
    
</html>
