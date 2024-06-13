<?php
class PersoBase{
    // Propriétés
    protected int $force = 100;

    protected int $agilite = 100;
    protected string $name; // typage en string
    protected ?int $hp; // typage en null ou int (pourrait rester vide à la création)
    protected int $age; // typage en int
    protected int $xp=0;// typage en int avec valeur par défaut
    protected ?int $level; // int ou null
    protected string $espece;
    private null|bool|int $alive; // depuis PHP 8.0 Union types

    // Constantes
    public const ESPECE_CHOICE = ["Humain",
                                     "Saiyan",
                                     "Elf",
                                     "Nain",
                                     "Cyborg",
                                    ];

    // Méthodes

        // constructeur
        public function __construct(string $name, int $age, string $espece){
            // $this->name = $name;
            $this->setName($name); // correcte
            $this->setAge($age);
            $this->setEspece($espece);
            $this->setAlive(true);
        }

        public function __toString()
        {
            // self::class => la classe où est déclarée la méthode __toString
            // $this::class => le nom de la classe qui a créé l'instance (objet)
            return self::class." ".$this::class." ".$this->getName();
        }


        // Getters - Accessors

        // getter de $force
        public function getForce():int
        {
            return $this->force;
        }

        // getter de $agilite
        public function getAgilite():int
        {
            return $this->agilite;
        }

        // getter de $name
        public function getName(): string 
        {
            return $this->name;
        }

        // getter de $hp (ou int ou null)
        public function getHp(): ?int
        {
            return $this->hp;
        }
        // getter de $age (int)
        public function getAge(): int
        {
            return $this->age;
        }

        // getter de $xp (int)
        public function getXp():int
        {
            return $this->xp;
        }

        // getter de $level (ou int ou null)
        public function getLevel():?int
        {
            return $this->level;
        }
        // getter de $espece (string)
        public function getEspece():string
        {
            return $this->espece;
        }
        // getter de $alive (null bool ou int) - si rien = null - si 0 => false, si 1 => true, si plus de 1 => int
        public function getAlive(): null|bool|int
        {
            return $this->alive;
        }

        // Setters - Mutators

        // Setter de force
        public function setForce(int $theforce): void
        {
            if($theforce>=0){
                $this->force = $theforce;
            }else{
                throw new Exception("La force ne peut être négative",339);
            }
        }

        // Setter de agilite
        public function setAgilite(int $theagilite): void
        {
            if($theagilite>=0){
                $this->agilite = $theagilite;
            }else{
                throw new Exception("L'agilité ne peut être négative",340);
            }
        }

        // Setter de name
        // le nom doit être protégé contre les
        // espaces avant et arrière et ne peux contenir
        // des tags, il doit également avoir plus de 2 caractères
        public function setName(string $thename){
            $thename = trim(strip_tags($thename));
            if(strlen($thename)<=2){
                throw new Exception("Nom trop court",333);
            }
            // si pas d'erreur
            $this->name = $thename;
        }

        // setter de $hp (int) int positif uniquement, sinon erreur 335
        public function setHp(int $thehp){
            if($thehp>0){
                $this->hp = $thehp;
            }else{
                throw new Exception("HP doit être positif",335);
            }
        }

        // setter de $age (int) doit être plus grand que 12 sinon erreur 336
        public function setAge(int $theage): void
        {
            if($theage > 12){
                $this->age = $theage;
            }else{
                throw new Exception("Age doit être plus grand que 12",336);
            }
        }

        // setter de $xp (int) seulement un entier positif sinon 337
        public function setXp(int $thexp): void
        {
            if($thexp>0){
                $this->xp = $thexp;
            }else{
                throw new Exception("XP doit être plus grand que 0",337);
            }
        }

        // setter de $level (int) seulement un entier positif sinon 338
        public function setLevel(int $thelevel): void
        {
            if($thelevel >0){
                $this->level = $thelevel;
            }else{
                throw new Exception("Le level doit être plus grand que 0",338);
            }
        }


        // setter de $alive (null bool ou int) - si null = null - si 0 => false, si 1 => true, si plus de 1 => int
        public function setAlive(int|bool|null $thealive): void
        {
            // if($thealive===null)
            if(is_null($thealive)){
                $this->alive = null;
            }elseif($thealive===0){
                $this->alive = false;
            }elseif($thealive===1){
                $this->alive = true;
            }else{
                $this->alive = $thealive;
            }
        }

        // Setter de espece
        public function setEspece(string $espece){
            if(in_array($espece, self::ESPECE_CHOICE)){
                $this->espece = $espece;
            }else{
                throw new Exception("Tu fais quoi là!",334);
            }
        }

        // tous les personnages peuvent avancer
        public function persoAvance(){
            return "Le personnage {$this} avance";
        }

}