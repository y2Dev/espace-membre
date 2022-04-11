<?php
    class FormHtml
    {
        public $title = '' ;
        public $actionText = '' ;
        public $submitText = '' ;


        function afficheForm(){
            return 
            '<div class="formConnexion">

                <form action="'.$this->actionText.'" method="post">
                    <h2>'.$this->title.'</h2>
                    <br>
                    <label for="">E-mail</label>
                    <input type="text" name="email" placeholder="mail@domain.com">
                    <br>
                    <label for="">Mot de passe</label>
                    <input type="text" name="pass" placeholder="****">
                    <input class="btnSubmit" type="submit" value="'.$this->submitText.'">
                </form>
            </div>' ;
        }
    }
?>