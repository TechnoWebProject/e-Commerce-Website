<?php
$titre="Connexion";

echo '<p><i>Vous êtes ici</i> : <a href="./index.php">Index du forum</a> --> Connexion';
?>


<?php
echo '<h1>Connexion</h1>';
if (isset($_SESSION['id']) && $_SESSION['id']!=0) {
 erreur(ERR_IS_CO);
?>
<?php
//On reprend la suite du code
} else
{
    $message='';
    if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
  Vous devez remplir tous les champs</p>
  <p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
        $query=$db->prepare('SELECT id, username
        FROM forum_membres WHERE membre_pseudo = :pseudo');
        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
  if ($data['username'] == md5($_POST['password'])) // Acces OK !
  {
      $_SESSION['pseudo'] = $data['username'];
      $_SESSION['id'] = $data['id'];
      $message = '<p>Bienvenue '.$data['pseudo'].', 
      vous êtes maintenant connecté!</p>
      <p>Cliquez <a href="./index.php">ici</a> 
      pour revenir à la page d accueil</p>';  
  }
  else // Acces pas OK !
  {
      $message = '<p>Une erreur s\'est produite 
      pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
      pour revenir à la page précédente
      <br /><br />Cliquez <a href="./index.php">ici</a> 
      pour revenir à la page d accueil</p>';
  }
    $query->CloseCursor();
    }
    
    echo $message.'</div></body></html>';

}
?>
