<?php include("./includes/header.php");

			if (!empty($id))
				{
					echo'
					
			<div id="pre-main-part">
				<section class="inset no-padding">
					<div class="h">
						<nav class="breadcrumb" role="navigation" aria-label="Fil d\'Ariane">
							<ul class="breadcrumb__trail">
								<li class="breadcrumb__item breadcrumb__item--home ">
									<a href="/" ><span>Accueil</span></a>
								</li>
								<li class="breadcrumb__item  breadcrumb__item--current">Dashboard</li>
							</ul>
						</nav>
					</div>
				</section>
			</div>
			<div class="h espace espace">
				<div class="message_alert">
					<span class="bullet bullet--small bullet--blue-alt message_alert__icon"> <i class="fa fa-info"></i></span>
					<div class="message_alert__text">
						<p>Responsable en Marketing ou Développeur d\'application ou encore Motion Designer: découvrez tous les parcours disponibles chez 
						ClassAfrica sur&nbsp;<a href="'.ROOTPATH.'/parcours">'.ROOTPATH.'/parcours</a>&nbsp;!&nbsp;</p>
					</div>
				</div>
			</div>

					';
						$informations = Array( false, 'Une connexion est requise', '','', ROOTPATH.'/dashboard', 0) ; require_once('./information-index.php'); exit();
				}
			?>

		<main class="content">
			<div class="row">
				<div class="ca-container">
					<h1 class="accessibility-hidden">Des cours en ligne gratuit et des parcours promettant</h1>
					<div class="text-center">
						<h2 class="Titre_index">Prenez en main votre apprentissage</h2>
						<h3 class="Titre_index0 Titre_index00">Nos parcours 100% en ligne sont diplômants et vous garantissent un avenir.</h3>				
					</div>
				</div>
				<div class="col-sm-12">
					<div class="ca-container centered">
						<div class="parcours">
							<div class="parcours_element  parcours_element_base courseListItem ">
								<a href="/parcours/design" class="parcours_element_lien">
									<span class="hidden">Devenir Designer (Expert en Motion Design)</span>
									<div class="parcours_element_illustration  illustration_parcours  " style="background: #1396A4;background: linear-gradient(45deg, #1396A4 0%, #1396A4 100%);">
										<span>
											<img  src="parcours_design.png" alt="" width="170">
										</span>
									</div>
									<h3 class="parcours_element_titre  parcours_titre">Devenir Designer (Expert en Motion Design)</h3>
								</a>
							</div>
							<div class="parcours_element  parcours_element_base courseListItem ">
								<a href="/parcours/web" class="parcours_element_lien">
									<span class="hidden">Devenir Webmaster Junior (Expert en Description web)</span>
									<div class="parcours_element_illustration  illustration_parcours  " style="background: #35b58d;background: linear-gradient(45deg, #35b58d 0%, #35b58d 100%);">
										<span>
											<img  src="parcours_web.png" alt="" width="170">
										</span>
									</div>
									<h3 class="parcours_element_titre  parcours_titre">Devenir Webmaster (Expert en Description web)</h3>
								</a>
							</div>
							<div class="parcours_element  parcours_element_base courseListItem ">
								<a href="/parcours/programmation" class="parcours_element_lien">
									<span class="hidden">Devenir  Développeur(Expert en Description web et Programmation Mobile)</span>
									<div class="parcours_element_illustration  illustration_parcours" style="background: #8c0707;background: linear-gradient(45deg, #8c0707 0%, #8c0707 100%);">
										<span>
											<img data-reactroot="" src="parcours_web_2.png" alt="" width="170">
										</span>
									</div>
									<h3 class="parcours_element_titre  parcours_titre">Devenir  Développeur(Expert en Description web et Programmation Mobile)</h3>
								</a>
							</div>
							<div class="parcours_element  parcours_element_base courseListItem ">
								<a href="/parcours/poo" class="parcours_element_lien">
									<span class="hidden">Devenir App's Maker (Expert en Programmation mobile)</span>
									<div class="parcours_element_illustration  illustration_parcours  " style="background: #f28706;background: linear-gradient(45deg, #f28706 0%, #f28706 100%);">
										<span>
											<img data-reactroot="" src="parcours_poo.png" alt="" width="170">
										</span>
									</div>
									<h3 class="parcours_element_titre  parcours_titre">Devenir App's Maker (Expert en Programmation mobile)</h3>
								</a>
							</div>
							<div class="parcours_element  parcours_element_base courseListItem ">
								<a href="/parcours/socialmedia" class="parcours_element_lien">
									<span class="hidden">Devenir SocialMedia Manager (Expert en Marketing digital)</span>
									<div class="parcours_element_illustration  illustration_parcours  "  style="background: #5bc0de;background: linear-gradient(45deg, #5bc0de 0%, #5bc0de 100%);">
										<span>
											<img data-reactroot="" src="parcours_market.png" alt="" width="170">
										</span>
									</div>
									<h3 class="parcours_element_titre  parcours_titre">Devenir SocialMedia Manager (Expert en Marketing digital)</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ca-container">
				<div class="row">
					<div class="btn-alone">
						<a href="./parcours" class="btn btn-md btn-primary">Tous les parcours</a>
					</div>
				</div>			
			</div>
			<div class="ca-container">
				<div class="row">
					<div class="espace-bottom">
					</div>
				</div>
			</div>
			<div class="box-gray espace-bottom">
				<div class="ca-container">
					<div class="employmentbanniere__overlay"><i class="overlay__icon fa fa-html5"></i></div>
					<div class="h">
						<div class="text-center">
							<h2 class="Titre_index">Vous guider, pour garantir votre avenir</h2>
							<div class="col-sm-12 text-center">
								<div class="col-sm-3">
									<div class="icon">
										<img height="200" class="expert__image" alt src="/images/illustration-svg/badge001.svg"/>
									</div>
									<p class="avenir_content">
										Nos parcours vous apportent les compétences recherchées sur le marché du travail
									</p>
								</div>
								<div class="col-sm-6">
									<div class="avenir">
										<div class="avenir_illustration">
											<img height="200" class="" alt src="/images/illustration-svg/avenir-garanti.svg"/>
										</div>
										<span class="avenir_titre">
											Avenir garanti
										</span>
										<p class="avenir_content">
										Formation en plein temps <br>
										Ou nous vous remboursons. <br> 
										<a href="#" data-toggle="modal" data-target="#avenir_description">Voir les conditions</a>
										</p>
									</div>								
								</div>
								<div class="col-sm-3">
									<div class="icon">
										<img height="200" class="expert__image" alt src="/images/illustration-svg/badge-ca.svg"/>
									</div>	
									<p class="avenir_content">
										Nos certificats et nos diplômes sont officiellement reconnus
									</p>
								</div>
							</div>
						</div>
						<div class="modal fade" id="avenir_description" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" title="Fermer" aria-hidden="true"><i class="fa fa-times"></i></button>
										<h4 class="modal-title" id="myModalLabel">Assurance pour un Boulot, après la formation</h4>
									</div>
									<div class="modal-body">
										<p>
											L'engagement de ClassAfrica est simple : vous trouvez un emploi sous les 6 mois suivant l'obtention de votre diplôme ClassAfrica ou nous vous remboursons votre parcours.
										</p>
										<p>
											Toute personne diplômée de ClassAfrica peut bénéficier de ce dispositif complètement gratuit. Et chaque parcours est éligible.
										</p>
										<p>
											Pour profiter de l'Avenir garanti, vous devez :
										</p>
										<ul>
											<li>être diplômée de ClassAfrica,</li>
											<li>avoir 18 ans et plus,</li>
											<li>être en recherche d'emploi active,</li>
											<li>avoir un diplôme d'Etat (au minimum).</li>
										</ul>
									</div>
									<div class="modal-footer">
										<a href="/" class="btn btn-primary espace-bottom" >Plus de details</a><br/>
										<a href="/">Voir les <strong>Conditions Générales de Vente</strong></a>
									</div>
								</div><!- /.modal-content ->
							</div><!- /.modal-dialog ->
						</div><!- /.modal ->								
					</div>
				</div>			
			</div>
			<div class="row espace-top">
				<div class="ca-container">
					<div class="text-center espace-bottom">
						<h2 class="Titre_index">Des cours gratuit, faite votre premier pas</h2>			
					</div>
				</div>
				<div class="col-sm-12 espace-top">
					<div class="h ">
						<ul class="cours_section">
							<li class="cours_section__item">
								<a href="<?php echo ROOTPATH;?>/" class="cours_box ">
									<div class="cours_box__inner">
										<div class="cours_box__illustration " style='background-image:url("<?php echo ROOTPATH;?>/h.svg")'>
											<span class="cours_box_auteur">
											<span class="cours_box__auteur">Original</span>
											<span class="cours_box__auteur">ClassAfrica</span>
											</span>
										</div>
										<h3 class="cours_box__title">Créer votre site web en HTML5 et CSS3</h3>
									</div>
									<div class="cours_box__action">
										<span class="cours_box__actionLabel">
											<span class="pathAction pathAction_open"><i class="fa fa-eye"></i> Voir le cours</span>
										</span>
									</div>
								</a>
								<div class="cours_box__shareCertificate"></div>
							</li>
							<li class="cours_section__item">
								<a href="<?php echo ROOTPATH;?>/" class="cours_box ">
									<div class="cours_box__inner">
										<div class="cours_box__illustration " style='background-image:url("<?php echo ROOTPATH;?>/images/browser.svg")'>
											<span class="cours_box_auteur">
											<span class="cours_box__auteur">Original</span>
											<span class="cours_box__auteur">ClassAfrica</span>
											</span>
										</div>
										<h3 class="cours_box__title">Comprendre au mieux le web</h3>
									</div>
									<div class="cours_box__action">
										<span class="cours_box__actionLabel">
											<span class="pathAction pathAction_open"><i class="fa fa-eye"></i> Voir le cours</span>
										</span>
									</div>
								</a>
								<div class="cours_box__shareCertificate"></div>
							</li>
							<li class="cours_section__item">
								<a href="<?php echo ROOTPATH;?>/" class="cours_box ">
									<div class="cours_box__inner">
										<div class="cours_box__illustration " style='background-image:url("<?php echo ROOTPATH;?>/images/02.png")'>
											<span class="cours_box_auteur">
											<span class="cours_box__auteur">Original</span>
											<span class="cours_box__auteur">ClassAfrica</span>
											</span>
										</div>
										<h3 class="cours_box__title">Du marketing digital (Community Manager)</h3>
									</div>
									<div class="cours_box__action">
										<span class="cours_box__actionLabel">
											<span class="pathAction pathAction_open"><i class="fa fa-eye"></i> Voir le cours</span>
										</span>
									</div>
								</a>
								<div class="cours_box__shareCertificate"></div>
							</li>
							<li class="cours_section__item">
								<a href="<?php echo ROOTPATH;?>/" class="cours_box ">
									<div class="cours_box__inner">
										<div class="cours_box__illustration " style='background-image:url("<?php echo ROOTPATH;?>/images/01.jpg")' >
											<span class="cours_box_auteur">
											<span class="cours_box__auteur">Original</span>
											<span class="cours_box__auteur">ClassAfrica</span>
											</span>
										</div>
										<h3 class="cours_box__title">La communication visuelle à vos pieds</h3>
									</div>
									<div class="cours_box__action">
										<span class="cours_box__actionLabel">
											<span class="pathAction pathAction_open"><i class="fa fa-eye"></i> Voir le cours</span>
										</span>
									</div>
								</a>
								<div class="cours_box__shareCertificate"></div>
							</li>							
						</ul>	
					</div>
				</div>
			</div>	
			<div class="ca-container">
				<div class="row">
					<div class="btn-alone">
						<a href="./cours" class="btn btn-md btn-primary">Tous les cours</a>
					</div>
				</div>			
			</div>
			<div class="ca-container">
				<div class="row">
					<div class="espace-bottom">
					</div>
				</div>
			</div>
			<section class="section_ombre section_ombre2 section_ombre_blanc">
				<div class="h guide">
					<h2 class="guide_title">Un guide pour vous conduire vers la réussite</h2>
					<h3 class="guide_subtitle">Obtenez le soutien d'un expert en Video-call</h3>
					<div class="guide_content">
						<div class="guide_avatar">
							<span class="testimonialAvatar testimonialAvatar_shadow" style='background-image:url("<?php echo ROOTPATH;?>/images/hlone.jpg")' >
								Holson Mpangala
							</span>
							<br>
							<strong class="guide_emphasis">Holson Mpangala, Administrateur ClassAfrica</strong>
						</div>
						<div class="expert">
							<i class="expert__icon fa fa-users"></i>
							<span class="expert__title">
								Des experts qui adaptent votre apprentissage à votre niveau et étape de formation
							</span>
						</div>
						<div class="expert">
							<i class="expert__icon fa fa-line-chart"></i>
							<span class="expert__title">
								Des évaluations pour confirmer votre niveau à chaque étape de votre formation
							</span>
						</div>
					</div>
				</div>
			</section>
			<section class="section_ombre section_ombre2 communitybanniere__section">
				<div class="communitybanniere__overlay"></div>
				<div class="h communitybanniere">
					<h2 class="communitybanniere__title spacer-big">Pour vous, par vous</h2>
					<span class="communitybanniere__numberUsers">4 556 562</span>
					<span class="communitybanniere__message spacer-big">membres prêts à vous aider</span>
					<div class="expertsList">
						<div class="expertsList__item">
							<div class="expert">
								<i class="expert__icon"><img height="200"  src="/images/illustration-svg/user-conversation.svg"/></i>
								<span class="expert__title">
								Profitez des corrections détaillées par vos pairs
								</span>
							</div>
						</div>
						<div class="expertsList__item">
							<div class="expert">
								<i class="expert__icon"><img height="200"  src="/images/illustration-svg/user-help.svg"/></i>
								<span class="expert__title">
								Obtenez des conseils<br> sur le forum
								</span>
							</div>
						</div>
						<div class="expertsList__item">
							<div class="expert">
								<i class="expert__icon"><img height="200"  src="/images/illustration-svg/005-video-chat.svg"/></i>
								<span class="expert__title">
								Accédez à des espaces de discussions privés
								</span>
							</div>
						</div>
					</div>
					<div class="expertsList">
						<div class="expertsList__item">
							<div class="expert">
								<i class="expert__icon"><img height="200"  src="/images/illustration-svg/user.svg"/></i>
								<span class="expert__title">
								Profitez des corrections détaillées par vos pairs
								</span>
							</div>
						</div>
						<div class="expertsList__item">
							<div class="expert">
								<i class="expert__icon"><img height="200"  src="/images/illustration-svg/chat.svg"/></i>
								<span class="expert__title">
								Obtenez des conseils<br> sur le forum
								</span>
							</div>
						</div>
						<div class="expertsList__item">
							<div class="expert">
								<i class="expert__icon"><img height="200"  src="/images/illustration-svg/user.svg"/></i>
								<span class="expert__title">
								Accédez à des espaces de discussions privés
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="row">
				<section class="ca-container">
					<div class="h">
						<h2 class="Titre_index text-center espace">Faites une découverte sur notre Softastuces</h2><br/>
						<ul class="cours_section">
							<li class="cours_section__item">
								<a href="<?php echo ROOTPATH;?>/softastuces/" class="cours_box">
									<div class="cours_box__descriptionWrapper">
										<div class="cours_box__descriptionTitle">Utilisation avancer du MuseScore</div>
										<p class="cours_box__description">
										Avec un peu beaucoup de chance, vous réalisez qu'il est en réalité trop simple 
										la création des partions musicaux sur MuseScore.
										</p>
									</div>
									<div class="cours_box__inner">
										<div class="cours_box__illustration " style='background-image:url("<?php echo ROOTPATH;?>/h.svg")'>			
											<span class="cours_box_auteur">
												<span class="cours_box__auteur">Original</span>
												<span class="cours_box_auteurOC">ClassAfrica</span>
											</span>
										</div>
										<h3 class="cours_box__title">Utilisation avancer du MuseScore</h3>
									</div>
									<div class="cours_box__action">
										<span class="cours_box__actionLabel">
											<span class="pathAction pathAction--open">Voir le cours</span>
										</span>
									</div>
								</a>
								<div class="cours_box__shareCertificate">
								</div>
							</li>
							<li class="cours_section__item">
								<a href="<?php echo ROOTPATH;?>/softastuces/" class="cours_box">
									<div class="cours_box__descriptionWrapper">
										<div class="cours_box__descriptionTitle">Utilisation avancer du MuseScore</div>
										<p class="cours_box__description">
										Avec un peu beaucoup de chance, vous réalisez qu'il est en réalité trop simple 
										la création des partions musicaux sur MuseScore.
										</p>
									</div>
									<div class="cours_box__inner">
										<div class="cours_box__illustration " style='background-image:url("<?php echo ROOTPATH;?>/h.svg")'>			
											<span class="cours_box_auteur">
												<span class="cours_box__auteur">Original</span>
												<span class="cours_box_auteurOC">ClassAfrica</span>
											</span>
										</div>
										<h3 class="cours_box__title">Utilisation avancer du MuseScore</h3>
									</div>
									<div class="cours_box__action">
										<span class="cours_box__actionLabel">
											<span class="pathAction pathAction--open">Voir le cours</span>
										</span>
									</div>
								</a>
								<div class="cours_box__shareCertificate">
								</div>
							</li>
							<li class="cours_section__item">
								<a href="<?php echo ROOTPATH;?>/softastuces/" class="cours_box">
									<div class="cours_box__descriptionWrapper">
										<div class="cours_box__descriptionTitle">Utilisation avancer du MuseScore</div>
										<p class="cours_box__description">
										Avec un peu beaucoup de chance, vous réalisez qu'il est en réalité trop simple 
										la création des partions musicaux sur MuseScore.
										</p>
									</div>
									<div class="cours_box__inner">
										<div class="cours_box__illustration " style='background-image:url("<?php echo ROOTPATH;?>/h.svg")'>			
											<span class="cours_box_auteur">
												<span class="cours_box__auteur">Original</span>
												<span class="cours_box_auteurOC">ClassAfrica</span>
											</span>
										</div>
										<h3 class="cours_box__title">Utilisation avancer du MuseScore</h3>
									</div>
									<div class="cours_box__action">
										<span class="cours_box__actionLabel">
											<span class="pathAction pathAction--open">Voir le cours</span>
										</span>
									</div>
								</a>
								<div class="cours_box__shareCertificate">
								</div>
							</li>
							<li class="cours_section__item">
								<a href="<?php echo ROOTPATH;?>/softastuces/" class="cours_box">
									<div class="cours_box__descriptionWrapper">
										<div class="cours_box__descriptionTitle">Utilisation avancer du MuseScore</div>
										<p class="cours_box__description">
										Avec un peu beaucoup de chance, vous réalisez qu'il est en réalité trop simple 
										la création des partions musicaux sur MuseScore.
										</p>
									</div>
									<div class="cours_box__inner">
										<div class="cours_box__illustration " style='background-image:url("<?php echo ROOTPATH;?>/h.svg")'>			
											<span class="cours_box_auteur">
												<span class="cours_box__auteur">Original</span>
												<span class="cours_box_auteurOC">ClassAfrica</span>
											</span>
										</div>
										<h3 class="cours_box__title">Utilisation avancer du MuseScore</h3>
									</div>
									<div class="cours_box__action">
										<span class="cours_box__actionLabel">
											<span class="pathAction pathAction--open">Voir le cours</span>
										</span>
									</div>
								</a>
								<div class="cours_box__shareCertificate">
								</div>
							</li>
						</ul>				
					</div>
				</section>
			</div>
			<section class="section_ombre section_ombre-noShadow  section_ombre-withBackground">
				<div class="h">
					<div class="blog_msg_box blog_msg_box-shadow blog_msg_box-flipped">
						<div class="testimonialAvatar blog_msg_box__avatar blog_msg_box__playVideo" style="background-image: url('<?php echo ROOTPATH;?>/images/hlone.jpg');">
							Hlone Kents
						</div>
						<div class="blog_msg blog_msg_details">
							<span class="blog_msg__name">Hlone Kents</span>
							<span class="blog_msg__qualification">Développeur web</span>
							<blockquote class="blog_msg__words">
								« ClassAfrica, c’est la possibilité de s’ouvrir à de nouvelles perspectives aussi bien personnelles que professionnelles. »
							</blockquote>
							<a target="_blank" class="blog_msg__link btn btn-link" title="Lire la suite">Lire la suite</a>
						</div>
					</div>
					<div class="blog_msg_box blog_msg_box-shadow">
						<div class="testimonialAvatar blog_msg_box__avatar blog_msg_box__playVideo" style="background-image:url('<?php echo ROOTPATH;?>/images/gu.jpg');">
							Alain Banza
						</div>
						<div class="blog_msg blog_msg_details">
							<span class="blog_msg__name">Alain Banza</span>
							<span class="blog_msg__qualification">Développeur web</span>
							<blockquote class="blog_msg__words">
								« La formation ClassAfrica m'a apporté un bagage technique et des projets professionnels que je peux présenter et qui m'aident à trouver un travail plus rapidement. »
							</blockquote>
						 <a target="_blank" class="blog_msg__link btn btn-link" title="Lire la suite">Lire la suite</a>
						</div>
					</div>
					<div class="blog_msg_box blog_msg_box-shadow blog_msg_box-flipped">
						<div class="testimonialAvatar blog_msg_box__avatar blog_msg_box__playVideo" style="background-image: url('<?php echo ROOTPATH;?>/images/03.jpg');">
						Jeanne
						</div>
						<div class="blog_msg blog_msg_details">
							<span class="blog_msg__name">Jeanne</span>
							<span class="blog_msg__qualification">Développeuse web</span>
							<blockquote class="blog_msg__words">
								« ClassAfrica, c'est la liberté de me former où je veux, quand je veux et d'avoir le travail que je veux. » 
							</blockquote>
							<a target="_blank" class="blog_msg__link btn btn-link" title="Lire la suite">Lire la suite</a>
						</div>
					</div>
					<form action="sample_posteddata.php" method="post">
		<p>
			<label for="editor1">
				Editor 1:
			</label>
			<textarea class="ckeditor" id="j"></textarea>
		</p>
		<p>
			<input type="submit" value="Submit">
		</p>
	</form>
				</div>
			</section>
	</main>
<?php include("./includes/footer.php");?>
