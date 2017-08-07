<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>KatBru - Cadastro de Clientes</title>
			<link rel="stylesheet" type="text/css" href="css/inicial.css" />
			<link rel="stylesheet" type="text/css" href="css/estilo.css" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
			<style type="text/css">
				body{
					background-color: black;
				}
				h2, h4, li{
					color: orange;
				}
				#botao{
					color: orange;
				}
				p, h5{
					color: white;
				}
				.float-label-control { position: relative; margin-bottom: 1.5em; }
				.float-label-control ::-webkit-input-placeholder { color: transparent; }
				.float-label-control :-moz-placeholder { color: transparent; }
				.float-label-control ::-moz-placeholder { color: transparent; }
				.float-label-control :-ms-input-placeholder { color: transparent; }
				.float-label-control input:-webkit-autofill,
				.float-label-control textarea:-webkit-autofill { background-color: transparent !important; -webkit-box-shadow: 0 0 0 1000px white inset !important; -moz-box-shadow: 0 0 0 1000px white inset !important; box-shadow: 0 0 0 1000px white inset !important; }
				.float-label-control input, .float-label-control textarea, .float-label-control label { font-size: 1.3em; box-shadow: none; -webkit-box-shadow: none; }
					.float-label-control input:focus,
					.float-label-control textarea:focus { box-shadow: none; -webkit-box-shadow: none; border-bottom-width: 2px; padding-bottom: 0; }
					.float-label-control textarea:focus { padding-bottom: 4px; }
				.float-label-control input, .float-label-control textarea { display: block; width: 100%; padding: 0.1em 0em 1px 0em; border: none; border-radius: 0px; border-bottom: 1px solid #aaa; outline: none; margin: 0px; background: none; }
				.float-label-control textarea { padding: 0.1em 0em 5px 0em; }
				.float-label-control label { position: absolute; font-weight: normal; top: -1.0em; left: 0.08em; color: #aaaaaa; z-index: -1; font-size: 0.85em; -moz-animation: float-labels 300ms none ease-out; -webkit-animation: float-labels 300ms none ease-out; -o-animation: float-labels 300ms none ease-out; -ms-animation: float-labels 300ms none ease-out; -khtml-animation: float-labels 300ms none ease-out; animation: float-labels 300ms none ease-out; /* There is a bug sometimes pausing the animation. This avoids that.*/ animation-play-state: running !important; -webkit-animation-play-state: running !important; }
				.float-label-control input.empty + label,
				.float-label-control textarea.empty + label { top: 0.1em; font-size: 1.5em; animation: none; -webkit-animation: none; }
				.float-label-control input:not(.empty) + label,
				.float-label-control textarea:not(.empty) + label { z-index: 1; }
				.float-label-control input:not(.empty):focus + label,
				.float-label-control textarea:not(.empty):focus + label { color: #aaaaaa; }
				.float-label-control.label-bottom label { -moz-animation: float-labels-bottom 300ms none ease-out; -webkit-animation: float-labels-bottom 300ms none ease-out; -o-animation: float-labels-bottom 300ms none ease-out; -ms-animation: float-labels-bottom 300ms none ease-out; -khtml-animation: float-labels-bottom 300ms none ease-out; animation: float-labels-bottom 300ms none ease-out; }
				.float-label-control.label-bottom input:not(.empty) + label,
				.float-label-control.label-bottom textarea:not(.empty) + label { top: 3em; }


			@keyframes float-labels {
				0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
				20% { font-size: 1.5em; opacity: 0; }
				30% { top: 0.1em; }
				50% { opacity: 0; font-size: 0.85em; }
				100% { top: -1em; opacity: 1; }
			}

			@-webkit-keyframes float-labels {
				0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
				20% { font-size: 1.5em; opacity: 0; }
				30% { top: 0.1em; }
				50% { opacity: 0; font-size: 0.85em; }
				100% { top: -1em; opacity: 1; }
			}

			@keyframes float-labels-bottom {
				0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
				20% { font-size: 1.5em; opacity: 0; }
				30% { top: 0.1em; }
				50% { opacity: 0; font-size: 0.85em; }
				100% { top: 3em; opacity: 1; }
			}

			@-webkit-keyframes float-labels-bottom {
				0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
				20% { font-size: 1.5em; opacity: 0; }
				30% { top: 0.1em; }
				50% { opacity: 0; font-size: 0.85em; }
				100% { top: 3em; opacity: 1; }
			}

		</style>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h2>Cadastro de Clientes</h2>
				<p class="lead">
					Realize seu cadastro simples e rápido e recebe um e-book via Whatsapp.<br />
					<small class="text-muted">Para acessar o site <a href="site.html">Clique aqui!</a></small>
				</p>
<!--
				<div class="alert alert-warning">
					<h4>Missing SELECT Support</h4>
					This feature does not currently support SELECT tags - I'm still working out a way to make them work with Bootstrap's native examples.
				</div>
-->
				<hr />

				<div class="row">
					<div class="col-sm-8">

						<h4 class="page-header">Informações Pessoais</h4>
						<form action="cadastrarCliente.php" role="form" method="post" name="form" id="form">
							<div class="form-group float-label-control">
								<label for="">Nome Completo</label>
								<input type="text" name="nome" class="form-control" placeholder="Nome Completo">
							</div>
							<div class="form-group float-label-control">
								<label for="">Telefone</label>
								<input type="text" name="telefone" class="form-control" placeholder="Telefone">
							</div>
							<div class="form-group float-label-control">
								<label for="">Data Nascimento</label>
								<input type="date" name="dtNasc" class="form-control" placeholder="Date">
							</div>
							<div class="form-group float-label-control">
								<label for="">Bairro onde mora</label>
								<input type="text" name="bairro" class="form-control" placeholder="Bairro onde mora">
							</div>
							<div class="form-group float-label-control" align="right">
								<input type="submit" value="Cadastrar" id="botao"/>
							</div>
						</form>

					</div>
					<div class="col-sm-4">
						<div class="stack twisted">
							<img src="images/chef.jpg" align="right" class="img-responsive">
						</div>
					</div>
				</div>
				<hr />
			</div>
		</div>
		
		<!-- Footer -->
	<div class="footer" id="footer">
		<div class="container">

			<div class="footer-top">
				<div class="footer-grids">
					<div class="col-md-4 col-sm-4 address">
						<h5>Endereço</h5>
							<ul>
								<li>Av. Esdras César da Silva, 2751</li>
								<li>Panatis II</li>
								<li>Natal RN</li>
							</ul>
					</div>
					<div class="col-md-4 col-sm-4 contact">
						<h5>Contato</h5>
						<div class="phone">
							<ul>
								<li>+55 84 98845-9674</li>
								<li>Mail : <a href="mailto:mail@example.com">katerynnebruzzi@hotmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 connect">
						<!--
						<h5>Follow</h5>
						<!-- Social-Icons
						<div class="social wthree">
							<ul class="social-icons agileinfo">
								<li><a href="https://fb.me/KaterynneBruzzi" class="facebook w3ls" title="fb.me/KaterynneBruzzi" target="_blank"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/katerynnebruzzi/" class="instagram wthree" title="katerynnebruzzi" target="_blank"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<!-- //Social-Icons -->
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- //Footer -->

		<script type="text/javascript">
		(function ($) {
			$.fn.floatLabels = function (options) {

				// Settings
				var self = this;
				var settings = $.extend({}, options);


				// Event Handlers
				function registerEventHandlers() {
					self.on('input keyup change', 'input, textarea', function () {
						actions.swapLabels(this);
					});
				}


				// Actions
				var actions = {
					initialize: function() {
						self.each(function () {
							var $this = $(this);
							var $label = $this.children('label');
							var $field = $this.find('input,textarea').first();

							if ($this.children().first().is('label')) {
								$this.children().first().remove();
								$this.append($label);
							}

							var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

							$label.data('placeholder-text', placeholderText);
							$label.data('original-text', $label.text());

							if ($field.val() == '') {
								$field.addClass('empty')
							}
						});
					},
					swapLabels: function (field) {
						var $field = $(field);
						var $label = $(field).siblings('label').first();
						var isEmpty = Boolean($field.val());

						if (isEmpty) {
							$field.removeClass('empty');
							$label.text($label.data('original-text'));
						}
						else {
							$field.addClass('empty');
							$label.text($label.data('placeholder-text'));
						}
					}
				}


				// Initialization
				function init() {
					registerEventHandlers();

					actions.initialize();
					self.each(function () {
						actions.swapLabels($(this).find('input,textarea').first());
					});
				}
				init();


				return this;
			};

			$(function () {
				$('.float-label-control').floatLabels();
			});
		})(jQuery);
		</script>
	</body>
</html>
