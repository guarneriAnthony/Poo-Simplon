<?php



class Utilisateur
{
    //  $pseudo, $email, $age sont des propriétés (ou attributs) de la Classe Utilisateur. Depuis PHP7 et PHP8 il est recommandé de typer les propriétés.
    private string $pseudo;


    /**
     * @var string
     *
     */
    private string $email;


    private int $age=83;

    private DateTime $date_inscription;




    public function __construct(string $pseudo, string $email, int $age)
    {
        $this->setEmail($email)->setAge($age)->setPseudo($pseudo)->setDateInscription(new DateTime());


    }


    // ici on créé un accesseur (getter) pour accéder à la valeur de la propriété privée $age
    // on parle d'encapsulation du code.
    public function getVerite(): string
    {
        // $this fait référence à l'objet courant

        if ($this->age <50){

            return $this->pseudo.' a '. $this->age.' ans';
        }else{

            return $this->pseudo.' Tu fais vraiment plus jeune que ton age';
        }

    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {

        $this->age=$age;
        return $this;

    }


    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail(string $email): Utilisateur
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     * @return Utilisateur
     */
    public function setPseudo(string $pseudo): Utilisateur
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateInscription(): DateTime
    {
        return $this->date_inscription;
    }

    /**
     * @param DateTime $date_inscription
     * @return Utilisateur
     */
    public function setDateInscription(DateTime $date_inscription): Utilisateur
    {
        $this->date_inscription = $date_inscription;
        return $this;
    }









}// fin de la classe
$joeBiden=new Utilisateur( 'jojo','jojo.com',90);

//$joeBiden->pseudo='Jojo';
//echo $joeBiden->pseudo;

echo $joeBiden->getVerite();

//$joeBiden->email='cezjzjzojdo';
//var_dump($pseudo); pas d'existence des propriétés en dehors de la classe

$moi=new Utilisateur('cezdigit','cez.com' ,37 );

var_dump($moi);

//echo $moi->pseudo; fatal error: non initialisée

//$moi->pseudo='cezdigit';
//echo '<br>';
//echo $moi->pseudo;
//$moi->email='cezdesaulle@gmail.com';
echo '<br>';

var_dump($moi);

//echo $moi->age;
echo $moi->getAge();
echo '<br>';


$tintin -> donnerFriandise($milou);
$tintin -> frappeChien($milou);




