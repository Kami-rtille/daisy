
<div class="socialite">
	<h1>Se connecter / S'enregistrer avec un compte social</h1>
	<p>
		<!-- Lien de redirection vers Google -->
		<a href="{{ route('socialite.redirect', 'google') }}" title="Connexion/Inscription avec Google" class="btn btn-link"  >Continuer avec Google</a>
	
		<!-- Lien de redirection vers Facebook -->
		<a href="{{ route('socialite.redirect', 'facebook') }}" title="Connexion/Inscription avec Facebook" class="btn btn-link"  >Continuer avec Facebook</a>

		</p>
</div>
