<?php
	//Inintialisation de la session
    session_start();

	//Vérifie si les variables de session ne sont pas vides
	if(isset($_SESSION['userName']))
	{
		$userName = $_SESSION['userName'];
		$userAvatar = $_SESSION['avatar'];
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- 
        Auteur      : Alexis Rojas, David Dieperink, Stefan Petrovic
        Date        : 26.11.2021
        Description : Page d'affichage des requêtes SQL
    -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../resources/css/style.css" />
    <script src="../../resources/js/darkmode.js" defer></script>
    <script src="../../resources/js/formulaire.js" defer></script>
    <title>Accueil</title>
</head>
<body>
    <header>
        <nav>
            <ul>       
                <li><a id="active" href="index.html">Accueil </a></li>
                <li><a href="telephones.php">Téléphones</a></li>            
            </ul>
        </nav>
        <div class="connection">
            <ul>
                <?php if(isset($userName)){?>
                    <p><?php echo $userName ?></p>
                    <li><a href="lib/logout.php">Logout</a></li>
                <?php
                }
                else{?>
                    <li><a href="#" onclick="openModal2()">Sign In</a></li>
                    <li><a id="signUp" href="#" onclick="openModal()">Sign Up</a></li>   
                <?php
                }?>           
            </ul>
        </div>
    </header>
    <!-- Balises pour l'animation du soleil et la lune -->
    <div class="sun"></div>
    <div class="moonShadow"></div>
    <div class="moon"></div>
    <div id="star1" class="star"></div>
    <div id="star2" class="star"></div>
    <div id="star3" class="star"></div>
    <div id="star4" class="star"></div>
    <div id="star5" class="star"></div>
    <div id="star6" class="star"></div>
    <!-- Container des cases -->
    <div class="container">
        <!-- Logo ETML + nom du projet -->
        <div class="case">
            <img src="../../resources/img/etmlLogo.png" alt="" />
            <h3 class="title">P_GesProj2</h3>
        </div>
        <!-- Nom des auteurs -->
        <div class="case">
            <h3>CID2A</h3>
            <h4>2020-2021</h4>
            <ul>
                <li>Alexis Rojas</li>
                <li>David Dieperink</li>
                <li>Stefan Petrovic</li>
            </ul>
        </div>
        <!-- Langages et outils -->
        <div class="case">
            <h3>Langages / Outils</h3>
            <div id="svgLogos">
                <!-- Logo HTML -->
                <svg viewBox="0 0 128 128">
                    <path d="M9.032 2l10.005 112.093 44.896 12.401 45.02-12.387L118.968 2H9.032zm89.126 26.539l-.627 7.172L97.255 39H44.59l1.257 14h50.156l-.336 3.471-3.233 36.119-.238 2.27L64 102.609v.002l-.034.018-28.177-7.423L33.876 74h13.815l.979 10.919L63.957 89H64v-.546l15.355-3.875L80.959 67H33.261l-3.383-38.117L29.549 25h68.939l-.33 3.539z"></path>
                </svg>
                <!-- Logo CSS -->
                <svg viewBox="0 0 128 128">
                    <path d="M8.76 1l10.055 112.883 45.118 12.58 45.244-12.626L119.24 1H8.76zm89.591 25.862l-3.347 37.605.01.203-.014.467v-.004l-2.378 26.294-.262 2.336L64 101.607v.001l-.022.019-28.311-7.888L33.75 72h13.883l.985 11.054 15.386 4.17-.004.008v-.002l15.443-4.229L81.075 65H48.792l-.277-3.043-.631-7.129L47.553 51h34.749l1.264-14H30.64l-.277-3.041-.63-7.131L29.401 23h69.281l-.331 3.862z"></path>
                </svg>
                <!-- Logo MySql -->
                <svg viewBox="0 0 128 128">
                    <path d="M2.001 90.458h4.108V74.235l6.36 14.143c.75 1.712 1.777 2.317 3.792 2.317s3.003-.605 3.753-2.317l6.36-14.143v16.223h4.108V74.262c0-1.58-.632-2.345-1.936-2.739-3.121-.974-5.215-.131-6.163 1.976l-6.241 13.958-6.043-13.959c-.909-2.106-3.042-2.949-6.163-1.976C2.632 71.917 2 72.681 2 74.261v16.197zm31.898-13.206h4.107v8.938c-.038.485.156 1.625 2.406 1.661 1.148.018 8.862 0 8.934 0V77.208h4.117c.019 0-.004 14.514-.004 14.574.022 3.58-4.441 4.357-6.499 4.417H33.988v-2.764c.022 0 12.963.003 12.995-.001 2.645-.279 2.332-1.593 2.331-2.035v-1.078h-8.731c-4.062-.037-6.65-1.81-6.683-3.85-.002-.187.089-9.129-.001-9.219zM56.63 90.458h11.812c1.383 0 2.727-.289 3.793-.789 1.777-.816 2.646-1.922 2.646-3.372v-3.002c0-1.185-.987-2.292-2.923-3.028-1.027-.396-2.292-.605-3.517-.605h-4.978c-1.659 0-2.449-.5-2.646-1.606-.039-.132-.039-.237-.039-.369v-1.87c0-.105 0-.211.039-.342.197-.843.632-1.08 2.094-1.212l.395-.026h11.733v-2.738H63.504c-1.659 0-2.528.105-3.318.342-2.449.764-3.517 1.975-3.517 4.082v2.396c0 1.844 2.095 3.424 5.61 3.793.396.025.79.053 1.185.053h4.267c.158 0 .316 0 .435.025 1.304.105 1.856.343 2.252.816a.98.98 0 01.315.737v2.397c0 .289-.197.658-.592.974-.355.316-.948.527-1.738.58l-.435.026H56.63v2.738zm43.881-4.766c0 2.817 2.094 4.397 6.32 4.714.395.026.79.052 1.185.052h10.706V87.72h-10.784c-2.41 0-3.318-.606-3.318-2.055V71.497h-4.108v14.195zm-23.008.142v-9.765c0-2.48 1.742-3.985 5.186-4.46a7.8 7.8 0 011.108-.079h7.799c.396 0 .752.026 1.147.079 3.444.475 5.187 1.979 5.187 4.46v9.765c0 2.014-.74 3.09-2.445 3.792l4.048 3.653h-4.771l-3.274-2.956-3.296.209h-4.395a9.075 9.075 0 01-2.414-.343c-2.613-.712-3.88-2.085-3.88-4.355zm4.435-.237c0 .132.039.265.079.423.237 1.135 1.307 1.768 2.929 1.768h3.732l-3.428-3.095h4.771l2.989 2.7c.552-.295.914-.743 1.041-1.32.039-.132.039-.264.039-.396v-9.368c0-.105 0-.238-.039-.37-.238-1.056-1.307-1.662-2.89-1.662h-6.216c-1.82 0-3.008.792-3.008 2.032v9.288zm40.398-18.645c-2.525-.069-4.454.166-6.104.861-.469.198-1.216.203-1.292.79.257.271.297.674.502 1.006.394.637 1.059 1.491 1.652 1.938.647.489 1.315 1.013 2.011 1.437 1.235.754 2.615 1.184 3.806 1.938.701.446 1.397 1.006 2.082 1.509.339.247.565.634 1.006.789v-.071c-.231-.294-.291-.698-.503-1.006l-.934-.934c-.913-1.212-2.071-2.275-3.304-3.159-.982-.705-3.18-1.658-3.59-2.801l-.072-.071c.696-.079 1.512-.331 2.154-.503 1.08-.29 2.045-.215 3.16-.503l1.508-.432v-.286c-.563-.578-.966-1.344-1.58-1.867-1.607-1.369-3.363-2.737-5.17-3.879-1.002-.632-2.241-1.043-3.304-1.579-.356-.181-.984-.274-1.221-.575-.559-.711-.862-1.612-1.293-2.441a93.068 93.068 0 01-2.585-5.458c-.544-1.245-.9-2.473-1.579-3.59-3.261-5.361-6.771-8.597-12.208-11.777-1.157-.677-2.55-.943-4.021-1.292l-2.37-.144c-.481-.201-.983-.791-1.436-1.077-1.802-1.138-6.422-3.613-7.756-.358-.842 2.054 1.26 4.058 2.011 5.099.527.73 1.203 1.548 1.58 2.369.248.54.29 1.081.503 1.652.521 1.406.976 2.937 1.651 4.236.341.658.718 1.351 1.149 1.939.264.36.718.52.789 1.077-.443.62-.469 1.584-.718 2.369-1.122 3.539-.699 7.938.934 10.557.501.805 1.681 2.529 3.303 1.867 1.419-.578 1.103-2.369 1.509-3.95.092-.357.035-.621.215-.861v.072l1.293 2.585c.957 1.541 2.654 3.15 4.093 4.237.746.563 1.334 1.538 2.298 1.867v-.073h-.071c-.188-.291-.479-.411-.719-.646-.562-.551-1.187-1.235-1.651-1.867-1.309-1.776-2.465-3.721-3.519-5.745-.503-.966-.94-2.032-1.364-3.016-.164-.379-.162-.953-.502-1.148-.466.72-1.149 1.303-1.509 2.154-.574 1.36-.648 3.019-.861 4.739l-.144.071c-1.001-.241-1.352-1.271-1.724-2.154-.94-2.233-1.115-5.83-.287-8.401.214-.666 1.181-2.761.789-3.376-.187-.613-.804-.967-1.148-1.437a11.222 11.222 0 01-1.149-2.011c-.77-1.741-1.129-3.696-1.938-5.457-.388-.842-1.042-1.693-1.58-2.441-.595-.83-1.262-1.44-1.724-2.442-.164-.356-.387-.927-.144-1.293.077-.247.188-.35.432-.431.416-.321 1.576.107 2.01.287 1.152.479 2.113.934 3.089 1.58.468.311.941.911 1.508 1.077h.646c1.011.232 2.144.071 3.088.358 1.67.508 3.166 1.297 4.524 2.155 4.139 2.614 7.522 6.334 9.838 10.772.372.715.534 1.396.861 2.154.662 1.528 1.496 3.101 2.154 4.596.657 1.491 1.298 2.996 2.227 4.237.488.652 2.374 1.002 3.231 1.364.601.254 1.585.519 2.154.861 1.087.656 2.141 1.437 3.16 2.155.509.362 2.076 1.149 2.154 1.798zM90.237 39.593a5.124 5.124 0 00-1.293.144v.071h.072c.251.517.694.849 1.005 1.293l.719 1.508.071-.071c.445-.313.648-.814.646-1.58-.179-.188-.205-.423-.359-.646-.204-.3-.602-.468-.861-.719z"></path>
                </svg>
                <!-- Logo PHP -->
                <svg viewBox="0 0 128 128">
                    <path d="M64 33.039C30.26 33.039 2.906 46.901 2.906 64S30.26 94.961 64 94.961 125.094 81.099 125.094 64 97.74 33.039 64 33.039zM48.103 70.032c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34H41.7c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515a15.118 15.118 0 01-2.972 3.748zM69.414 73l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-33h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528L76.772 73h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zm-56.985 0h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458S41.708 54 38.934 54z"></path>
                </svg>
            </div>
        </div>
        <!-- Affichage Logo GitHub + Compte des auteurs -->
        <div class="case caseGitHub">
            <!-- Logo github -->
            <svg class="gitHubLogo" viewBox=" 0 0 24 24">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>             
            </svg>
            <!-- Liste des comptes Github -->
            <ul>
                <li><a href="https://github.com/Alexis1476">@Alexis1476</a></li>
                <li><a href="https://github.com/dieperid">@dieperid</a></li>
                <li><a href="https://github.com/XiJune">@XiJune</a></li>
            </ul>
        </div>
        <!-- Bouton pour activer le mode sombre -->
        <div class="case caseDarkmode">
            <label class="switch">
                <input id="chBoxDarkMode" type="checkbox" />
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div id="mapCon">
		<div id="simpleModal" class="modal">	
			<div class="modal-content">
				<div class="modal-header">
					<span onclick="closeModal()" class="closeBtn">&times;</span>
				</div>
				<div class="signUpDiv">
					<form method="POST" action="lib/register.php">
                        <div class="formItem">
                            <label for="cliNom">Nom</label>
                            <input type="text" placeholder="Nom" name="cliNom" id="cliNom" required>
                        </div>
                        <div class="formItem">
                            <label for="cliPrenom">Prénom</label>
                            <input type="text" placeholder="Prénom" name="cliPrenom" id="cliPrenom" required>
                        </div>
                        <div class="formItem">
                            <label for="cliNumTel">Téléphone</label>
                            <input type="text" placeholder="Téléphone" name="cliNumTel" id="cliNumTel" required>
                        </div>
                        <div class="formItem-localite">
                            <label for="cliLocalite">Localité</label>
                            <input type="text" placeholder="Localité" name="cliLocalite" id="cliLocalite" required>
                        </div>
                        <div class="formItem-cp">
                            <label for="cliCp">CP</label>
                            <input type="text" placeholder="CP" name="cliCp" id="cliCp" required>
                        </div>
                        <div class="formItem">
                            <label for="cliUsername">Nom d'utilisateur</label>
                            <input type="text" placeholder="Username" name="cliUsername" id="cliUsername" required>
                        </div>
                        <div class="formItem">
                            <label for="cliPassword">Mot de passe</label>
                            <input type="password" placeholder="Password" name="cliPassword" id="cliPassword">
                        </div>
							<div class="formItem-avatar">
								<label for="cliAvatar">Choisir un avatar</label>
								<input type="text" name="cliAvatar" id="cliAvatar" placeholder="Lien de l'avatar" required readonly>
								<button type="button" id="modalBouton"><svg class="svg-loupe" viewBox="0 0 512 512"><path d="M493.25,402.75L393.094,302.562C407.625,274.172,416,242.094,416,208C416,93.125,322.875,0,208,0C93.109,0,0,93.125,0,208
                                    s93.109,208,208,208c33.953,0,65.906-8.312,94.219-22.719c-0.031,0-0.094,0.031-0.125,0.062c0.156-0.094,0.344-0.156,0.531-0.25
                                    L402.75,493.25c25.031,25,65.562,25,90.5,0C518.25,468.281,518.25,427.75,493.25,402.75z M48,208c0-88.219,71.781-160,160-160
                                    c88.219,0,160,71.781,160,160s-71.781,160-160,160S48,296.219,48,208z M459.312,436.656c-6.25,6.25-16.375,6.25-22.625,0
                                    l-45.25-45.25c-6.25-6.25-6.25-16.375,0-22.625s16.375-6.25,22.625,0l45.25,45.25C465.594,420.281,465.594,430.406,459.312,436.656
                                    z"/></svg></button>
							</div>
							<button type="submit" id="boutonRegistre">Valider</button>
					</form>
				</div>
			</div>
		</div>
	</div>
    <div id="mapCon">
		<div id="simpleModal2" class="modal2">	
			<div class="modal-content">
				<div class="modal-header">
					<span onclick="closeModal2()" class="closeBtn">&times;</span>
				</div>
				<div class="loginDiv">
					<form method="POST" action="lib/checkLogin.php">
                        <div class="formItem">
                            <label for="userName">Nom d'utilisateur</label>
                            <input type="text" placeholder="Username" name="userName" id="userName" required>
                        </div>
                        <div class="formItem">
                            <label for="password">Mot de passe</label>
                            <input type="password" placeholder="Password" name="password" id="password">
                        </div>
                        <button type="submit" id="boutonLogin">Continuer</button>
					</form>
				</div>
			</div>
		</div>
	</div> 
</body>
</html>